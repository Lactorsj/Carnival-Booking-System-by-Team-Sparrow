<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


use App\Models\Reservation;
use App\Models\User;

class CheckIn extends Controller
{   
    public function signIn(Request $request)
    {
        return view('CheckIn', ['carnival_title' => 'test']);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'password' => 'required'
        ]);
		


        $uc = Reservation::where('invitation', $request->code)->first();
        if (empty($uc)) {
            return view('info', ['url' => url('CheckIn'), 'message' => 'Invite code not found', 'jump_time' => 3]);
        }
        if ($uc['state'] == 1) {
            return view('info', ['url' => url('CheckIn'), 'message' => 'The invitation code has been used', 'jump_time' => 3]);
        }
		
		//获取当前天数
        if ($uc['reserveDate'] < env('CURRENT_DAY')) {
            return view('info', ['url' => url('CheckIn'), 'message' => 'Invite code expired', 'jump_time' => 3]);
        }
		if ($uc['reserveDate'] > env('CURRENT_DAY')) {
            return view('info', ['url' => url('CheckIn'), 'message' => 'The invitation code is not in use', 'jump_time' => 3]);
        }

        $user = User::find($uc['user_id']);

        if (Auth::attempt(['email' => $user['email'], 'password' => $request->password])) {
            $request->session()->regenerate();

            Reservation::where('reserve_id', $uc['reserve_id'])->update(['state' => 1]);

            return view('success', ['url' => url('CheckIn'), 'message' => 'signin success', 'jump_time' => 3, 'uname' => $user['name']]);
        }

        return view('info', ['url' => url('CheckIn'), 'message' => 'password error', 'jump_time' => 3]);
    }

    public function CheckOk()
    {
        return 'Welcome ';
    }

}


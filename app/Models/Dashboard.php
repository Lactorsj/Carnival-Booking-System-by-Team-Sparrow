<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dashboard extends Model
{
    use HasFactory;

    public function SearchInvitation($user)
    {
        $userid = DB::table('users')->where('name', $user)->value('id');
        $invitationList =  DB::table('reservation')->select('reserve_id', 'reserve_date', 'invitation', 'state')
            ->where('user_id', $userid)->orderBy('reserve_date', 'desc')->get();

        return $invitationList;
    }

    public function InvitationNum($user)
    {
        $userid = DB::table('users')->where('name', $user)->value('id');
        $invitationNum =  DB::table('reservation')->select('reserve_id', 'reserve_date', 'invitation', 'state')
            ->where('user_id', $userid)->orderBy('reserve_date', 'desc')->count();
        return $invitationNum;
    }

    public function DeleteInvatation($ReserveId)
    {
        $ans = DB::table('reservation')->where('reserve_id', $ReserveId)->delete();
        return $ans;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Booking extends Model
{
    use HasFactory;

    public function CreateInvitationCode()
    {
        $str = array_merge(range('A','Z'));
        while (true)
        {
            $invitationcode = '';
            $str_length = count($str);
            for($i = 0;$i < 6;$i++)
            {
                $rand = mt_rand(0,$str_length - 1);
                $invitationcode .= $str[$rand];
            }
            if(DB::table('reservation')->where('invitation','=',$invitationcode)
            ->count() == 0)
            {
                break;
            }
        }
        return $invitationcode;
    }

    public function InfoInsert($user,$day)
    {
        $bookinfo = new Booking();
        $invicode = $bookinfo->CreateInvitationCode();
        DB::insert("insert into reservation(user_id,reserveDate,invitation) 
        values($user,$day,$invicode)");
    }

    public function InfoSearch($day)
    {
        $totalnum = DB::table('reservation')->where('reserveDate','=',$day)->count();
        return $totalnum;
    }

    public function InfoSearchPersonalInday($user,$day)
    {
        $userid = DB::table('user')->where('id',$user)->get();
        $PersonalnumInday = DB::table('reservation')->where('user_id',$userid)
        ->where('reserveDate',$day)->count();
        return $PersonalnumInday;
    }

    public function InfoSearchPersonaltotal($user)
    {
        $userid = DB::table('user')->where('id',$user)->get();
        $Personalnumtotal = DB::table('reservation')->where('user_id',$userid)->count();
        return $Personalnumtotal;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

global $CARNIVAL_DAYS,$CURRENT_DAY;
$CARNIVAL_DAYS = 5;
$CURRENT_DAY = 0;

class BookingController extends Controller
{
    public function BookingView()
    {
        return view('BookingView');
    }

    public function access($user,$day)
    {
        $Info = new Booking();
        if($Info->InfoSearch($day) > 10)
        {
            header('http://localhost:8000/dashboard');
            echo "已达单日客流量最大值";
            exit;
        }
        else
        {
            if($Info->InfoSearchPersonalInday($user,$day) > 1)
            {
                header('http://localhost:8000/dashboard');
                echo "已达单人单日预约最大值";
                exit;
            }
            else if($Info->InfoSearchPersonaltotal($user) > 3)
            {
                header('http://localhost:8000/dashboard');
                echo "已达单人狂欢节期间预约最大值";
                exit;
            }
            else
            {
                $Info->InfoInsert($user,$day);
                header('http://localhost:8000/dashboard');
                echo "预约成功";
                exit;
            }
        }
    }
}

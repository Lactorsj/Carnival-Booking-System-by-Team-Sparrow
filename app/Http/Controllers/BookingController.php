<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function BookingView()
    {
        return view('BookingView');
    }

    public function DayIsOk()
    {
        if($_ENV['CURRENT_DAY'] < $_ENV['CARNIVAL_DAYS'])
        {
            return true;
        }
        else
            return false;
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

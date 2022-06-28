<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function access(Request $request)
    {
        $request = request();
        $username = Auth::user()->name;
        $Info = new Booking();
        if($Info->InfoSearch($request->input('day')) >= $_ENV['MaxInDay'])
        {
            header('refresh:0.1;url=http://localhost:8000/booking');
            echo "<script>alert('已达单日客流量最大值')</script>";
            exit();
        }
        else
        {
            if($Info->InfoSearchPersonaltotal($username) >= $_ENV['MaxInCarnivalPersonal'])
            {
                header('refresh:0.1;url=http://localhost:8000/booking');
                echo "<script>alert('已达单人狂欢节期间预约最大值')</script>";
                exit();
            }
            else if($Info->InfoSearchPersonalInday($username,$request->input('day')) >= $_ENV['MaxInDayPersonal'])
            {
                header('refresh:0.1;url=http://localhost:8000/booking');
                echo "<script>alert('已达单人单日预约最大值')</script>";
                exit();
            }
            else
            {
                $Info->InfoInsert($username,$request->input('day'));
                header('refresh:0.1;url=http://localhost:8000/dashboard');
                echo "<script>alert('预约成功')</script>";
                exit();
            }
        }
    }
}

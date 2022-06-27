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

    public function access(Request $request)
    {
        $request = request();
        $Info = new Booking();
        $Info->InfoInsert($request->input('user'),$request->input('day'));
        header('refresh:0.1;url=http://localhost:8000/dashboard');
        echo "<script>alert('预约成功')</script>";
        exit();
    }
}
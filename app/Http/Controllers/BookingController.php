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
        if ($_ENV['CURRENT_DAY'] < $_ENV['CARNIVAL_DAYS']) {
            return true;
        } else
            return false;
    }

    public function access(Request $request)
    {
        $request = request();
        $username = Auth::user()->name;
        $Info = new Booking();
        if ($Info->InfoSearch($request->input('day')) >= $_ENV['MaxInDay']) {
            header('refresh:0.1;url=http://localhost:8000/booking');
            echo "<script>alert('It has reached its maximum daily passenger flow')</script>";
            exit();
        } else {
            if ($Info->InfoSearchPersonaltotal($username) >= $_ENV['MaxInCarnivalPersonal']) {
                header('refresh:0.1;url=http://localhost:8000/booking');
                echo "<script>alert('You have reached the maximum number of reservations during Tech Carnival')</script>";
                exit();
            } else if ($Info->InfoSearchPersonalInday($username, $request->input('day')) >= $_ENV['MaxInDayPersonal']) {
                header('refresh:0.1;url=http://localhost:8000/booking');
                echo "<script>alert('You have reached the maximum number of daily reservations')</script>";
                exit();
            } else {
                $Info->InfoInsert($username, $request->input('day'));
                header('refresh:0.1;url=http://localhost:8000/dashboard');
                echo "<script>alert('Book Successfully')</script>";
                exit();
            }
        }
    }
}

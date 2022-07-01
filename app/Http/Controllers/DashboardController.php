<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $username = Auth::user()->name;
        $dashboard = new Dashboard();
        $num = $dashboard->InvitationNum($username);
        $invitationList = $dashboard->SearchInvitation($username);

        return view('dashboard', ['number' => $num, 'invList' => $invitationList]);
    }

    public function InvDelete(Request $request)
    {
        $invId = $request->input('invId');
        $dashboard = new Dashboard();
        $ans = $dashboard->DeleteInvatation($invId);
        if ($ans == 1) {
            header('refresh:0.1;url=http://localhost:8000/dashboard');
            echo "<script>alert('Delete Successfully')</script>";
            exit();
        } else {
            header('refresh:0.1;url=http://localhost:8000/dashboard');
            echo "<script>alert('Delete failed. Please try again or refresh the page')</script>";
            exit();
        }
    }
}

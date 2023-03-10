<?php

namespace App\Http\Controllers;

use App\Models\Maintest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $this->authorize('admin');
        return view('home.admin.index', [
            "title" => "Home",
            "header" => "Home Admin",
        ]);
    }

    public function dashboard()
    {
        $this->authorize('admin');
        return view('home.admin.dashboard', [
            "title" => "Dashboard",
            "header" => "Dashboard Admin",
            "users" => User::all(),
        ]);
    }

    public function dashboard_2()
    {
        $this->authorize('admin');
        return view('home.admin.dashboard-2', [
            "title" => "Dashboard",
            "header" => "Dashboard Admin",
            "users" => User::all(),
            "tests" => Maintest::all()
        ]);
    }
}

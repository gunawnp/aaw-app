<?php

namespace App\Http\Controllers;

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
            "users" => User::all()
        ]);
    }
}

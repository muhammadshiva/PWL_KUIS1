<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }

    public function supplier() {
        return view('admin.supplier');
    }

    public function pegawai() {
        return view('admin.pegawai',  ['users' => User::index()]);
    }
}

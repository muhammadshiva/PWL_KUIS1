<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Supplier;

class DashboardController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }

    public function supplier() {
        return view('admin.supplier',  ['suppliers' => Supplier::supplier()]);
    }

    public function pegawai() {
        return view('admin.pegawai',  ['users' => User::index()]);
    }

    public function pelanggan() {
        return view('admin.pelanggan');
    }
}

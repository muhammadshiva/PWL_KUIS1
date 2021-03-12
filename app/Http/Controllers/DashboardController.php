<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Supplier;
use App\Models\Pelanggan;
use App\Models\Barang;

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
        return view('admin.pelanggan', ['pelanggans' => Pelanggan::pelanggan()]);
    }

    public function barang() {
        return view('admin.barang',  ['barangs' => Barang::barang()]);
    }
}

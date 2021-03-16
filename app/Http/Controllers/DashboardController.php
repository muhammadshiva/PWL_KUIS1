<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Supplier;
use App\Models\Pelanggan;
use App\Models\Barang;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    public function index() {
        
        return view('admin.dashboard', ['countSupplier' => Supplier::count(), 'countPelanggan' => Pelanggan::count(), 'suppliers' => Supplier::supplier(), 'movies' => Barang::barang()]);
    }

    public function supplier() {
        return view('admin.supplier',  ['suppliers' => Supplier::supplier()]);
    }

    public function pegawai() {
        return view('admin.pegawai',  ['users' => User::index()]);
    }

    public function detailPegawai($id) {
        return view('admin.user', ['pegawai' => User::detailData($id)]);
    }
 
    public function pelanggan() {
        return view('admin.pelanggan', ['pelanggans' => Pelanggan::pelanggan()]);
    }

    public function barang() {
        return view('admin.barang',  ['barangs' => Barang::barang()]);
    }
}

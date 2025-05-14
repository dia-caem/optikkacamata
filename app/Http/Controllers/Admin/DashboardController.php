<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $totalUser = User::count();
        $produkTerbaru = Produk::latest()->take(3)->get(); // Ambil 3 produk terbaru

        return view('admin.dashboard', compact('totalUser', 'produkTerbaru'));
    }
}

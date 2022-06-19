<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Pinjaman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function adminHome()
    {
        $d['user'] = User::count();
        return view('admin.index', $d);
    }

    public function agenHome()
    {
        return view('agen');
    }

    public function anggotaHome()
    {
        return view('anggota.index');
    }

    public function index()
    {
        $models = Pinjaman::all();
        return view('admin.laporan', compact('models'));
    }
}

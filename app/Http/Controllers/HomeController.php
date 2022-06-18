<?php

namespace App\Http\Controllers;

use App\Models\User;

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
    public function index()
    {
        return view('anggota.index');
    }

    public function agenHome()
    {
        return view('agen.index');
    }
    public function adminHome()
    {
        $d['user'] = User::count();
        return view('admin.index', $d);
    }

    public function anggotaHome()
    {

        return view('admin.userall');
    }
}

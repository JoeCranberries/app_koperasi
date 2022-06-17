<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $datas = User::all();
        return view('admin.userall', compact('datas'));
    }
}

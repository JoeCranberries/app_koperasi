<?php

namespace App\Http\Controllers;

use App\Models\Pinjaman;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $datas = User::all();
        return view('admin.userall', compact('datas'));
    }

    public function destroy($id)
    {
        $datas = User::find($id);
        $datas->delete();
        return redirect('admin/anggota');
    }
}

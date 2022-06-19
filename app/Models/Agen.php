<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agen extends Model
{
    use HasFactory;

    public function index()
    {
        return view('agen.index');
    }

    /*
   AJAX request
   */
    public function agenCari(Request $request)
    {

        $search = $request->search;

        if ($search == '') {
            $datas = User::orderby('name', 'asc')->select('id', 'name')->limit(5)->get();
        } else {
            $datas = User::orderby('name', 'asc')->select('id', 'name')->where('name', 'like', '%' . $search . '%')->limit(5)->get();
        }

        $response = array();
        foreach ($datas as $value) {
            $response[] = array("value" => $value->id, "label" => $value->nama_agen);
        }

        return response()->json($response);
    }
}

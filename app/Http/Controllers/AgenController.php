<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;


class AgenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $models = Pinjaman::all();
        return view('agen.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $models = new Pinjaman;
        return view('agen.create', compact('models'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $models = new Pinjaman;
        $models->nama_agen = $request->nama_agen;
        $models->jumlah = $request->jumlah;
        $models->nama_peminjam = $request->nama_peminjam;
        $models->jangka_waktu = $request->jangka_waktu;
        $models->bayar_perbulan = $request->bayar_perbulan;
        $models->status = $request->status;
        $models->save();

        return redirect('agen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $models = Pinjaman::find($id);
        return view('agen.edit', compact('models'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $models = Pinjaman::find($id);
        $models->nama_agen = $request->nama_agen;
        $models->jumlah = $request->jumlah;
        $models->nama_peminjam = $request->nama_peminjam;
        $models->jangka_waktu = $request->jangka_waktu;
        $models->bayar_perbulan = $request->bayar_perbulan;
        $models->status = $request->status;
        $models->save();

        return redirect('agen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $models = Pinjaman::find($id);
        $models->delete();
        return redirect('agen');
    }

    public function agenCari()
    {
        header('Content-Type: application/json');
        echo json_encode([['label' => 'lorem', 'value' => 1], ['label' => 'ipsum', 'value' => 2]]);
    }
}

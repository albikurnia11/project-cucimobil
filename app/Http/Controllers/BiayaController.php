<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Biaya;
use App\Transaksi;

class BiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Biaya::all();
        return view('data.form',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $diskons = Diskon::pluck('Harga_Promo', 'id');
        return view('data.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Biaya([
            'jenis_mobil' => $request->get('jenis_mobil'),
            'harga' => $request->get('harga'),
            ]);
        $data->save();
        return redirect('/home')->with('Success', 'Data Telah Tersimpan!');
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
        $data = Biaya::find($id);
        $diskons = Diskon::get();
        return view('data.edit', compact('data','diskons'));
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
        $data = Biaya::find($id);
        $data->jenis_mobil = $request->get('jenis-mobil');
        $data->harga = $request->get('harga');
        $data->save();

        return redirect('/home')->with('Success', 'Data Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Biaya::find($id);
        $data->delete();

        return redirect('/home')->with('Success', 'Data Telah Di Hapus!');
    }
}

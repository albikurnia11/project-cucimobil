<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Diskon;

class DiskonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Diskon::all();
        return view('diskon.form',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $diskons = Diskon::pluck('Harga_Promo', 'id');
        return view('diskon.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Diskon([
            'Promo' => $request->get('Promo'),
            'Harga_Promo' => $request->get('Harga_Promo'),
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
        $data = Diskon::find($id);
        return view('diskon.edit', compact('data'));
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
        $data = Diskon::find($id);
        $data->Promo = $request->get('Promo');
        $data->Harga_Promo = $request->get('Harga_Promo');
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
        $data = Diskon::find($id);
        $data->delete();

        return redirect('/home')->with('Success', 'Data Telah Di Hapus!');
    }
}

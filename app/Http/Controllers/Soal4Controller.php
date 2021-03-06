<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Stok;
use Illuminate\Http\Request;

class Soal4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        $stok = Stok::all();
        return view('soal4', compact('barang', 'stok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tabelBarang = $request->input('barang');
        $tabelStok = $request->input('stok');
        $data = $request->all();
        if ($tabelBarang) {
            $data['gambar_barang'] = $request->file('gambar_barang')->store(
                'assets', //tempatnya
                'public' //agar public
            );
            Barang::create($data);
        }else if ($tabelStok) {
            Stok::create($data);
        }
        return $this->index();

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $tabelBarang = $request->input('barang');
        $tabelStok = $request->input('stok');
        $data = $request->all();
        if ($tabelBarang) {
            Barang::findOrFail($id)->delete();
        } else if ($tabelStok) {
            Stok::findOrFail($id)->delete();
        }
        return $this->index();
    }
}

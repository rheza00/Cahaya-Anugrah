<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('pencarian', ['pencarian' => $barangs]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahbarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $barangs = new Barang;
        // $barangs->nama = $request->nama;
        // $barangs->kategori = $request->kategori;
        // $barangs->kondisi = $request->kondisi;
        // $barangs->jumlah = $request->jumlah;
        // $barangs->harga = $request->harga;
        // $barangs->image = $request->image;
        // $barangs->deskripsi = $request->deskripsi;
        

        // if($request->hasfile('image')){
        //     $request->file('image');
        //     return Barang::putFile('public/new',$request->file('image'));
        // }else{
        //     return '';
        // }
        

        // if($request->hasfile('image')){
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $file->move('/IMG');
        // } 

        // $barangs->save();
        //else {
        //     return $request;
        //     $employee->image='';
        // }


        // if(Barang::hasfile('image')){
        //     $file = Barang::file('image');
        //     $file->move('IMG', $file->getClientOriginalName());
        // }

        Barang::create($request->all());

        return redirect('/viewadmin');
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('info', compact('barang'));
    }

        public function show2(Barang $barang)
    {
        return view('viewadmindelete', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('editbarang', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        Barang::where('id', $barang->id)
                ->update([
                     'nama' => $request->nama,
                     'kategori' => $request->kategori,
                     'kondisi' => $request->kondisi,
                     'jumlah' => $request->jumlah,
                     'harga' => $request->harga,
                     'deskripsi' => $request->deskripsi,
                     'image' => $request->image
                ]);
        return redirect('/viewadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->id);
        return redirect('/viewadmin');
    }
}

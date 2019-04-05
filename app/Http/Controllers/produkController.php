<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\produkModel;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
         //mendenifisikan kata kuci
         $cari = $request->cari;
         //mencari data di database
         $produk = DB::table('produk')
         ->where('id_subkategori','like',"%".$cari."%")
         ->paginate();
         //return data ke view
         return view('produk.index',['produk' => $produk]);
    }

    public function addform(){
        $produk = DB::table('subkategori')->get();
        return view('produk.addform', compact('produk'));
    }
    public function editform($id){
        $data = DB::table('produk')->where('id_produk',$id)->get();
		return view('produk.editform', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        DB::table('produk')->insert([
            'id_subkategori' => $request->id_subkategori,
            'nama_produk' => $request->nama_produk,
            'stok' => $request->stok,
            'image' => $request->image,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
          ]);

          return redirect()->route('produk.index');
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
        DB::table('produk')->where('id_produk',$id)->update([
            'id_subkategori' => $request->id_subkategori,
            'nama_produk' => $request->nama_produk,
            'stok' => $request->stok,
            'image' => $request->image,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            ]);		
            return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('produk')->where('id_produk',$id)->delete();
		return redirect('produk');
    }
}

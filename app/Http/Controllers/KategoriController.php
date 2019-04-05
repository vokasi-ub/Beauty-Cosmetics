<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kategoriModel;

class KategoriController extends Controller
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
         $kategori_cosmetics = DB::table('kategori_cosmetics')
         ->where('nama_kategori','like',"%".$cari."%")
         ->paginate();
         //return data ke view
         return view('kategoricosmetics.index',['kategori_cosmetics' => $kategori_cosmetics]);
    }

    public function addform(){
        return view('kategoricosmetics.addform');
    }
    public function editform($id){
        $data = DB::table('kategori_cosmetics')->where('id_kategori',$id)->get();
		return view('kategoricosmetics.editform', compact('data'));
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
        DB::table('kategori_cosmetics')->insert([
            'nama_kategori' => $request->nama_kategori,
          ]);

         return redirect('kategoricosmetics');
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
        DB::table('kategori_cosmetics')->where('id_kategori',$id)->update([
            'nama_kategori' => $request->nama_kategori,
            ]);		
            return redirect('kategoricosmetics');
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
        DB::table('kategori_cosmetics')->where('id_kategori',$id)->delete();
		return redirect('kategoricosmetics');
    }
}

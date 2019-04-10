<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\subkategoriModel;

class SubKategoriController extends Controller
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
         $subkategori = DB::table('subkategori')
         ->where('nama_subkategori','like',"%".$cari."%")
         ->paginate();
         //return data ke view
         return view('subkategori.index',['subkategori' => $subkategori]);
    }

    public function addform(){
        $subkategori = DB::table('kategori_cosmetics')->get();
        return view('subkategori.addform', compact('subkategori'));
    }
    public function editform($id){
        $subkategori = DB::table('subkategori')->where('id_subkategori',$id)->get();
        $kategori = DB::table('kategori_cosmetics')->get();
		return view('subkategori.editform', compact('subkategori','kategori'));
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
        //
        DB::table('subkategori')->insert(['id_kategori' => $request->id_kategori,
        'nama_subkategori' => $request->nama_subkategori]);
        return redirect()->route('subkategori.index');
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
        DB::table('subkategori')->where('id_subkategori',$id)->update([
            'id_kategori' => $request->id_kategori,
            'nama_subkategori' => $request->nama_subkategori,
            ]);		
            return redirect('subkategori');
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
        DB::table('subkategori')->where('id_subkategori',$id)->delete();
		return redirect('subkategori');
    }
}

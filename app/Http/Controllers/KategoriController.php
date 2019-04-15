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
         $kategori_cosmetics = KategoriModel::where('nama_kategori', 'LIKE', '%' . $cari . '%')->paginate(10);
         //return data ke view
         return view('kategoricosmetics.index',['kategori_cosmetics' => $kategori_cosmetics]);
    }

    public function addform(){
        return view('kategoricosmetics.addform');
    }
    public function editform($id_kategori){
        $data = KategoriModel::find($id_kategori);
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
        $data = new kategoriModel([
            'nama_kategori' => $request->nama_kategori,
          ]);
            $data->save();
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
    public function update(Request $request)
    {
        //
            $data = kategoriModel::find($request->id_kategori);
            $data->nama_kategori = $request->nama_kategori;
            $data->save();		
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
        $data = kategoriModel::find($id);
        $data->delete();
		return redirect('kategoricosmetics');
    }
}

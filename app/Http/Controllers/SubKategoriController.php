<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\subkategoriModel;
use App\kategoriModel;

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
         $subkategori = subkategoriModel::with(['kategoriModel', 'produkModel'])
         ->when($request->keyword, function ($query) use ($request) {
            $query->where('nama_subkategori', 'like', "%{$request->keyword}%");
                // ->orWhere('name', 'like', "%{$request->keyword}%");
        })->get();
         //return data ke view
         return view('subkategori.index', compact('subkategori'));
    }

    public function addform(){
        $subkategori = subkategoriModel::with(['kategoriModel', 'produkModel'])->get();
        $data = kategoriModel::all();
        return view('subkategori.addform', compact('subkategori', 'data'));
    }
    public function editform($id_subkategori){
        $subkategori = subkategoriModel::all();
        $kategori = kategoriModel::all();
        $data=subkategoriModel::where('id_subkategori',$id_subkategori)->get();
        
		return view('subkategori.editform', compact('subkategori','kategori','data'));
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
        $data = subkategoriModel::with(['kategoriModel','produkModel'])
		->insert(['id_kategori' => $request-> id_kategori,
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
    public function update(Request $request)
    {
        //
        $data = subkategoriModel::find($request->id_subkategori);
        $data->id_kategori = $request->id_kategori;
        $data ->nama_subkategori = $request->nama_subkategori;
        $data->save();	
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
        $data=subkategoriModel::find($id);
        $data->delete();
		return redirect('subkategori');
    }
}

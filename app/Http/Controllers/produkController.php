<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\produkModel;
use App\subkategoriModel;

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
         $produk = produkModel::with(['subkategoriModel','detailpesananModel'])
         ->when($request->keyword, function ($query) use ($request) {
            $query->where('nama_produk', 'like', "%{$request->keyword}%");
                // ->orWhere('name', 'like', "%{$request->keyword}%");
        })->get();
         return view('produk.index', compact('produk'));
    }

    public function addform(){
        $produk = produkModel::with(['subkategoriModel','detailpesananModel'])->get();
        $data = subkategoriModel::all();
        return view('produk.addform', compact('produk', 'data'));
    }
    public function editform($id_produk){
        $produk = produkModel::all();
        $subkategori = subkategoriModel::all();
        $data = produkModel::where('id_produk',$id_produk)->get();
		return view('produk.editform', compact('produk','subkategori','data'));
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
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/", $fileName);
        //
        $data = produkModel::with(['subkategoriModel','detailpesananModel'])->insert([
            'id_subkategori' => $request->id_subkategori,
            'nama_produk' => $request->nama_produk,
            'stok' => $request->stok,
            'image' => $fileName,
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
        if(!empty($request->file('gambar'))){

        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/", $fileName);
        //
        produkModel::where('id_produk',$id)->update([
            'id_subkategori' => $request->id_subkategori,
            'nama_produk' => $request->nama_produk,
            'stok' => $request->stok,
            'image' => $fileName,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            ]);		
        }else{
            produkModel::where('id_produk',$id)->update([
                'id_subkategori' => $request->id_subkategori,
                'nama_produk' => $request->nama_produk,
                'stok' => $request->stok,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                ]);		

        }
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
        $data=produkModel::find($id);
        $data->delete();
		return redirect('produk');
    }
}

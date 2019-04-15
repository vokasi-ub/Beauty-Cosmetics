<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\detailpesananModel;

class detailpesananController extends Controller
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
         //$detail_pesanan = DB::table('detail_pesanan')
         $detailpesanan = detailpesananModel::with(['produkModel'])
         ->when($request->keyword, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->keyword}%");
         //return data ke view
        })->get();
         return view('detailpesanan.index', compact('detailpesanan'));
    }

    public function addform(){
        $detailpesanan = detailpesananModel::with(['produkModel'])->get();
        return view('detailpesanan.addform', compact('detailpesanan'));
    }
    public function editform($id_pesanan){
        $detailpesanan = detailpesananModel::all();
        $data = detailpesananModel::where('id_pesanan',$id_pesanan)->get();
		return view('detailpesanan.editform', compact('detailpesanan','data'));
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
        //DB::table('detail_pesanan')->insert([
        $data = detailpesananModel::with(['produkModel'])->insert([
            'id_produk' => $request->id_pesanan,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'total_harga' => $request->total_harga,
          ]);

          return redirect()->route('detailpesanan.index');
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
        //DB::table('detail_pesanan')->where('id_pesanan',$id)->update([
        detailpesananModel::where('id_pesanan',$id)->update([  
            'id_produk' => $request->id_pesanan,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'total_harga' => $request->total_harga,
            ]);		
            return redirect()->route('detailpesanan.index');
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
        $data=detailpesananModel::find($id);
        $data->delete();
		return redirect('detailpesanan');
    }
}

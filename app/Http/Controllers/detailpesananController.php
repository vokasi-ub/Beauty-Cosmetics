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
         $detail_pesanan = DB::table('detail_pesanan')
         ->where('id_produk','like',"%".$cari."%")
         ->paginate();
         //return data ke view
         return view('detailpesanan.index',['detail_pesanan' => $detail_pesanan]);
    }

    public function addform(){
        $detail_pesanan = DB::table('produk')->get();
        return view('detailpesanan.addform', compact('detail_pesanan'));
    }
    public function editform($id){
        $data = DB::table('detail_pesanan')->where('id_pesanan',$id)->get();
		return view('detailpesanan.editform', compact('data'));
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
        DB::table('detail_pesanan')->insert([
            'id_produk' => $request->id_pesanan,
            'nama_kategori' => $request->nama_kategori,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'jumlah_pesanan' => $request->jumlah_pesanan,
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
        DB::table('detail_pesanan')->where('id_pesanan',$id)->update([
            
            'id_produk' => $request->id_produk,
            'nama_kategori' => $request->nama_kategori,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'jumlah_pesanan' => $request->jumlah_pesanan,
            'total_harga' => $request->total_harga,
            ]);		
            return redirect('detailpesanan');
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
        DB::table('detail_pesanan')->where('id_pesanan',$id)->delete();
		return redirect('detailpesanan');
    }
}

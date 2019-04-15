<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailpesananModel extends Model
{
    //
    protected $table = 'detail_pesanan';
    protected $fillabel = ['id_pesanan','id_produk','nama_kategori','nama_kategori','alamat','tanggal_pemesanan','jumlah_pesanan','total_harga'];
    protected $primaryKey = 'id_pesanan';
    public $timestamps = true;

    public function produkModel(){
        return $this->belongsTo(produkModel::class,'id_produk','id_produk');
    }
}

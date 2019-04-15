<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produkModel extends Model
{
    //
    protected $table = 'produk';
    protected $fillabel = ['id_produk','id_subkategori','nama_produk','stok','iamge','deskripsi','harga'];
    protected $primaryKey = 'id_produk';
    public $timestamps = true;

    public function subkategoriModel(){
        return $this->belongsTo(subkategoriModel::class,'id_subkategori','id_subkategori');
    }
    public function detailpesananModel(){
        return $this->hasMany(detailpesananModel::class,'id_pesanan','id_pesanan');
    }
}

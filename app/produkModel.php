<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produkModel extends Model
{
    //
    protected $table = 'produk';
    protected $fillabel = ['id_produk','id_subkategori','nama_produk','stok','iamge','deskripsi','harga'];
    protected $timestamps = true;

    public function subkategoriModel(){
        return $this->belongsTo(subkategoriModel::class,'id_subkategori');
    }
    
}

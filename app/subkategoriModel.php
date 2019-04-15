<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subkategoriModel extends Model
{
    //
    protected $table = 'subkategori';
    protected $fillable = ['id_subkategori','id_kategori','nama_subkategori'];
    protected $primaryKey = 'id_subkategori';
    public $timestamps = true;

    public function kategoriModel(){
        return $this->belongsTo(kategoriModel::class,'id_kategori', 'id_kategori');
    }

    public function produkModel(){
        return $this->hasMany(produkModel::class, 'id_produk', 'id_produk');
    }

}

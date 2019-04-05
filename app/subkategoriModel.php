<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subkategoriModel extends Model
{
    //
    protected $table = 'subkategori';
    protected $fillabel = ['id_subkategori','id_kategori','nama_subkategori'];
    protected $timestamps = true;


    public function produkModel(){
        return $this->hasMany(subkategoriModel::class);
    }

    public function kategoriModel(){
        return $this->belongsTo(kategoriModel::class,'id_kategori');
    }

}

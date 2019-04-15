<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    //
    protected $table = 'kategori_cosmetics';
    protected $fillable = ['id_kategori','nama_kategori'];
    protected $primaryKey = 'id_kategori';
    public $timestamps = true;

    public function subkategoriModel(){
        return $this->hasMany(subkategoriModel::class,'id_kategori','id_kategori');
    }

}

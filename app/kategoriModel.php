<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    //
    protected $table = 'kategori_cosmetics';
    protected $fillabel = ['id_kategori','nama_kategori'];
    protected $timestamps = true;

    public function subkategoriModel(){
        return $this->hasMany(subkategoriModel::class);
    }

}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            $table->unsignedBigInteger('id_subkategori');
            $table->foreign('id_subkategori')->references('id_subkategori')->on('subkategori')->onDelete('cascade');
            $table->string('nama_produk');
            $table->string('stok',5);
            $table->string('image',20);
            $table->string('deskripsi');
            $table->string('harga',15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
        $table->dropForeign(['id_subkategori']);
    }
}

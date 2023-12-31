<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_order');
            $table->integer('id_customer');
            $table->string('nama_barang');
            $table->string('alamat_penerima');
            $table->date('order_date');
            $table->string('jenis_pengiriman');
            $table->float('berat_barang');
            $table->string('status'); //dari bagas
            $table->float('harga_barang');
            $table->float('harga_ongkir'); //dari bagas
            $table->float('total_harga');
            $table->integer('no_resi'); //dari bagas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

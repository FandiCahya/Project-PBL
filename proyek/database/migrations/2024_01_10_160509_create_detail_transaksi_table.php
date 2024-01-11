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
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah');
            $table->unsignedBigInteger('id_paket');
            $table->unsignedBigInteger('id_transaksi');
            $table->foreign('id_paket')->references('id')->on('paket')->onDelete('cascade');
            $table->foreign('id_transaksi')->references('id')->on('transaksi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi');
    }
};
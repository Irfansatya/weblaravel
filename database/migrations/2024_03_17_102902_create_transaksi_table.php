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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_transaksi');
            $table->integer('total_harga');
            $table->foreignId('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('obat_id')->references('id')->on('obat')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('apoteker_id')->references('id')->on('apoteker')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};

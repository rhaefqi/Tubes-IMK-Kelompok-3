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
        Schema::create('peminjaman_gurus', function (Blueprint $table) {
            $table->char('nip', 18);
            $table->foreign('nip')->references('nip')->on('gurus')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedInteger('buku_id');
            $table->foreign('buku_id')->references('id')->on('bukus')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('jumlah_dipinjam');
            $table->enum('status', ['masa pinjam', 'dikembalikan', 'lewat tenggat']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman_gurus');
    }
};

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
        Schema::create('pendaftaran_relawan', function (Blueprint $table) {
            $table->id();
            
        $table->unsignedBigInteger('kegiatan_id');
            $table->string('nama');
            $table->string('email');
            $table->string('jenis_kelamin');
            $table->string('nomor_telepon');
            $table->text('alamat');
            $table->text('alasan');

        $table->string('status')->default('Menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_relawan');
    }
};

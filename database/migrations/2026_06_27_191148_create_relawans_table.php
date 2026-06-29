<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('relawan', function (Blueprint $table) {

            $table->id('id_relawan');

            $table->string('nama');

            $table->string('email')->unique();

            $table->string('no_hp');

            $table->string('alamat');

            $table->text('alasan');

            $table->enum('status',[
                'Pending',
                'Diterima',
                'Ditolak'
            ])->default('Pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('relawan');
    }
};
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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id('Id_kelas');
            $table->foreignId('Id_guru')
                    ->references('Id_guru')
                    ->on('gurus')
                    ->onDelete('restrict');
            $table->string('Nama_kelas');
            $table->string('Kode_kelas');
            $table->text('Deskripsi');
            $table->date('Tgl_buat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};

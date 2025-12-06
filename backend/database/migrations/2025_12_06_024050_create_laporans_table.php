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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id('Id_laporan');
            $table->foreignId('Id_siswa')
                    ->references('Id_siswa')
                    ->on('siswas')
                    ->onDelete('restrict');
            $table->integer('Total_materi');
            $table->integer('Total_kuis');
            $table->float('Rata_nilai');
            $table->date('Tgl_laporan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};

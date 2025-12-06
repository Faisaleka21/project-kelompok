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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id('Id_nilai');
            //kuis
            $table->foreignId('Id_kuis')
                    ->references('Id_kuis')
                    ->on('kuis')
                    ->onDelete('restrict');
            //siswa
            $table->foreignId('Id_siswa')
                    ->references('Id_siswa')
                    ->on('siswas')
                    ->onDelete('restrict');
            $table->integer('Skor');
            $table->date('Tgl_kerjakan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};

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
        Schema::create('materis', function (Blueprint $table) {
            $table->id('Id_materi');
            $table->foreignId('Id_kelas')
                    ->references('Id_kelas')
                    ->on('kelas')
                    ->onDelete('restrict');
            $table->string('Judul_materi');
            $table->text('Deskripsi');
            $table->string('Tipe_file');
            $table->string('File_path');
            $table->date('Tgl_upload');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};

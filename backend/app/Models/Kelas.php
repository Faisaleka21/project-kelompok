<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //
    protected $guarded = ['Id_kelas'];

    public function guru(){
        return $this->belongsTo(Guru::class,foreignKey:'Id_guru');
    }
    public function materi(){
        return $this->hasMany(Kelas::class,foreignKey:'Id_kelas');
    }


}

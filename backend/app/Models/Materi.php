<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    //
    protected $guarded = ['Id_materi'];

    public function kelas(){
        return $this->belongsTo(Guru::class,foreignKey:'Id_guru');
    }
    public function kuis(){
        return $this->hasMany(Kuis::class,foreignKey:'Id_kuis');
    }
}

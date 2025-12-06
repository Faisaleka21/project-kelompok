<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    //
    protected $guarded = ['Id_kuis'];
    public function materi(){
        return $this->belongsTo(Materi::class,foreignKey:'Id_materi');
    }

    public function nilai(){  //kuis memiliki 1 nilai
        return $this->hasOne(Nilai::class,foreignKey:'Id_nilai');
    }
}

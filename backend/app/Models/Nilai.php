<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    //
    protected $guarded = ['Id_nilai'];
    public function kuis(){
        return $this->belongsTo(Kuis::class,foreignKey:'Id_kuis');
    }
}

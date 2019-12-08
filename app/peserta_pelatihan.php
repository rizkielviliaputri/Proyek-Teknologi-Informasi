<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peserta_pelatihan extends Model
{
    protected $table = 'peserta_pelatihan';
    protected $guarded = [];

    public function peserta()
    {
        return $this->hasMany('\App\Peserta','id','peserta_id');
    }
    
    public function pelatihan()
    {
        return $this->hasMany('\App\Pelatihan','id','pelatihan_id');
    }
}

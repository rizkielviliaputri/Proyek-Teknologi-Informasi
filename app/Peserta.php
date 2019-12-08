<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta';
    protected $guarded = [];
       //  'namapeserta', 
        // 'tempatlahir', 
        // 'tanggallahir',
        // 'alamat',
        // 'notelepon',
        // 'asalsekolahuniv',
        

        public function user()
        {
            return $this->belongsTo(user::class);
        }
public function peserta_pelatihan(){
	return $this->belongsTo('\App\peserta_pelatihan','peserta_id','id');
}
}

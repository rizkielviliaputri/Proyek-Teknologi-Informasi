<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    protected $table = 'pelatihan';
    protected $guarded = [];
       // 'pilihanpelatihan', 
       // 'banktujuan', 
       // 'file',
       // 'keterangan',
      
    
       public function peserta_pelatihan()
       {
        return $this -> belongsTo ('\App\peserta_pelatihan','pelatihan_id','id');
    }
}

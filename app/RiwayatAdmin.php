<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatAdmin extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','users_id', 'id');
    }

    public function pesanan_detail()
    {
        return $this->belongsto('App\PesananDetail','riwayat_id','id');
    }

    public function invoice()
    {
        return $this->belongsTo('App/Invoice', 'pesanan_id', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function pesanan()
    {
        return $this->belongsTo(
            'App/Pesanan','user_id','id'
        );
    }

    public function user()
    {
        return $this->belongsTo(
            'App/User','id','id'
        );

    }

    public function admin()
    {
        return $this->belongsTo(
            'App/Admin','id','id'
        );

    }

    public function pesanan_detail()
    {
        return $this->belongsTo(
            'App/RiwayatAdmin','pesanan_id','id'
        );
    }
}

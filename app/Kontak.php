<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $fillable = [
        'nama','email','pesan','subjek',
    ];

    public function admin()
    {
        $this->belongsTo('App/Admin','id','id');
    }
}

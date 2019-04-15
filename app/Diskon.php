<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    protected $table = 'diskon';
    protected $primaryKey = 'id';

    protected $fillable = [
        'Promo',
        'Harga_Promo',

    ];

    public function transaksi()
    {
    	return $this->hasOne('App\Transaksi');
    }
}

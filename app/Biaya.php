<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    protected $table = 'biaya';
    protected $primaryKey = 'id';

    protected $fillable = [
        'jenis_mobil',
        'harga',
    ];

    public function transaksi()
    {
    	return $this->hasOne('App\Transaksi');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transanksi';
    protected $primaryKey = 'id';

    protected $fillable = [
        'no_nota',
        'jenis',
        'nama',
        'biaya',
        'bayar',
        'diskon_harga',
        'kembali',
        'tanggal'

    ];

    public function biaya()
    {
    	return $this->belongsTo('App\Biaya');
    }
}

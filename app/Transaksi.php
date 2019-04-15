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
        'bayar',
        'kembali',
        'total',
        'tanggal'

    ];

    public function biaya()
    {
    	return $this->belongsTo('App\Biaya');
    }

    public function diskon()
    {
    	return $this->belongsTo('App\Diskon');
    }
}

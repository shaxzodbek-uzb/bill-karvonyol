<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KarvonOrder extends Model
{
    protected $table = 'siparisler';
    protected $fillable = ['id', 'UYEID', 'STOKID', 'BIRIM', 'MIKTAR', 'FIYAT', 'KDV', 'ISKONTO', 'TUTAR', 'ZAMAN', 'DURUM', 'KREDINO', 'KREDITUTAR', 'TAHSILATNO'];
    // ID 	UYEID 	STOKID 	BIRIM 	MIKTAR 	FIYAT 	KDV 	ISKONTO 	TUTAR 	ZAMAN 	DURUM 	KREDINO 	KREDITUTAR 	TAHSILATNO
    // 99 	1 	297 	Adet 	1.00 	84.99 	8 	0.00 	84.99 	1636630519 	1 	0 	0.00 	123445566?
}
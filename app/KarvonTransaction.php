<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KarvonTransaction extends Model
{
    protected $table = 'tahsilatlar';
    protected $fillable = ['id', 'UYEID', 'SIPARISID', 'SIPARISTUTAR', 'TUTAR', 'DEKONDNO', 'ODEMEBILGISI', 'ZAMAN', 'TARIH', 'SAAT', 'DURUM'];
    // UYEID 	SIPARISID 	SIPARISTUTAR 	TUTAR 	DEKONDNO 	ODEMEBILGISI 	ZAMAN 	TARIH 	SAAT 	DURUM
    // 5 	1 	0 	91.79 	91.79 	123445566 	223345 	1636630519 	2021-11-11 	14:35 	1
    public $timestamps = false;
}
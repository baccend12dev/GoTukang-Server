<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    public $timestamps = false;
    protected $primaryKey = 'id_pesanan';

    protected $fillable = [
        'id_pesanan',
        'id_pelanggan',
        'id_tukang',
        'id_detail_kategori',
        'tanggal_pesanan',
        'tanggal_pesanan_selesai',
        'lama_waktu_pengerjaan',
        'catatan_pesanan',
        'desain_jahitan',
        'kategori',
        'keunggulan',
        'ongkos_tukang',
        'jumlah_tukang',
        'biaya_tukang',
        'total_biaya',
        'status_pesanan',
    ];
    public function tbl_pelanggan()
    {
        return $this->belongsTo('App\Models\PelangganModel', 'id_pelanggan');
    }

    public function tbl_tukang()
    {
        return $this->belongsTo('App\Models\TukangModel', 'id_tukang');
    }
}

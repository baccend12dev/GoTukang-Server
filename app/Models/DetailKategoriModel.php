<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKategoriModel extends Model
{
    protected $table = 'detail_kategori';
    public $timestamps = false;
    protected $primaryKey = 'id_detail_kategori';

    protected $fillable = [
        'id_detail_kategori',
        'id_tukang',
        'id_kategori',
        'keterangan_kategori',
        'keunggulan',
        'ongkos_tukang',
        'perkiraan_lama_waktu_pengerjaan',
    ];



    public function tbl_tukang()
    {
        return $this->belongsTo('App\Models\tukangModel', 'id_tukang');
        // return $this->belongsToMany('App\Models\tukangModel');
    }

    public function tbl_kategori()
    {
        return $this->belongsTo('App\Models\KategoriModel', 'id_kategori');
    }

    public function tbl_ukuran()
    {
        return $this->belongsToMany('App\Models\UkuranModel', 'ukuran_detail_kategori', 'id_detail_kategori', 'id_ukuran');
    }
}

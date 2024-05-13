<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TukangModel extends Model
{
    protected $table = 'tukang';
    public $timestamps = false;
    protected $primaryKey = 'id_tukang';

    protected $fillable = [
        'id_tukang',
        'nama_tukang',
        'email_tukang',
        'password_tukang',
        'telp_tukang',
        'nama_jasa',
        'keterangan_jasa',
        'latitude_tukang',
        'longitude_tukang',
        'alamat_tukang',
        'spesifikasi_tukang',
        'jangkauan_kategori_tukang',
        'foto_tukang',
    ];

    public function tbl_pesanan()
    {
        return $this->hasMany('App\Models\PesananModel', 'id_tukang');
    }

    public function tbl_detail_kategori()
    {
        return $this->hasMany('App\Models\DetailKategoriModel', 'id_tukang');
    }

    public function tbl_rating()
    {
        return $this->hasMany('App\Models\RatingModel', 'id_tukang');
    }

    public function tbl_kategori()
    {
        return $this->belongsToMany('App\Models\KategoriModel', 'detail_kategori', 'id_tukang', 'id_kategori');
    }

    public function tbl_nilai()
    {
        return $this->hasMany('App\Models\NilaiModel', 'id_tukang');
    }






}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    public $timestamps = false;
    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'id_kategori',
        'nama_kategori',
        'gambar_kategori',
    ];

    public function tbl_tukang()
    {
        return $this->hasMany('App\Models\TukangModel');
        // return $this->belongsTo('App\Models\tukangModel');
    }
    
}

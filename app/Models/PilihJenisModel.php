<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihJenisModel extends Model
{
    protected $table = 'jenis_kebutuhan';
    public $timestamps = false;
    protected $primaryKey = 'id_jenis';

    protected $fillable = [
        'id_jenis',
        'nama_jenis',
        'gambar_jenis',
    ];
}

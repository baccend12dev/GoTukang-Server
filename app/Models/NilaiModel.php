<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiModel extends Model
{
    protected $table = 'nilai';
    public $timestamps = false;
    protected $primaryKey = 'id_nilai';

    protected $fillable = [
        'id_nilai',
        'id_tukang',
        'nilai_akhir',
    ];

    public function tbl_tukang()
    {
        return $this->belongsTo('App\Models\TukangModel', 'id_tukang');
    }
}

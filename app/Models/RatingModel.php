<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingModel extends Model
{
    protected $table = 'rating';
    public $timestamps = false;
    protected $primaryKey = 'id_rating';

    protected $fillable = [
        'id_rating',
        'id_tukang',
        'kriteria_1',
        'kriteria_2',
        'kriteria_3',
        'kriteria_4',
        // 'id_kriteria',
        // 'rating_tukang',
    ];

    public function tbl_tukang()
    {
        return $this->belongsTo('App\Models\tukangModel', 'id_tukang');
    }

    public function tbl_kriteria()
    {
        return $this->belongsTo('App\Models\KriteriaModel', 'id_kriteria');
    }
}

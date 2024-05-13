<?php

namespace App\Http\Controllers;

use App\Models\PilihJenisModel;
use Illuminate\Http\Request;

class ApiPilihJenisController extends Controller
{
    public function get_all_jenis(){
        return response()->json(PilihJenisModel::all(), 200);
    }
}

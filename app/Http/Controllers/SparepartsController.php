<?php

namespace App\Http\Controllers;

use App\Http\Models\spareParts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SparepartsController extends Controller
{
    public function index()
    {
        $data =  DB::select("select * from spare_parts");
        $arr['data'] = $data;

        return view('spareparts', $arr);
    }
}

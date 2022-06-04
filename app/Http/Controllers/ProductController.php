<?php

namespace App\Http\Controllers;
use App\Http\Models\scooter;   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $data =  DB::select("select * from scooters");
        $arr['data'] = $data;

        return view('product', $arr);
    }
}

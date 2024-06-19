<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LogBarang;
use DB;
class logBarangController extends Controller
{
    public function index(){
        $data = DB::select('CALL SP_ViewLogBarang()');
        return view('logbarang.logbarang',[
            "title" => "Log Barang",
            "logbarang"=> $data,
        ]);
    }
}

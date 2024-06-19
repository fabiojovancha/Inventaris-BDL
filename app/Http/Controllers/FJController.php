<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FJ;
use App\Models\Pelanggan;
use App\Models\FJDet;
USE DB;

class FJController extends Controller
{
    public function index(Request $request){
        $data = FJ::all();
        return view('fj.fj',[
            "title" => "Faktur Jual",
            "fj"=> $data,
        ]);
    }

    public function filter(Request $request){

        $start_date = $request->satu_date;
        $end_date = $request->dua_date;
        $fj = FJ::whereDate('tglFJ','>=',$start_date)->whereDate('tglFJ','<=',$end_date)->get();
        
        return view('fj.fj',[
            "title" => "Faktur Jual",
        ],compact('fj'));
    }

    public function create(){
        $pelanggans = Pelanggan::all();
        return view('fj.create_fj',[
            "title" => "Add FJ",
        ],compact(['pelanggans']));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'idFJ' => 'required|string|max:255',
            'idPelanggan' => 'required|string|max:255',
            'tglFJ' => 'required|date',
            'subtotal' => 'required|numeric',
            'diskon' => 'required|numeric|min:0',
            'totalFaktur' => 'required|numeric|min:0',
        ]);

        DB::select('CALL SP_InsertFJ(?,?,?,?,?,?)',[
            $request->idFJ,
            $request->idPelanggan,
            $request->tglFJ,
            $request->subtotal,
            $request->diskon,
            $request->totalFaktur,
        ]);

        return redirect()->route('listFJ')->with('success', 'Barang has been added successfully.');
    }

    public function edit($id){
        $fj = FJ::find($id);
        return view('fj.edit_fj',[
            "title" => "Edit FJ",
            
        ],compact(['fj']));
    }

    public function update(Request $request, $id){

        $request->validate([
            'idPelanggan' => 'required|string|max:255',
            'tglFJ' => 'required|date',
            'subtotal' => 'required|numeric',
            'diskon' => 'required|numeric|min:0',
            'totalFaktur' => 'required|numeric|min:0',
        ]);

        $fj = FJ::find($id);

        DB::select('CALL SP_UpdateFJ(?,?,?,?,?,?)',[
            $fj->idFJ,
            $request->idPelanggan,
            $request->tglFJ,
            $request->subtotal,
            $request->diskon,
            $request->totalFaktur,
        ]);

        return redirect()->route('listFJ')->with('success', 'Barang has been updated successfully.');
    }

    public function destroy($id)
    {

        $fj = FJ::find($id);
        DB::select('CALL SP_DeleteFJ(?)',[
            $fj->idFJ
        ]);
        return redirect()->route('listFJ')->with('success','fj has been deleted successfully.');
    }

    public function show($idfj)
    {
        $fj = FJ::find($idfj);

        $fjDetails = FJDet::where('idfj', $idfj)->get();

        return view('fjdet.fjdet',[
            "title" => "FJ DET",
            "fjdet"=>$fjDetails
        ]);
    }

    public function createFJDet(){
        $barangs = Barang::all();
        return view('barang.barang',[
            "title" => "Add FJ",
        ],compact(['barangs']));
    }

    public function storeFJDet(Request $request)
    {        
        $request->validate([
            'idFJ' => 'required|string|max:255',
            'idBarang' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:0',
            'hargaJual' => 'required|numeric|min:0',
            'FJ_idFJ' => 'required|string|max:255',
        ]);
        
        FJ::create([
            'idFJ' => $request->idFJ,
            'idBarang' => $request->idPelanggan,
            'jumlah'=> $request->tglFJ,
            'hargaJual' => $request->subtotal,
            'FJ_idFJ' => $request->FJ_idFJ,
        ]);

        return redirect()->route('showFJ')->with('success', 'Barang has been added successfully.');
    }
}


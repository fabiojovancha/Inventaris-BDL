<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\TipeBarang;
use DB;

class BarangController extends Controller
{   
    public function index(){
        $data = barang::all();
        return view('barang.barang',[
            "title" => "Barang",
            "barang"=> $data,
        ]);
    }

    public function create(){
        $tipeBarangs = TipeBarang::all();
        return view('barang.create_barang',[
            "title" => "Add Barang",
        ],compact(['tipeBarangs']));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'idBarang' => 'required|string|max:255',
            'namaBarang' => 'required|string|max:255',
            'idTipeBarang' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:0',
            'hargaBeli' => 'required|numeric|min:0',
            'hargaJual' => 'required|numeric|min:0',
        ]);

        DB::select('CALL SP_InsertBarang(?, ?, ?, ?, ?, ?)', [
            $request->idBarang,
            $request->namaBarang,
            $request->idTipeBarang,
            $request->jumlah,
            $request->hargaBeli,
            $request->hargaJual,
        ]);

        return redirect()->route('listBarang')->with('success', 'Barang has been added successfully.');
    }

    public function edit($id){
        $barang = Barang::find($id);
        $tipeBarangs = TipeBarang::all();
        return view('barang.edit_barang',[
            "title" => "Edit Barang",
            
        ],compact(['barang','tipeBarangs']));
    }

    public function update(Request $request, $id){

        $request->validate([
            'namaBarang' => 'required|string|max:255',
            'idTipeBarang' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:0',
            'hargaBeli' => 'required|numeric|min:0',
            'hargaJual' => 'required|numeric|min:0',
        ]);
        
        $barang = Barang::find($id);
        
        DB::select('CALL SP_UpdateBarang(?, ?, ?, ?, ?, ?)', [
            $barang->idBarang,
            $request->namaBarang,
            $request->idTipeBarang,
            $request->jumlah,
            $request->hargaBeli,
            $request->hargaJual,
        ]);
    
        return redirect()->route('listBarang')->with('success', 'Barang has been updated successfully.');
    }

    public function destroy($id)
    {
        $barang = Barang::find($id);
        DB::select('CALL SP_DeleteBarang(?)',[
            $barang->idBarang
        ]);
        return redirect()->route('listBarang')->with('success','Barang has been deleted successfully.');
    }

    public function brg(){
        $view = DB::select('CALL SP_BarangPerTipe()');
        return view('barang.barangtipe',[
            "title" => "Jumlah Barang Pertipe",
            "views" => $view
        ]);   
     }
}

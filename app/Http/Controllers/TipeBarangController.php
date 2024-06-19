<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipeBarang;
use DB;


class TipeBarangController extends Controller
{
    public function index(){
        $data = TipeBarang::all();
        return view('tipebarang.tipebarang',[
            "title" => "Tipe Barang",
            "tipebarang"=> $data,
        ]);
    }

    public function create(){
        return view('tipebarang.create_tipebarang',[
            "title" => "Add Tipe Barang",
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'idTipeBarang' => 'required|string|max:10',
            'tipeBarang' => 'required|string|max:50',
        ]);
        
        DB::select('CALL SP_InsertTipeBarang(?,?)',[
            $request->idTipeBarang,
            $request->tipeBarang,
        ]);

        return redirect()->route('listTipeBarang')->with('success', 'Tipe Barang has been added successfully.');
    }
    
    public function edit($id){
        $tipebarang = Tipebarang::find($id);
        return view('tipebarang.edit_tipebarang',[
            "title" => "Edit Tipe Barang",
            
        ],compact(['tipebarang']));
    }

    public function update(Request $request, $id){
        // dd($barang);
        $request->validate([
            'tipeBarang' => 'required|string|max:50',
        ]);

        $tipebarang = TipeBarang::find($id);

        DB::Select('CALL SP_UpdateTipeBarang(?,?)',[
            $tipebarang->idTipeBarang,
            $request->tipeBarang
        ]);
    
        return redirect()->route('listTipeBarang')->with('success', 'Barang has been updated successfully.');
    }

    public function destroy($id)
    {
        $tipebarang = TipeBarang::find($id);
        DB::select('CALL SP_DeleteTipeBarang(?)',[
            $tipebarang->idTipeBarang
        ]);
        return redirect()->route('listTipeBarang')->with('success','Barang has been deleted successfully.');
    }
}

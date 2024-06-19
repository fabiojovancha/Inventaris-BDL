<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use DB;

class PelangganController extends Controller
{   
    public function index(){
        $data = Pelanggan::all();
        return view('pelanggan.pelanggan',[
            "title" => "pelanggan",
            "pelanggan"=> $data,
        ]);
    }

    public function create(){
        return view('pelanggan.create_pelanggan',[
            "title" => "Add pelanggan",
        ]);
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'idPelanggan' => 'required|string|max:255',
            'namaPelanggan' => 'required|string|max:255',
            'alamatPelanggan' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
        ]);

        DB::select('CALL SP_InsertPelanggan(?,?,?,?)',[
            $request->idPelanggan,
            $request->namaPelanggan,
            $request->alamatPelanggan,
            $request->telepon,

        ]);

        return redirect()->route('listPelanggan')->with('success', 'Barang has been added successfully.');
    }

    public function edit($id){
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.edit_pelanggan',[
            "title" => "Edit pelanggan",
            
        ],compact(['pelanggan']));
    }

    public function update(Request $request, $id){

        $request->validate([
            'namaPelanggan' => 'required|string|max:255',
            'alamatPelanggan' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
        ]);

        $pelanggan = Pelanggan::find($id);

        $pelanggan->update([
            'namaPelanggan' => $request->namaPelanggan,
            'alamatPelanggan'=> $request->alamatPelanggan,
            'telepon' => $request->telepon,

        ]);
    
        return redirect()->route('listPelanggan')->with('success', 'Barang has been updated successfully.');
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect()->route('listPelanggan')->with('success','pelanggan has been deleted successfully.');
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\FJDet;

class FJDetController extends Controller
{
    public function create(){
        return view('fjdet.create_fjdet',[
            "title" => "Add FJ",
        ]);
    }

    public function store(Request $request)
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

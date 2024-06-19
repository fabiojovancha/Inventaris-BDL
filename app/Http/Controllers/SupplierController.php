<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index(){
        $data = Supplier::all();
        return view('supplier.supplier',[
            "title" => "supplier",
            "supplier"=> $data,
        ]);
    }

    public function create(){
        return view('Supplier.create_Supplier',[
            "title" => "Add Supplier",
        ]);
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'idSupplier' => 'required|string|max:255',
            'namaSupplier' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
        ]);

        Supplier::create([
            'idSupplier' => $request->idSupplier,
            'namaSupplier' => $request->namaSupplier,
            'alamat'=> $request->alamat,
            'kota'=> $request->kota,
            'telepon' => $request->telepon,

        ]);

        return redirect()->route('listSupplier')->with('success', 'Barang has been added successfully.');
    }

    public function edit($id){
        $Supplier = Supplier::find($id);
        return view('Supplier.edit_Supplier',[
            "title" => "Edit Supplier",
            
        ],compact(['Supplier']));
    }

    public function update(Request $request, $id){

        $request->validate([
            'namaSupplier' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
        ]);

        $Supplier = Supplier::find($id);

        $Supplier->update([
            'namaSupplier' => $request->namaSupplier,
            'alamat'=> $request->alamat,
            'kota'=> $request->kota,
            'telepon' => $request->telepon,
        ]);
    
        return redirect()->route('listSupplier')->with('success', 'Barang has been updated successfully.');
    }

    public function destroy($id)
    {
        $Supplier = Supplier::find($id);
        $Supplier->delete();
        return redirect()->route('listSupplier')->with('success','Supplier has been deleted successfully.');
    }}

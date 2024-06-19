<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FB;
use App\Models\Supplier;
use App\Models\FBDet;

class FBController extends Controller
{
    public function index(Request $request){
        $data = FB::all();
        return view('fb.fb',[
            "title" => "Faktur Jual",
            "fb"=> $data,
        ]);
    }

    public function filter(Request $request){

        $start_date = $request->satu_date;
        $end_date = $request->dua_date;
        $FB = FB::whereDate('tglFB','>=',$start_date)->whereDate('tglFB','<=',$end_date)->get();
        
        return view('FB.FB',[
            "title" => "Faktur Jual",
        ],compact('FB'));
    }

    public function create(){
        $suppliers = Supplier::all();
        return view('FB.create_FB',[
            "title" => "Add FB",
        ],compact(['suppliers']));
    }

    public function store(Request $request)
    {
        
        // Validate the incoming request data
        $request->validate([
            'idFB' => 'required|string|max:255',
            'idSupplier' => 'required|string|max:255',
            'tglFB' => 'required|date',
            'subtotal' => 'required|numeric',
            'diskon' => 'required|numeric|min:0',
            'totalFaktur' => 'required|numeric|min:0',
        ]);

        FB::create([
            'idFB' => $request->idFB,
            'idSupplier' => $request->idSupplier,
            'tglFB'=> $request->tglFB,
            'subtotal' => $request->subtotal,
            'diskon' => $request->diskon,
            'totalFaktur' => $request->totalFaktur,
        ]);

        // Redirect to the list of barang with a success message
        return redirect()->route('listFB')->with('success', 'Barang has been added successfully.');
    }

    public function edit($id){
        $FB = FB::find($id);
        return view('FB.edit_FB',[
            "title" => "Edit FB",
            
        ],compact(['FB']));
    }

    public function update(Request $request, $id){

        $request->validate([
            'idSupplier' => 'required|string|max:255',
            'tglFB' => 'required|date',
            'subtotal' => 'required|numeric',
            'diskon' => 'required|numeric|min:0',
            'totalFaktur' => 'required|numeric|min:0',
        ]);

        $FB = FB::find($id);

        $FB->update([
            'idSupplier' => $request->idSupplier,
            'tglFB'=> $request->tglFB,
            'subtotal' => $request->subtotal,
            'diskon' => $request->diskon,
            'totalFaktur' => $request->totalFaktur,
        ]);

    
        return redirect()->route('listFB')->with('success', 'Barang has been updated successfully.');
    }

    public function destroy($id)
    {

        $FB = FB::find($id);
        $FB->delete();
        return redirect()->route('listFB')->with('success','FB has been deleted successfully.');
    }

    public function show($idFB)
    {
        $FB = FB::find($idFB);

        $FBDetails = FBDet::where('idFB', $idFB)->get();

        return view('FBdet.FBdet',[
            "title" => "FB DET",
            "fbdet"=>$FBDetails
        ]);
    }

    public function createFBDet($idFB){
        $barangs = Barang::all();
        return view('FBdet.create_FBdet',[
            "title" => "Add FB",
        ],compact(['barangs']));
    }

    public function storeFBDet(Request $request)
    {        
        $request->validate([
            'idFB' => 'required|string|max:255',
            'idBarang' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:0',
            'hargaJual' => 'required|numeric|min:0',
            'FB_idFB' => 'required|string|max:255',
        ]);

        FB::create([
            'idFB' => $request->idFB,
            'idBarang' => $request->idPelanggan,
            'jumlah'=> $request->tglFB,
            'hargaJual' => $request->subtotal,
            'FB_idFB' => $request->FB_idFB,
        ]);

        return redirect()->route('showFB')->with('success', 'Barang has been added successfully.');
    }
}

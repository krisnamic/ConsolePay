<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Datatables;

class BarangCRUDController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Barang::select('*'))
            ->addColumn('action', 'barang.action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('barang.index');
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('barang.create');
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'company' => 'required',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);
        
        $barang = new Barang;
        $barang->namaBarang = $request->name;
        $barang->merekBarang = $request->company;
        $barang->kategoriBarang = $request->type;
        $barang->deskripsiBarang = $request->description;
        $barang->hargaBarang = $request->price;
        $barang->stokBarang = $request->stock;
        $barang->gambarBarang = 'test';
        $barang->logoBarang = 'test';
        $barang->created_at = now();
        $barang->updated_at = now();
        $barang->save();
        return redirect()->route('barang.index')
        ->with('success','Barang has been created successfully.');
    }
    /**
    * Display the specified resource.
    *
    * @param  \App\barang  $barang
    * @return \Illuminate\Http\Response
    */
    public function show(Barang $barang)
    {
        return view('barang.show',compact('barang'));
    } 
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Barang  $barang
    * @return \Illuminate\Http\Response
    */
    public function edit(Barang $barang)
    {
        return view('barang.edit',compact('barang'));
    }
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\barang  $barang
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $request->validate([
        'name' => 'required',
        'email' => 'required',
        'address' => 'required'
        ]);
        $barang = Barang::find($id);
        $barang->name = $request->name;
        $barang->email = $request->email;
        $barang->address = $request->address;
        $barang->save();
        return redirect()->route('barang.index')
        ->with('success','Barang Has Been updated successfully');
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Barang  $barang
    * @return \Illuminate\Http\Response
    */
    public function destroy(Request $request)
    {
        $com = Barang::where('ID_Barang',$request->id)->delete();
        return Response()->json($com);
    }
}
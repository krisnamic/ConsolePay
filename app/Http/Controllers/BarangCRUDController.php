<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BarangCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
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
            'stock' => 'required',
            'photo' => 'required',
            'logo' => 'required'
        ]);

        $barang = new Barang;
        $barang->namaBarang = $request->name;
        $barang->merekBarang = $request->company;
        $barang->kategoriBarang = $request->type;
        $barang->deskripsiBarang = $request->description;
        $barang->hargaBarang = $request->price;
        $barang->stokBarang = $request->stock;
        $barang->gambarBarang = $request->photo->getClientOriginalName();
        $barang->logoBarang = $request->logo->getClientOriginalName();
        $barang->created_at = now();
        $barang->updated_at = now();
        $barang->save();
        return redirect()->route('barang.index')
            ->with('success', 'Barang has been created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('barang.show', compact('barang'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
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
            'company' => 'required',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);
        // dd($request);
        $barang = Barang::find($id);
        $barang->namaBarang = $request->name;
        $barang->merekBarang = $request->company;
        $barang->kategoriBarang = $request->type;
        $barang->deskripsiBarang = $request->description;
        $barang->hargaBarang = $request->price;
        $barang->stokBarang = $request->stock;

        if ($request->photo == null) {
            $barang->gambarBarang = $barang->gambarBarang;
        } else {
            $barang->gambarBarang = $request->photo->getClientOriginalName();
        }

        if ($request->logo == null) {
            $barang->logoBarang = $barang->logoBarang;
        } else {
            $barang->logoBarang = $request->logo->getClientOriginalName();
        }

        $barang->updated_at = now();
        $barang->save();
        return redirect()->route('barang.index')
            ->with('success', 'Barang Has Been updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $com = Barang::where('id', $request->id)->delete();
        return Response()->json($com);
    }

    public function viewOrder(Request $request)
    {
        // $user_id = $request->session()->get('user_id');
        $i = 0;
        // $order = DB::table('pesanan')->where('user_id', $user_id)->latest()->first();
        $order = DB::table('pesanan')->get();
        // dd($order);
        if ($order->isEmpty()) {
            // dd($i);
            // dd($i);
            $barang[$i] = DB::table('barang')->get();
            return view('barang.order', [
                'barang' => $barang,
                'null_item' => 'true',
            ]);
            // return view('user.shoppingCart');
        } else {
            // dd($order);
        }
        // dd($order->id);

        $k = 0;
        foreach ($order as $o) {
            $order_id = $o->id;
            $orderdetail = DB::table('detailpesanan')->where('id_pesanan', $order_id)->get();
            // $barang;
            foreach ($orderdetail as $od) {
                $barang[$i][$k] = DB::table('barang')->where('id', $od->id_barang)->get();
                $k++;
            }
            $k = 0;
            $i++;
            // $barangs[$k] = $barang;
        }
        // dd($barang);
        // dd($orderdetail);
        return view('barang.order', [
            'order' => $order,
            'orderdetail' => $orderdetail,
            'barang' => $barang,
            'null_item' => false,
        ]);
    }

    public function ubahStatusPemesanan(Request $request)
    {
        $pesanan = DB::table('pesanan')->where('id', $request->id_pesanan)->get();
        // dd($pesanan[0]->statusPemesanan);
        if ($pesanan[0]->statusPemesanan == "Sedang Dikirim") {
            DB::table('pesanan')->where('id', $request->id_pesanan)->update(['statusPemesanan' => 'Sudah Dikirim']);
            Session::flash('ubahStatusPemesananBerhasil', 'Berhasil Mengubah Status Pemesanan menjadi Sudah Dikirim');
            return redirect()->back();
        } else if ($pesanan[0]->statusPemesanan == "Siap di Pick-up") {
            //kembalikan jumlah barang
            $detailpesanan = DB::table('detailpesanan')->where('id_pesanan', $request->id_pesanan)->get();
            // dd($detailpesanan);
            foreach ($detailpesanan as $d) {
                $barang = DB::table('barang')->where('id', $d->id_barang)->get();
                $oldstok = $barang[0]->stokBarang + 1;
                DB::table('barang')->where('id', $d->id_barang)->update(['stokBarang' => $oldstok]);
            }
            DB::table('pesanan')->where('id', $request->id_pesanan)->update(['statusPemesanan' => 'Selesai']);
            Session::flash('ubahStatusPemesananBerhasil', 'Berhasil Mengubah Status Pemesanan menjadi Selesai');
            return redirect()->back();
        } else {
            Session::flash('ubahStatusPemesananGagal', 'Maaf, Belum bisa mengubah status pemesanan');
            return redirect()->back();
        }
    }
}

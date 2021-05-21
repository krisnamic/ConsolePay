<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\ShoppingCart;
use App\Models\Pesanan;
use App\Models\DetailPesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Date;

class UserController extends Controller
{
    public function detailBarang($ID_Barang)
    {
        // dd($ID_Barang);
        // $id = ['id' => $ID_Barang];
        // $produk = Barang::find($ID_Barang);
        // $barang = kategori::all();
        $barang = Barang::where('ID_Barang', $ID_Barang)->first();
        // dd($barang);
        return view('user.detailBarang', compact('barang'));
    }
    public function addToShoppingCart(Request $request)
    {
        //tampung tiap id barang di satu array
        $user_id = $request->session()->get('user_id');
        $shopping_cart = DB::table('shopping_cart')->where('user_id', $user_id)->get();
        // dd($shopping_cart);
        foreach ($shopping_cart as $s) {
            Session::flash('addToShoppingCartFailed', 'Add Item To Shopping Cart Failed!');
            if ($request->id_barang == $s->id_barang) {
                return redirect()->back();
            }
        }
        // $tes = $request->session()->get('user_id');
        // dd($request);
        $shoppingCart = new ShoppingCart;
        $shoppingCart->user_id = $request->session()->get('user_id');
        $shoppingCart->id_barang = $request->id_barang;
        $shoppingCart->status = false;
        $shoppingCart->created_at = now();
        $shoppingCart->updated_at = now();
        $simpan = $shoppingCart->save();

        if ($simpan) {
            Session::flash('addToShoppingCartSuccess', 'Add Item To Shopping Cart Success!');
            return redirect()->route('viewShoppingCart');
            // return view('user.shoppingCart');
        } else {
            Session::flash('addToShoppingCartFailed', 'Add Item To Shopping Cart Failed!');
            return redirect()->back();
        }
        // $shoppingCart = DB::table('shopping_cart')->where('email', $request->email)->value('role');
        // echo 'tes';
        // $barang = Barang::where('ID_Barang', $ID_Barang)->first();
        // dd($barang);
        // return view('user.shoppingCart', compact('barang'));
    }
    public function viewShoppingCart(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        $shopping_cart = DB::table('shopping_cart')->where('user_id', $user_id)->get();
        // dd($shopping_cart);
        $i = 0;
        if ($shopping_cart->isEmpty()) {
            $barang[$i] = DB::table('barang')->where('ID_Barang', 1)->get();
            return view('user.shoppingCart', [
                // 'shopping_cart' => ' ',
                'barang' => $barang,
                'null_item' => 'true',
                'totalPrice1Day' => 0,
            ]);
            // return view('user.shoppingCart');
        }
        $totalPrice1Day = 0;
        foreach ($shopping_cart as $s) {
            // dump($s->id_barang);
            // $barang[$i][] = $shopping_cart
            $barang[$i] = DB::table('barang')->where('ID_Barang', $s->id_barang)->get();
            $totalPrice1Day += $barang[$i][0]->hargaBarang;
            $i++;
        }
        // die;
        // dd($barang);
        return view('user.shoppingCart', [
            'shopping_cart' => $shopping_cart,
            'barang' => $barang,
            'null_item' => false,
            'totalPrice1Day' => $totalPrice1Day,
        ]);
    }

    public function deleteItemFromCart(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        $item_id = $request->itemToDelete;
        $row_to_delete = DB::table('shopping_cart')->where('user_id', $user_id)->where('id_barang', $item_id)->delete();
        // dd($row_to_delete);
        Session::flash('deleteItemFromCart', 'Item Removed From Shopping Cart');
        return redirect()->back();
    }

    public function addOrder(Request $request)
    {
        // dd($request);
        $user_id = $request->session()->get('user_id');
        $grandTotalPrice = $request->day * $request->totalprice;
        $date = date('Y-m-d H:i:s');
        $status_pemesanan = "Sedang Dikirim";

        $order = new Pesanan;
        $order->user_id = $user_id;
        $order->tanggalPemesanan = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date);
        $order->jumlahHari =  $request->day;
        $order->hargaTotal = $grandTotalPrice;
        $order->statusPemesanan = $status_pemesanan;
        $order->created_at = now();
        $order->updated_at = now();

        $simpanOrder = $order->save();

        foreach ($request->id_barang as $itemAmount) {
            $barang = DB::table('barang')->where('ID_Barang', $itemAmount)->get();
            if ($barang[0]->stokBarang < 1) {
                $pesanan = DB::table('pesanan')->where('user_id', $user_id)->latest()->delete();
                Session::flash('outOfStock', 'Failed To Order! , ' . $barang[0]->namaBarang . ' telah habis');
                return redirect()->back();
            }
        }

        // dd($request->id_barang);

        foreach ($request->id_barang as $itemAmount) {
            // echo  $itemAmount;
            // dd($itemAmount);

            $detailPesanan = new DetailPesanan;

            $pesanan = DB::table('pesanan')->where('user_id', $user_id)->latest()->first();
            // dd($pesanan->id);
            $detailPesanan->id_pesanan = $pesanan->id;
            $detailPesanan->id_barang = $itemAmount;

            DB::table('barang')->where('ID_Barang', $itemAmount)->decrement('stokBarang', 1);
            $barang = DB::table('barang')->where('ID_Barang', $itemAmount)->get();
            // dd($barang[0]->hargaBarang);
            $detailPesanan->hargaBarang = $barang[0]->hargaBarang;
            $detailPesanan->created_at = now();
            $detailPesanan->updated_at = now();

            $simpanOrderDetail = $detailPesanan->save();
        }
        // Session::put('user_id', $user_id);

        if ($simpanOrder && $simpanOrderDetail) {
            //hapus pake softdelete shopping cart yg di order
            foreach ($request->id_barang as $itemAmount) {
                DB::table('shopping_cart')->where('ID_Barang', $itemAmount)->where('user_id', $user_id)->delete();
            }

            Session::flash('addToShoppingCartSuccess', 'Add Item To Shopping Cart Success!');
            return redirect()->route('viewOrder');
            // return view('user.shoppingCart');
        } else {
            Session::flash('addToShoppingCartFailed', 'Add Item To Shopping Cart Failed!');
            return redirect()->back();
        }
        // dd($newDate);


        // return view('user.order');
    }
    public function viewOrder(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        $i = 0;
        // $order = DB::table('pesanan')->where('user_id', $user_id)->latest()->first();
        $order = DB::table('pesanan')->where('user_id', $user_id)->get();
        // dd($order);
        if ($order == null) {
            // dd($i);
            $barang[$i] = DB::table('barang')->where('ID_Barang', 1)->get();
            return view('user.order', [
                'barang' => $barang,
                'null_item' => 'true',
            ]);
            // return view('user.shoppingCart');
        }
        // dd($order->id);
        foreach ($order as $o) {
            $order_id = $o->id;
            $orderdetail = DB::table('detailpesanan')->where('id_pesanan', $order_id)->get();
            // $barang;
            foreach ($orderdetail as $od) {
                $barang[$i] = DB::table('barang')->where('ID_Barang', $od->id_barang)->get();
                $i++;
            }
        }
        // dd($orderdetail);
        return view('user.order', [
            'order' => $order,
            'orderdetail' => $orderdetail,
            'barang' => $barang,
            'null_item' => false,
        ]);
    }
}

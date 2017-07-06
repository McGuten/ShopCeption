<?php

namespace ShopCeption\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use ShopCeption\User;
use ShopCeption\Items;
use ShopCeption\Shop;
use Illuminate\Support\Facades\View;
use ShopCeption\Http\Controllers\Controller;
use Session;
use Redirect;
class ShopController extends Controller
{
  public function tienda($tienda)
  {
     $id = Shop::all()->where('name', $tienda)->first()->id;
     $items = Items::all()->where('shop_id', $id);
    return response()->json(
      $items->toArray()
    );
 }
  public function datos($tienda)
  {
      $id = Shop::all()->where('name', $tienda)->first()->id;
      $tienda = Shop::all()->where('name', $tienda)->first()->name;
      $user = User::all()->where('shop_id', $id)->first()->name;
      return response()->json([
        'tienda' => $tienda,
        'user' => $user,
      ]);
 }
  public function home($tienda)
  {
    $user = Shop::all()->where('name', $tienda)->first()->user->name;
    return view('shop.index', ['nombre' => $tienda, 'user' => $user]);
 }
  public function add(Request $request)
  {
    Auth::user()->id;
    $this->validate($request, [
          'name' => 'required|alpha_num|max:255,unique:shops',
      ]);
    Shop::create([
      'name' => $request['name'],
      'user_id' => Auth::user()->id,
    ]);
    Auth::user()->shop_id = Shop::all()->where('user_id', Auth::user()->id)->first()->id;
    Auth::user()->save();
    return redirect('/');
 }
  public function nueva()
  {
    return view('shop.creartienda');
 }
 public function ajax () {
  $users = Items::all()->where('shop_id', '1');
  return response()->json(
      $users->toArray()
    );
 }
}

<?php

namespace ShopCeption\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use ShopCeption\User;
use ShopCeption\Shop;
use ShopCeption\Items;
use ShopCeption\Http\Controllers\Controller;
use Session;
use Redirect;
class HomeController extends Controller
{   
    public function __construct() 
    {
      $this->middleware('auth');
  }
  public function index()
  {
     $id = Auth::user()->id;
     $user = DB::table('users')->where('id', $id)->first();
     return view('home', ['user' => $user]);
 }

 public function settings(Request $request)
 {
     return view('settings', ['request' => $request]);
 }
  public function form()
  {
    $tienda = Auth::user()->shop->name;
    return view('shop.crearitems', ['tienda' => $tienda]);
 }
  public function additems(Request $request)
  {
    $this->validate($request, [
          'name' => 'required|String|max:30|unique:items',
          'price' => 'required|numeric',
          'currency' => 'required|String',
          'tag' => 'required|alpha',
          'stock' => 'required|numeric',
          'image' => 'required|URL|max:255',
          'description' => 'required|String|max:255',
      ]);
    Items::create([
      'name' => $request['name'],
      'price' => $request['price'],
      'currency' => $request['currency'],
      'tag' => $request['tag'],
      'stock' => $request['stock'],
      'image' => $request['image'],
      'description' => $request['description'],
      'shop_id' => Auth::user()->shop->id,
    ]);
    return redirect('/');
 }

 public function edit(Request $request)
 {
    $user = Auth::user();
    $user->fill($request->all());
    $user -> password = bcrypt($request->password);
    $user->save();
    Session::flash('message', 'Usuario editado correctamente');
     return view('settings', ['request' => $request]);
 }

}

<?php
namespace  App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Http\Controllers\Controller;

class UserDashboardController extends Controller
{
   public function  view_giftcards(){
      $products = Product::all(); 
    return view('auth.usergiftcard', compact('products'));
   }

   public function show_usersubcategory(){
      return view('auth.usersubcatview');

   }
}

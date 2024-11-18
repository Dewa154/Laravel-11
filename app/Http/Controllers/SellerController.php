<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{
     //
     function secondList(){
        // return Seller::all();
        // return Seller::find(2)->productData;
      //   return Seller::find(3)->ProductData;

      $totalProduct = 20;
      // return Blade::render('<h1>{{$total}} Product list</h1>', ['total'=>$totalProduct]);
      return Blade::render('<h1>{{$total}} Product list</h1>', ['total'=>$totalProduct]);
     }

     function manyRel(){
      return Seller::find(1)->ProductManyData;
     }

     function manyToOne(){
      // return Product::all();

      $data = Product::with('seller')->get();
      return $data;
     }
}

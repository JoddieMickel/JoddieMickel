<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

 class FoodController extends Controller 
 {
     public function view(){

        $foods=Food::all();

        return view('food.foods')->with('foods', $foods);

     }

     public function save($name, $qty, $qlty,$price){
         $food = new Food();

         $food->name  = $name;
         $food->quantity  = $qty;
         $food->quality  = $qlty;
         $food->price  = $price;

         $food->save();

         return "Saved";
     }
     public function store(Request $request){
         $food = new Food();

         $food->name  = $request->name;
         $food->quantity  = $request->qty;
         $food->quality  =$request->qlty;
         $food->price  = $request->price;

         $food->save();

         return "Saved";
     }
 }
 



?>
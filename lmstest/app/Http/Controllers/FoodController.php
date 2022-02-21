<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
class FoodController extends Controller
{
    public function indexfood()
    {
       $foods = Food::all();
       return view('foods', compact('foods'));
    }

    /**
     * @return response()
     */

     public function foodcart()
     {
         return view('foodcart');
     }

     /**
      * @return response()
      */

      public function addToFoodCart($id)
      {
          $food = Food::findOrFail($id);
          $foodcart = session()->get('foodcart', []);

          if(isset($foodcart[$id])) {
              $foodcart[$id]['quantity']++;
          }
          else{
              $foodcart[$id] = [
                "name" => $food->name,
                "quantity" => 1,
                "price" => $food->price,
                "image" => $food->image
              ];
          }

          session()->put('foodcart', $foodcart);
          return redirect()->back()->with('success', 'Food added to food seccessfuly');
      }

      /**
       * 
       * @return response()
       */

       public function update(Request $request)
       {
           if($request->id && $request->quantity){
               $foodcart = session()->get('foodcart');
               $foodcart[$request->id]["quantity"]=$request->quantity;
               session()->put('foodcart', $foodcart);
               session()->flash('success', 'Food update was successfuly');
           }
       }


       /**
        * @return response()
        */

        public function remove(Request $request)
        {
            if($request->id) {
                $foodcart = session()->get('foodcart');
                if(isset($foodcart[$request->id])) {
                    unset($foodcart[$request->id]);
                    session()->put('foodcart', $foodcart);
                }
                session()->flash('success', 'Food removed was successfuly');
            }
        }
}

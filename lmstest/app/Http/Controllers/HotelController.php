<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;;
class HotelController extends Controller
{
   public function indexhotel()
   {
    $hotels = Hotel::all();
    return view('hotels', compact('hotels'));
   }

  /**
     * Write code on Method
     *
     * @return response()
     */
  public function hotelcart()
  {
      return view('hotelcart');
  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  public function addToHotelCart($id)
  {
      $hotel = Hotel::findOrFail($id);
        
      $hotelcart = session()->get('hotelcart', []);

      if(isset($hotelcart[$id])) {
          $hotelcart[$id]['quantity']++;
      } else {
          $hotelcart[$id] = [
              "quantity" => 1,
              "price" => $hotel->price,
              "image" => $hotel->image
          ];
      }
        
      session()->put('hotelcart', $hotelcart);
      return redirect()->back()->with('success', 'Hotel added to hotel successfully!');
  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  public function update(Request $request)
  {
      if($request->id && $request->quantity){
          $hotelcart = session()->get('hotelcart');
          $hotelcart[$request->id]["quantity"] = $request->quantity;
          session()->put('hotelcart', $hotelcart);
          session()->flash('success', 'Hotel updated successfully');
      }
  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  public function remove(Request $request)
  {
      if($request->id) {
          $hotelcart = session()->get('hotelcart');
          if(isset($hotelcart[$request->id])) {
              unset($hotelcart[$request->id]);
              session()->put('hotel', $hotelcart);
          }
          session()->flash('success', 'Hotel removed successfully');
      }
  }
}

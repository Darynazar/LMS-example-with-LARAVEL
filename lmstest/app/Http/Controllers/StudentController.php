<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
   public function indexstudent()
   {
    $students = Student::all();
    return view('students', compact('students'));
   }

  /**
     * Write code on Method
     *
     * @return response()
     */
  public function hotel()
  {
      return view('hotel');
  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  public function addToHotel($id)
  {
      $student = Student::findOrFail($id);
        
      $hotel = session()->get('hotel', []);

      if(isset($hotel[$id])) {
          $hotel[$id]['quantity']++;
      } else {
          $hotel[$id] = [
              "quantity" => 1,
              "price" => $student->price,
              "image" => $student->image
          ];
      }
        
      session()->put('hotel', $hotel);
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
          $hotel = session()->get('hotel');
          $hotel[$request->id]["quantity"] = $request->quantity;
          session()->put('hotel', $hotel);
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
          $hotel = session()->get('hotel');
          if(isset($hotel[$request->id])) {
              unset($hotel[$request->id]);
              session()->put('hotel', $hotel);
          }
          session()->flash('success', 'Hotel removed successfully');
      }
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
class LessonController extends Controller
{
    public function indexlesson()
    {
        $lessons = Lesson::all();
        return view('lessons', compact('lessons'));
    }

    public function lessoncart()
    {
        return view('lessoncart');
    }

    public function addToLessonCart($id)
    {
        $lesson = Lesson::findOrFail($id);
        $lessoncart = session()->get('lessoncart', []);

        if(isset($lessoncart[$id])) {
            $lessoncart[$id['quantity']]++;
        }
        else{
            $lessoncart[$id] = [
                "name" => $lesson->name,
                "quantity" => 1,
                "price" => $lesson->price,
                "time" => $lesson->time,
                "image" =>$lesson->image
            ];
        }

        session()->put('lessoncart', $lessoncart);
        return redirect()->back()->with('success', 'Lesson added to lesson cart successfuly');
    }

     /**
     * Write code on Method
     *
     * @return response()
     */

     public function update(Request $request)
     {
         if($request->id && $request->quantity){
             $lessoncart = session()->get('lessoncart');
             $lessoncart[$request->id]["quantity"] = $request->quantity;
             session()->put('lessoncart', $lessoncart);
             session()->flash('success', 'Lessoncart update successfuly');
         }
     }

      /**
     * Write code on Method
     *
     * @return response()
     */

     public function remove(Request $request)
     {
         if($request->id){
             $lessoncart = session()->get('lessoncart');
             if(isset($lessoncart[$request->id])) {
                 unset($lessoncart[$request->id]);
                 session()->put('lessoncart', $lessoncart);
             }
             session()->flash('success', 'Lesson removed successfuly');
         }
     }

}

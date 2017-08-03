<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataStudentCOntroller extends Controller
{

    function add(Request $request){
        DB::beginTransaction(); 
        try{
            
            

            $stdList = student::find($id);
            if ($stdList == null) {
               $this->validate($request, [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|email'
            ]);

            $firstname = $request->input('firstsname');
            $lastname = $request->input('lastname');
            $email = $request->input('email');
            $course_id = $request->input('course_id');
            $address = $request->input('address');
            $phonenumber = $request->input('phonenumber');

            $std = new student; 
            $std->firstname = $firstname;
            $std->lastname = $lastname;
            $std->email = $email;
            $std->course_id = $course_id;
            $std->address = $address;
            $std->phonenumber = $phonenumber;
            $std->save();
            } 
            else {
            $std = new student; 
            $std->firstname = $firstname;
            $std->lastname = $lastname;
            $std->email = $email;
            $std->course_id = $course_id;
            $std->address = $address;
            $std->phonenumber = $phonenumber;
            $std->save();
            }

            $stdList = student::get();

            DB::commit();
            return response()->json($stdList, 201);
        }

        catch(\Exception $e){
            DB::rollBack();
            return response()->json(["message" => $e->getMessage()],500);

        }
    }

    // function update(Request $request){
    //     DB::beginTransaction();
    //     try{
    //     $completedList = $request->complete;
    //     if(!empty($completedList))
    //     {
    //         foreach($completedList as $val)
    //         {
    //             DB::delete('delete from students where id = ?', [$val]);
    //         }

    //     }
    //     return redirect('/');
    //     DB::commit();

    //     }
    //     catch(\Exception $e){
    //         DB::rollBack();
    //         return response()->json(["message" => $e->getMessage()],500);
    //     }
    
    // }
}
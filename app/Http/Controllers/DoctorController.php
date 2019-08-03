<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\User;

class DoctorController extends Controller
{
   public function register_form(){
       return view('register_doctor');
   }
   public function register(Request $request){
       $uid=User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>$request->password,
           'role_id'=>2,
       ])->id;
       Doctor::create([
        'user_id'=>$uid,
        'department'=>$request->department,
        'degree'=>$request->degree,
       ]);
       return redirect()->back();
   }
   public function showAll(){
       $doctors=Doctor::all();
       return view("doctors",compact('doctors'));
   }
}

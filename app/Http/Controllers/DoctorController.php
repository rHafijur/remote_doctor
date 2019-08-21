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
   public function edit($id){
       $doctor=Doctor::find($id);
       return view("edit_doctor",compact('doctor'));
   }
   public function update(Request $request){
    $doctor=Doctor::find($request->id);
    $doctor->user->name=$request->name;
    $doctor->user->email=$request->email;
    $doctor->user->password=$request->password;
    $doctor->user->save();
    $doctor->department=$request->department;
    $doctor->degree=$request->degree;
    $doctor->save();
    return redirect('doctors');
   }
   public function delete($id){
       $doc= Doctor::find($id);
       $user=$doc->user;
       $doc->delete();
       $user->delete();
       return redirect()->back();
   }
}

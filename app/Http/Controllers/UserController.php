<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
   public function index (){
      $obj = User::get();
      return view('backend.user.index')
      ->with('obj',$obj);
   }

    public function createUpdate (){
      return view('backend.user.createUpdate');
   }

   public function store(Request $request){

      $data = $request->all();

          $request->validate( [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

          User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]); 

      return redirect()->back()->with('success','success');
   }
}

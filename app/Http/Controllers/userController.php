<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\DB;

class userController extends Controller
{
    public function signup(){
      return  view ('signup');
    }

    public function update_page(){
      return  view ('update_page');
    }
    public function userlist(){
      $user = User::all();
      return view ('userlist', ['user'=>$user]);
    }

    public function signupbtn(Request $req){
    $user = new User;
    $user->name=$req->name;
    $user->email=$req->email;
    $user->password=$req->password;
    $result = $user->save();
    
    if ($result) {
       return redirect ('userlist');
    }
  }
    public function login(Request $req){
      //('select * from posts where id = ?',[1])
      $user = DB::select('select * from users where email = ?',[$req->email]);
       $user = User::select('password')-> where('email',$req->email)->get();
      //print_r($req->input());

      dd($req->email);
      if($req->password==$user->password){
      return redirect ('update_page');
    }
  }
    public function testing($id){
      return "i done it". $id;
    }

    public function arraylist(){
      $people = ['wasib', 'kashif', 'adnan', 'hizbi', 'noshad'];

      return view('arraylist', compact('people'));
    }

    // public function create(){

    //  return view('create');
    // }

    
}


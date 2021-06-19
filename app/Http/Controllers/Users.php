<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class Users extends Controller
{
  //
  public function getRegisterationData(Request $req)
  {
    $validatedata = $req->validate([
      'firstname' => 'required',
      'username' => 'required|unique:users|max:20',
      'password' => 'bail|required|min:5|confirmed'
    ]);

    $user = new User;
    $user->firstname = $req->firstname;
    $user->lastname = $req->lastname;
    $user->username = $req->username;
    $user->password = bcrypt($req->password);
    $user->role = 'USER';
    $user->save();
    return redirect('login');    //Requests input
  }

  public function logindata(Request $req)
  {
      $validatedata = $req->validate([
      'username' => 'required',
      'password' => 'required'
    ]);

    $result = DB::table('users')->where('username', $req->input('username'))->get();

    if($result){
      $hashedPassword = $result[0]->password;
      $password = $req->input('password');
      if(Hash::check($password, $hashedPassword)){
        $req->session()->put("user", $result[0]->username);
        
        if($result[0]->role == "ADMIN")
          return redirect("adminhome");
        else
          return redirect("userhome");
      }
      else
        redirect("login");
    }
    else
      redirect("login");
  }
  //   //$res = json_decode($result, true);
    
  //   //if (sizeof($res) == 0) {

  //     return view("login");
  //     //$req->session()->flash('error', 'Username does not exist. Please register yourself first');
  //     //return redirect('login');
  //   } else {

  //     return redirect('userhome');
  //   }


  //   //Requests input
  // }
}

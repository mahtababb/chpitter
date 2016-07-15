<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

class SettingController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  
  public function showSetting()
  {
    return view('settings');
  }

 

   public function updateProfile(Request $req)
   {
   	   $id = $req->user()->id;
   	   $user = User::findOrFail($id);
   	   $user->update($req->all());
       return back();
   }
}

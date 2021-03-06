<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NotificationController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function showNotification()
  {
    return view('notifications');
  }
}

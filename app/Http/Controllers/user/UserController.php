<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
 public function index ()
 {
    return view('user.landing');
 }

 public function formregister()
 {
      return view (view:'user.register');
 }
}
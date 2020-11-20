<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator; // validator class for rules
// add model
use App\Models\User;
use Auth;

class DefaultController extends Controller
{
    //
      public function __construct()
      {
  		    $this->middleware('auth');
  	  }
      public function main(){
        return view('admin.index');
      }
}

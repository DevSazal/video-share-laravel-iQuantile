<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Video;

class DefaultController extends Controller
{
    //
    public function index(){
      $array['videos'] = Video::paginate(6);
      return view('index')->with($array);
    }
}

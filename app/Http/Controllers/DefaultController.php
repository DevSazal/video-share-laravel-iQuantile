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

    public function openVideo($id){
      // Video Playing page by student
      $array['video'] = Video::find($id);
      return view('video')->with($array);
    }
}

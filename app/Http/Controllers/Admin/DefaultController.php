<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator; // validator class for rules
// add model
use App\Models\User;
use App\Models\Video;
use Auth;
// use Session;

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

      public function storeVideo(Request $request){
        // code...  Data Validation for video
        $validator = Validator::make($request->all(), [
          'description' => 'required|string',
          'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm,qt,mov,avi,wmv,mkv|max:25000000' // 25 Mb
        ]);

        if ($validator->fails()) {
          return back()->withErrors($validator)
                        ->withInput();
          // return dd($validator->errors());
        }else {

          // ... rename file for security
          $ext = $request->video->getClientOriginalExtension();
                  $file = date('Y-m-d_H-i-s').'_'.rand(1,999).'.'.$ext;
                  $file_path = $request->video->storeAs('videos', $file, 'public');
          // ... save data

        $video = new Video;
        $video->description = $request->description;
        $video->user_id = Auth::user()->id;
        $video->video = $file_path;
        $result = $video->save();

          if($result){
            $request->session()->flash('uploaded_video', Auth::user()->name);
            // return ["result" => "Video has been saved."];
            return redirect('/dashboard');
          }else{
            return ["result" => "Operation Failed!"];
          }
        }
      }


}

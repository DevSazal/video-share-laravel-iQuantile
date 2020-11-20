<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Video;
use App\Models\Comment;

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
      $array['top_ratings'] = Comment::where('video_id', $id)
                        ->orderBy('rating', 'DESC')
                        ->take(3)->get();
      $array['avgRate'] = Comment::where('video_id', $id)
                        ->avg('rating');
      $array['comments'] = Comment::where('video_id', $id)
                          ->get();

      return view('video')->with($array);
    }

    public function storeComment(Request $request){
      // code...  Data Validation for comment
      $validator = Validator::make($request->all(), [
        'name' => 'required|string|min:3|max:40',
        'rating' => 'required|integer',
        'age' => 'required|integer',
        'video_id' => 'required|integer',
        'email' => 'required|email',
        'comment' => 'required|string'
      ]);

      if ($validator->fails()) {
        // return back()->withErrors($validator)
        //               ->withInput();
        return dd($validator->errors());
      }else {

      $c = new Comment;
      $c->name = $request->name;
      $c->rating = $request->rating;
      $c->age = $request->age;
      $c->video_id = $request->video_id;
      $c->email = $request->email;
      $c->comment = $request->comment;
      $result = $c->save();

        if($result){
          // return ["result" => "Comment has been saved."];
          return redirect('/video/'.$request->video_id);
        }else{
          return ["result" => "Operation Failed!"];
        }
      }
    }
}

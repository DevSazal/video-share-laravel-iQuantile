<!--  -->

@extends('layouts.app3')

@section('title', 'Video')


@section('content')


<div class="row" style="padding-top: 25px; padding-bottom: 25px;">
  <div class="col-md-7">

    <video width="100%" height="400" controls>
      <source src="{{ Storage::url($video->video) }}" type="video/mp4">
      Your browser does not support the video tag.
    </video>

    <div class="" style="background-color: #e8eef5; padding: 5px;">
      <div class="row">
        <div class="col-md-2">
          <img src="{{ Storage::url($video->user->profile_photo_path) }}" class="rounded " style="height:50px" alt="">
        </div>
        <div class="col-md-10">
          <h6><b>{{$video->user->name }}</b></h6>
          <p>{{$video->description }}</p>
        </div>
      </div>
    </div>

  </div>
  <div class="col-md-5" style="padding-left: 50px;">
    <div class="" style="padding-top: 40px;">
      <b>Top Responses</b>
    </div>

  </div>

</div>




@endsection

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
      <br>

      <br>
      @foreach($top_ratings as $top)
      <p>{{ $top->name }} <b style="color:#4ba756">({{ $top->rating }} star)</b></p>
      @endforeach
      <br>

      <br>
      <b>Avarage Response Rating: </b>
      <h5 style="color:red">{{ round($avgRate, 2) }}</h5>
    </div>
  </div>


</div>


<div class="" style="">
  <div class="row">
    <b style="padding-left: 20px;">All Comments:</b>
    @foreach($comments as $comment)
    <div class="col-md-12" style="background-color: #ffd3fa; padding: 15px; margin: 20px 10px;">
      <h6>@<b>{{ $comment->name }}</b></h6>
      <p>{{ $comment->comment }}</p>
      <span>DATE: {{ $comment->created_at }}</span>
    </div>
    @endforeach

  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <b>Add a Comment</b>
    <form action="{{ route('storeComment') }}" method="POST" style=" background: #efdaff; padding: 10px;">
      @csrf
      <input type="hidden" name="video_id" value="{{ $video->id }}">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputName">Name</label>
          <input type="text" name="name" class="form-control" id="inputName">
        </div>
        <div class="form-group col-md-6">
          <label for="input">Age</label>
          <input type="number" name="age" class="form-control" id="input">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail">Email</label>
          <input type="email" name="email" class="form-control" id="inputEmail">
        </div>
        <div class="form-group col-md-6">
          <label for="input">Rating</label>
          <div class="">

            <div class="form-check-inline">
                <label class="form-check-label" for="radio">
                  <input type="radio" class="form-check-input" id="radio" name="rating" value="1"> 1
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="radio">
                  <input type="radio" class="form-check-input" id="radio" name="rating" value="2"> 2
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="radio">
                  <input type="radio" class="form-check-input" id="radio" name="rating" value="3"> 3
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="radio">
                  <input type="radio" class="form-check-input" id="radio" name="rating" value="4"> 4
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="radio">
                  <input type="radio" class="form-check-input" id="radio" name="rating" value="5"> 5
                </label>
            </div>

          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="input">Comment</label>
          <textarea name="comment" class="form-control" rows="3" id="input"></textarea>
        </div>
      </div>


      <div class="form-group">
        <div class="form-check">

        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{ url('/') }}"> Go to home page ...</a>
    </form>

  </div>
</div>




@endsection

<!--  -->

@extends('layouts.app2')

@section('title', 'App Dashboard - video share')


@section('content2')


<div class="">
    <h3>Videos <a href="{{ url('/dashboard') }}" class="btn btn-secondary"><i class="fas fa-plus-circle"></i> Upload </a></h3>
    <p>You may upload or share video for student..</p>
    <!-- <img src="{{ Illuminate\Support\Facades\Storage::url(''.Auth::user()->profile_photo_path) }}" alt="">
    <img src="{{ url('storage/'.Auth::user()->profile_photo_path) }}" alt=""> -->

    <form action="{{ route('storeVideo') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="input" style="color: #e10cef; font-weight: bold;" >Description:</label>
          <textarea name="description" class="form-control" rows="3" id="input"></textarea>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="input" style="color: #e10cef; font-weight: bold;" >Video:</label>
          <div class="custom-file">
            <input type="file" name="video" class="custom-file-input" id="customFile" accept="video/*">
            <label class="custom-file-label" for="customFile">Choose Video</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="form-check">

        </div>
      </div>
      <button type="submit" class="btn btn-primary">Save Video</button>
    </form>


</div>



@endsection

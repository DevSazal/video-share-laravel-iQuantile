<!--  -->

@extends('layouts.app2')

@section('title', 'App Dashboard - video share')


@section('content2')


<div class="">
    <h3>Videos <a href="{{ url('/dashboard') }}" class="btn btn-secondary"><i class="fas fa-plus-circle"></i> Upload </a></h3>
    <p>You may upload or share video for student..</p>
    <!-- <img src="{{ Illuminate\Support\Facades\Storage::url(''.Auth::user()->profile_photo_path) }}" alt="">
    <img src="{{ url('storage/'.Auth::user()->profile_photo_path) }}" alt=""> -->

    @if(\Session::has('uploaded_video'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> Video has been saved by <b>{{ session('uploaded_video') }}</b>.
      </div>
    @endif
    <form action="{{ route('storeVideo') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="input" style="color: #e10cef; font-weight: bold;" >Description:</label>
          <textarea name="description" class="form-control" rows="3" id="input">{{ old('description') }}</textarea>
          @error('description')
              <div class="mt-2" style="color: #dc3545;">
                  {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="input" style="color: #e10cef; font-weight: bold;" >Video:</label>
          <div class="custom-file">
            <input type="file" name="video" class="custom-file-input" id="customFile" accept="video/*">
            <label class="custom-file-label" for="customFile">Choose Video</label>
            @error('video')
                <div class="mt-2" style="color: #dc3545;">
                    {{ $message }}
                </div>
            @enderror
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

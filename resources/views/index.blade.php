<!--  -->

@extends('layouts.app3')

@section('title', 'Videos')


@section('content')

<div class="row">
  @forelse($videos as $video)
  <div class="col-md-6" style="padding-top: 25px; padding-bottom: 25px;">
    <center>
      <h4>Video: {{$video->id }}</h4>
      <h6>Uploader: {{$video->user->name }}</h6>
      <a href="{{ url('/video/'.$video->id) }}" class="btn btn-outline-danger">Open Video...</a>
    </center>
  </div>
  @empty
    <div class="col-md-12">
        <div class="alert" role="alert" style="color: white;font-size: 17px;font-weight: 900;background: #39c395;border-color: #d6e9c6;">
              No Video Found!
        </div>
    </div>
  @endforelse
</div>

{{ $videos->links() }}


@endsection

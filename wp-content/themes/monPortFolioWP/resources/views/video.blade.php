@extends('layouts.app')

@section('content')
  <div class="page-header">
    <h1>Mes réalisations</h1>
  </div>
  <div class="listPost">
    @foreach($posts as $post)
      <div class="post">
        <a class="titrePost" href="{{$post->slug}}">{{$post->post_title}}</a>
        <div class="infoPost">
          <p>{{$post->post_date}}</p>
        </div>
        <p>
        </p>
      </div>
    @endforeach
  </div>
@endsection

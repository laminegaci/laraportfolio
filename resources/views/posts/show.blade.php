@extends('layouts.layout_blog')

@section('title')
    blog technologie
@endsection

@section('content')

@include('layouts.header_blog')

<div class="container mt-5">
    
<div class="row">
    <div class="col-md-8">
        <img class="mr-3" style="width: 100%; height: auto;" src="/uploads/{{ $posts->image }}" alt="mal9itch  l'image">
        <h2>{{$posts->titre}}</h2>
        <p>{!! $posts->description !!}</p>
       
    </div>
    <div class="col-md-4">
    <div class="row  latest_article">
                        
                        <ul class="ml-4">
                          @include('posts.widgets.lastposts')
                        </ul>
                    </div>
    </div>
   
</div>
</div>


@include('layouts.footer_blog')
@stop

@extends('layouts.layout_blog')

@section('title')
    blog technologie
@endsection

@section('content')

@include('layouts.header_blog')

<div class="container mt-5">
    
<div class="row">
    <div class="col-sm-8">
    <img class="mr-3" style="width:700px;height:350px;" src="../../storage/images/{{ $posts->image }}" alt="mal9itch  l'image">
    <h2>{{$posts->titre}}</h2>
    <p>{{$posts->description}}</p>
       
    </div>
   
</div>
</div>
    
@stop

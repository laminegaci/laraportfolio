@extends('layouts.app')

@section('title')
    create post
@endsection





@section('content')
<div class="container">
@include('errors')  
<h2>formulaire de creation de projet</h2>

<form action=" {{route('portfolios.store')}} " class="form" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group">
        <input type="text" name="type" class="form-control" value="{{old('type')}}" placeholder="titre">
    </div>
    <div class="form-group">
        <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="description">{{ old('description') }}</textarea>
    </div>
   
    <div class="form-group">
        <input type="file" name="image" class="form-control-file" value="{{old('image')}}" id="exampleFormControlFile1">
    </div>
   
    
   

    
   
    <button class="btn btn-success">sauvgarder</button>
</form>
</div>
@endsection
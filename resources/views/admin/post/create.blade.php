@extends('layouts.app')

@section('title')
    create post
@endsection





@section('content')
<div class="container">
@include('errors')  

<h2>formulaire de creation de post</h2>

<form action=" {{route('posts.store')}} " class="form" method="POST">
    @csrf
    
    <div class="form-group">
        <input type="text" name="titre" class="form-control" placeholder="titre">
    </div>
    <div class="form-group">
        <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="description"></textarea>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="categorie" id="exampleRadios1" value="Technologie" checked>
        <label class="form-check-label" for="exampleRadios1">
        Technologie
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="categorie" id="exampleRadios2" value="Windows">
        <label class="form-check-label" for="exampleRadios2">
        Windows
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="categorie" id="exampleRadios2" value="programmation">
        <label class="form-check-label" for="exampleRadios2">
        programmation
        </label>
    </div>
    <div class="form-group">
        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
    </div>
   
    
   

    
   
    <button class="btn btn-success">sauvgarder</button>
</form>
</div>
@endsection
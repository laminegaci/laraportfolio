@extends('layouts.app')


@section('title')
    create post
@endsection





@section('content')
<div class="container">
@include('errors')  

<h2>formulaire de creation de post</h2>

<form action=" {{route('posts.store')}} " method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group">
        <input type="text" name="titre" class="form-control" placeholder="titre"  value="{{old('titre')}}">
        <!-- <span class="text-danger"> {{ $errors->first('titre') }}</span> -->
    </div>
    <div class="form-group">
        <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="description"></textarea>
    </div>
    <div class="form group">
        @foreach($categories as $categorie)
            <div class="form-check">
                <input class="form-check-input" type="radio" name="categorie" id="exampleRadios1" value="{{$categorie->categorie}}" checked>
                <label class="form-check-label" for="exampleRadios1">
                {{$categorie->categorie}}
                </label>
            </div>
        @endforeach
        <!-- <div class="form-check">
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
        </div> -->
    </div>
    <div class="form-group">
        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
    </div>
  
    <button type="submit" class="btn btn-success">sauvgarder</button>
</form>
</div>
@endsection
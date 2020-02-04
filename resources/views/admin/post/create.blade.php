<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>create post hhhh</title>
    <!-- Scripts -->
   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>

    

   
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
           
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    Laraportfolio
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

<main class="py-4">
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
        <textarea name="description" id="summernote" ></textarea>
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
</main>
    </div>

<script>
  $('#summernote').summernote({
    placeholder: 'Hello Bootstrap 4',
    tabsize: 2,
    height: 100
  });
</script>
  </body>
</html>


   

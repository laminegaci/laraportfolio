@extends('layouts.layout_blog')

@section('title')
    blog
@endsection

@section('content')

<div class="content">
<nav id="navig">
            <div class="logo">
                <a href="{{ route('portfolio') }}"> <img class="" src="{{ asset('storage/images/logo test2.png') }}" alt="mkchha" id="logo"></a>
            </div>
            <ul class="navbarr">
                <li> <a href="{{route('blog.posts.index')}} " class="link">Touts</a></li>
                <li> <a href="{{route('blog.posts.technologie')}} " class="link">Techologie</a></li>
                <li><a href="{{route('blog.posts.windows')}}" class="link">Windows</a></li>
                <li><a href="{{route('blog.posts.programmation')}}" class="link">Programmation</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav><!-- end nav -->
        <div class="content">
            <div class="slidbar">
           <img src="{{ asset('storage/images/bg_blog.jpg')}}" class="" alt="Responsive image">
            </div>

        <div class="container mt-5">
        <h1>Toute Les articles</h1>
            
            <div class="row">
                <div class="col-lg-8">   
                    
                    @forelse($posts as $post)     
                    <div class="media row">
                        <div class="col-md-5">
                            <img class="mr-3" style="width:250px;height:150px;" src="storage/images/{{ $post->image }}" alt="mal9itch  l'image">
                        </div>
                        <div class="col-md-7">
                            <div class="media-body">
                            
                                <h5 class="mt-0">{{ $post->titre }} </h5>
                                    {{  Str::limit($post->description, 200) }}
                            </div> 
                            <p  > <span style="color:blue;">publier : {{ Carbon\Carbon::parse($post->date_publication)->diffForHumans() }} <br></span> <span>par : {{$post->user->name}} </span></p>
                            
                            <a  href="{{ route('blog.posts.show', $post->titre) }}"><button class="btn btn-primary">Lire plus ...</button></a>  
                            
                        </div>                     
                    </div>
                    @empty
                    <h1 style="color:red;">not yet</h1>
                    @endforelse
                

                </div>
                <div class="col-lg-4">
                    <div class="row  latest_article">
                        
                        <ul class="ml-4">
                          @include('posts.widgets.lastposts')
                        </ul>
                    </div>
                   
                </div>
            </div>
           
                   
        
        </div>
    
  

</div><!-- end content -->



@include('layouts.footer_blog')
@endsection
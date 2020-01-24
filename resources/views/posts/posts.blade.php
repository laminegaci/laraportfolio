@extends('layouts.layout_blog')

@section('title')
    blog
@endsection

@section('content')

<div class="content">
<nav id="navig">
            <div class="logo">
                <a href="{{ route('portfolio') }}"> <img class="" src="storage/images/logo3.png" alt="mkchha" id="logo"></a>
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
</div>

        <div class="container mt-5">
        <h1>Toute Les articles</h1>
            
            <div class="row">
                <div class="col-sm-8">   
                    @foreach($posts as $post)     
                    <div class="media">
                        <div class="col-lg-5" >
                            <img class="mr-3" style="width:250px;height:150px;" src="storage/images/{{ $post->image }}" alt="mal9itch  l'image">
                        </div>
                        <div class="col-lg-7">
                            <div class="media-body">
                            
                                <h5 class="mt-0">{{ $post->titre }} </h5>
                                    {{  Str::limit($post->description, 80) }}
                            </div> 
                            <p  > <span style="color:blue;">publier : {{ Carbon\Carbon::parse($post->date_publication)->diffForHumans() }} <br></span> <span>par : {{$post->user->name}} </span></p>
                            
                            <a  href="{{ route('blog.posts.show', $post->titre) }}"><button class="btn btn-primary">Lire plus ...</button></a>  
                            
                        </div>                     
                    </div>
                    @endforeach
                

                </div>
                <div class="col sm 4">
                    <h2>Les derniers articles</h2>
                    <ul>
                       @foreach($lastposts as $post)
                       <a href=" {{ route('blog.posts.show',$post->titre) }} "><li style="color:white;"> {{ $post->titre }} </li></a>
                       @endforeach
                        
                      
                    </ul>
                </div>
            </div>
           
                   
        
        </div>
    
  

</div><!-- end content -->



@include('layouts.footer_blog')
@endsection
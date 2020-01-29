@extends('layouts.layout_blog')

@section('title')
    blog technologie
@endsection

@section('content')

<div class="content">
@include('layouts.header_blog')

    <div class="container mt-5">
    <h1>Windows articles</h1>
    
        <div class="row">
            <div class="col-md-8">   
                
                @forelse($posts as $post)     
                    <div class="media row">
                        <div class="col-lg-5">
                            <img class="mr-3" style="width:250px;height:150px;" src="storage/images/{{ $post->image }}" alt="mal9itch  l'image">
                        </div>
                        <div class="col-lg-7">
                            <div class="media-body">
                            
                                <h5 class="mt-0">{{ $post->titre }} </h5>
                                    {{$post->description, 200}}
                            </div> 
                            <p  > <span style="color:blue;">publier : {{ Carbon\Carbon::parse($post->date_publication)->diffForHumans() }} <br></span> <span>par : {{$post->user->name}} </span></p>
                            
                            <a  href="{{ route('blog.posts.show', $post->titre) }}"><button class="btn btn-primary">Lire plus ...</button></a>  
                            
                        </div>                     
                    </div>
                    
                    @empty
                    <h1 style="color:red;">not yet</h1>
                @endforelse
            

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
    
  

</div><!-- end content -->


@include('layouts.footer_blog') 
@endsection
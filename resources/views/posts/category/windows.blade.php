@extends('layouts.layout_blog')

@section('title')
    blog technologie
@endsection

@section('content')

<div class="content">
@include('layouts.header_blog')

        <div class="container mt-5">
        <h1>Windows articles</h1>
            @foreach($posts as $post)
            <div class="row">
                <div class="col-sm-8">        
                    <div class="media">
                        <div class="col-lg-5" >
                            <img class="mr-3" style="width:250px;height:150px;" src="{{ $post->image }}" alt="Generic placeholder image">
                        </div>
                        <div class="col-lg-7">
                            <div class="media-body">
                                <h5 class="mt-0">{{ $post->titre }} </h5>
                                {{ $post->description }}
                            </div>  
                            <a  href="{{ route('posts.show', $post) }}"><button class="btn btn-primary">Lire plus ...</button></a>     
                        </div>                     
                    </div>   
                </div>
                
            </div>
            @endforeach
           
            
        
        </div>
    
  

</div><!-- end content -->


@include('layouts.footer_blog') 
@endsection
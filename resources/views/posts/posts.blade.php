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
        <h1>Toute Les articles </h1>
            
            <div class="row">
                <div class="col-md-8">   
                    
                    @forelse($posts as $post)   
                    
                    <div class="media row">
                        <div class="col-lg-5">
                            <img class="mr-3" style="width:250px;height:150px;" src="/uploads/{{ $post->image }}" alt="mal9itch  l'image">
                        </div>
                        <div class="col-lg-7">
                            <div class="media-body">
                            
                                <h5 class="mt-0">{{ $post->titre }} </h5>
                                   <p> {!!  Str::limit($post->description, 200) !!}</p>
                            </div> 
                            <p  > <span style="color:blue;">publier : {{ Carbon\Carbon::parse($post->date_publication)->diffForHumans() }} <br></span> <span>par : {{$post->user->name}} </span></p>
                            
                            <a  href="{{ route('blog.posts.show', $post->titre) }}"><button class="btn btn-primary">Lire plus ...</button></a>  
                            
                        </div>                     
                    </div>
                    @empty
                    <div class="empy text-center">
                    <h1 >pas d'articles encore</h1>
                    </div>
                    @endforelse
                
                <div class="mt-5 justify-content-center d-flex">
                {!! $posts->appends(['q' => request('q')]) ->links() !!}
                </div>
                </div>
                <div class="col-md-4">
                    <div class="row mb-4 latest_article">  
                        <ul class="ml-4">
                          @include('posts.widgets.search')
                        </ul>
                    </div>
                    <div class="row mb-4 latest_article">
                        
                        <ul class="ml-4">
                          @include('posts.widgets.lastposts')
                        </ul>
                    </div>                   
                </div>
            </div>
           
                   
        
        </div>
    
  
        <footer>
        <div class="container">
            <div class="footer_content">
                <div class="left">
                    <!-- <img src="images/logo3.png" alt="mkch"> -->
                    <h5>Je mets en service</h5>
                    <ul>
                        <li>Conception graphique</li>
                        <li>Développement web</li>
                        <li>RESPONSIVE DESIGN</li>
                        <li>INTÉGRATION WEB</li>
                        <li>DÉVELOPPEMENTS SPÉCIFIQUES</li>
                        <li>GESTION DE BASE DONNEE</li>
                    </ul>
                </div>
                <div class="middle">
                    
                   <h5>Freelancer</h5>
                   <ul>
                       <li>Contact</li>
                       <li>Blog</li>
                   </ul>
                </div>
                <div class="right">
                    <h5>Me contactez</h5>
                        <ul>
                            <li><i class="map marker alternate icon"></i>Adresse : Souidania - Alger - Algerie</li>
                            <li><i class="phone icon"></i>Tel : 0699472366</li>
                            <li><i class="envelope open icon"></i>Email : mohamed61laine@gmail.com</li>
                            <li>
                                <div class="reseau-sociaux">
            
                                <a href="https://web.facebook.com/mohamed.lamine.dev?ref=bookmarks" rel="noopener noreferrer" target="_blank">
                            
                                <i class="fab fa-facebook-square"></i>
                                
                                </a>
                                
                                <a href="https://www.instagram.com/med_lam.lamine/?hl=en" rel="noopener noreferrer" target="_blank">
                                
                                <i class="fab fa-instagram"></i>
                                
                                </a>
                                
                                <a href="http://google.com" rel="noopener noreferrer" target="_blank">
                                
                                <i class="fab fa-github"></i>
                                
                                </a>

                                </div> <!-- end class reseau-sociaux -->
                            </li>
                            
                        </ul>
                   
                </div>
            </div>
            <hr class="footer-hr">
            <p class="copyright"> 2019-2020 Mon Portfolio  -Tous les droits sont réservés.</p>
        </div>
      

       <!-- <div style="width:200px;  height:200px; background-color:#D14233;">
            <figure class="imghvr-push-up" style="background-color:white;">
            <img src="images/pc1.png">
            <figcaption>
               <form action="">
                    <input type="submit">
                    <input type="submit">
               </form>
            </figcaption>
            </figure>
       </div> -->
             
    </footer><!-- end footer -->
</div><!-- end content -->



@include('layouts.footer_blog')
@endsection
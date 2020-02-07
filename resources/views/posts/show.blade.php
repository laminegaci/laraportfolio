@extends('layouts.layout_blog')

@section('title')
Mohamed Lamine | Developpeur web
@endsection

@section('content')

@include('layouts.header_blog')

<div class="container mt-5">
    
    <div class="row">
        <div class="col-md-8">
            <img class="mr-3" style="width: 100%; height: auto;" src="/uploads/{{ $posts->image }}" alt="mal9itch  l'image">
            <h2>{{$posts->titre}}</h2>
            <p>{!! $posts->description !!}</p>
        
        </div>
        <div class="col-md-4">
        <div class="row  latest_article empty">
                            
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

@include('layouts.footer_blog')
@stop

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laraportfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.11.2-web/css/all.css') }}"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    

    <link rel="stylesheet" href="{{ asset('css/dist/semantic.css') }}"/>
    <script src="{{ asset('css/dist/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('css/dist/semantic.min.js') }}"></script>
    
</head>
<body>

<div class="container-fluid">
    <nav id="nav">
        <div class="logo">
          <a href="#accueil"> <img class="" src="storage/images/logo test2.png" alt="" id="logo"></a>
        </div>
        <ul class="navbar">
            <li><a href="#propos" class="link">A propos</a></li>
            <li><a href="#services" class="link">Services</a></li>
            <li> <a href="#projects" class="link">Portfolio</a></li>
            <li><a href="{{ route('blog.posts.index') }}" class="link">Blog</a></li>
            <li><a href="{{route('contact.create')}}" class="link">Contact</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav><!-- end nav -->
    
    <div class="accueil" id="accueil">
        <div class="row">
            <div class="hello_area" data-aos="fade-up"> 
            
                <h1 class="titre" >𝓗𝓮𝓵𝓵𝓸..! <br> 𝓙𝓮 𝓶'𝓪𝓹𝓹𝓮𝓵𝓵𝓮 𝓛𝓪𝓶𝓲𝓷𝓮  </h1>
                <p class="description"><i class="quote orange left icon"></i>Je suis un Developpeur Web <br>
                FULL STACK Front-End & Back-End <br> à Alger. <br>
                Bienvenue sur mon portfolio!  <i class="quote orange right icon"></i></p>
                <a href="{{route('contact.create')}}">Contactez moi</a>

            </div><!-- end class hello_area -->
        </div><!-- end row class -->
        <img style="margin-top:625px; margin-left:150px; width:60px;height:60px;" src="{{ asset('storage/images/button_down.png') }}" alt="">

        <div class="button top" >
           <a href="#accueil" > <i class="fas fa-angle-double-up fa-2x" id="button_top"></i></a>
           
        </div>
        

        
    </div><!-- end class accueil -->

    <section class="section_propos" id="propos">
        <h1 class="titre" data-aos="fade-left">A propos</h1 >
        <hr data-aos="fade-left" data-aos-delay="300">
            
            <div class="propos">
                <div class="my_photo" data-aos="fade-right" data-aos-duration="3000">
                    <img src="storage/images/IMG_0571.png" alt="">
                </div>
                <div class="details" data-aos="fade-left" data-aos-duration="3000">
                    <p class="tete">
                    jeune développeur web dynamique et motivé,  passionné  d'informatique et de nouvelles technologies   
                    </p>
                    <p class="description">
                    
                        Je m'appelle GACI mohamed lamine, Algerien habite a alger <br/>
                        spécialisée dans la création et la refonte de sites web et apllication web<br/>
                        Je travaille avec :<br/>
                        
                    </p>
            
                <p class="competence">HTML/CSS | Bootstrap | Semantic UI | Javascipt | PHP | Laravel | Mysql</p>

                
                <marquee behavior="" direction="left" height="80" width="500">  𝓭é𝓿𝓮𝓵𝓸𝓹𝓹𝓮𝓾𝓻 𝔀𝓮𝓫 𝓲𝓷𝓭é𝓹𝓮𝓷𝓭𝓪𝓷𝓽</marquee>
                </div>
            </div>
    </section><!-- end section_propos -->



    <section class="section_services" id="services">
                
                <h1 class="titre" data-aos="zoom-in">Services</h1>
                <hr data-aos="zoom-in" data-aos-delay="150">
           
            <div class=" container">
       
                <div class="services">
                   
                    <div class="svs_item" data-aos="fade-up">
                        
                            <div class="service">
                                <i class="edit big icon"></i>
                                <h3>Conception graphique</h3>
                                    <p>Création de logo, maquettes design de tous supports web (prototypage)
                                        est créée sur mesure pour répondre aux besoins de votre cible.</p>
                                   
                            </div>
                        
                    </div>
                    <div class="svs_item" data-aos="fade-up" data-aos-delay="150">
                        
                            <div class="service">
                                <i class="code big icon" ></i>
                                <h3>Développement web</h3>
                                    <p>développer tous types de sites internet :
                                         site vitrine, site catalogue, site e-commerce, 
                                         responsive site web sur mesure .</p>

                            </div>
                        
                    </div>

                   
                    <div class="svs_item" data-aos="fade-up" data-aos-delay="300">
                        
                            <div class="service">
                                <i class="mobile alternate big icon"></i>
                                <h3>RESPONSIVE DESIGN</h3>
                                <p>Compatible tous supports, tablette & application mobile.</p>

                            </div>
                        
                    </div>
                    
                    <div class="svs_item" data-aos="fade-up">
                        
                            <div class="service">
                                <i class="images outline big icon"></i>
                                <h3>INTÉGRATION WEB</h3>
                                <p>Des intégrations HTML / CSS
                                respectueuses des standards du Web.</p>

                            </div>
                        
                    </div>
                    <div class="svs_item" data-aos="fade-up" data-aos-delay="150">
                        
                            <div class="service">
                                <i class="code big icon"></i>
                                <h3>DÉVELOPPEMENTS SPÉCIFIQUES</h3>
                                <p>Des outils adaptés à votre coeur de métier,
                                applications & solutions personnalisées.</p>

                            </div>
                        
                    </div>
                    <div class="svs_item" data-aos="fade-up" data-aos-delay="300">
                        
                            <div class="service">
                                <i class="database big icon"></i>
                                <h3>GESTION DE BASE DONNEE</h3>
                                <p>créer et administrer des bases de données relationnelles.</p>

                            </div>
                        
                    </div>
                </div>
        

            </div><!-- end container -->
    </section><!-- end section_services -->

   
    
    <section class="section_project" id="projects">
            <h1 class="titre" data-aos="fade-right"  >Portfolio</h1>
            <hr data-aos="fade-right" data-aos-delay="300">

       
                 
                <div class="projets">
                    
                    
                    @foreach($portfolios as $portfolio)
                    <div class="item" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-duration="1000">
                          <div class="face1">
                           <img src="/uploads/{{ $portfolio->image }}" alt="mkch">
                         </div>
                         <div class="face2">
                             <h3>{{$portfolio->type}}</h3>
                             <p>{{$portfolio->description}}</p>
                             </div>
                         </div>  
                    @endforeach
                  

                </div>
              
               <form action="" method="POST">
                        <button class="ui orange button">Voir Plus ...</button>
                </form> 
                            
           

    </section><!-- end section_project -->
    

    <footer>
        
        <div class="ui container">
            <div class="footer_content">
                <div class="left">
                    <h3>Je mets en service</h3>
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
                    
                   <h3>Freelancer</h3>
                   <ul>
                      <a href="{{ route('contact.create') }}"> <li>Me contact</li></a>
                       <a href="{{ route('blog.posts.index') }}"><li>Blog</li></a>
                   </ul>
                </div>
                <div class="right">
                    <h3>Me contactez</h3>
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
        
    </footer><!-- end footer -->

     

</div>

<script>


const navSlid = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.navbar');
    const navLinks = document.querySelectorAll('.navbar li');
    const navbar = document.getElementById('nav');
   

    burger.addEventListener('click', () => {
            //toggle
            nav.classList.toggle("nav-active");
            navbar.style.background = '#333';
            
            //animate line
            navLinks.forEach((link, index)=>{
                if(link.style.animation){
                    link.style.animation = '';
                } else {
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;

                }
            }); 
            //burger animat
            burger.classList.toggle('toggle');
           
    });  
     
     
}

navSlid();

    var nav = document.getElementById('nav');
    var button_top = document.getElementById('button_top');
   
   
   

    window.onscroll = function(){
        if(window.pageYOffset > 50) {
            nav.style.background = 'rgba(0, 0, 0, 0.3)';
            nav.style.boxShadow = '0px 0px 32px 1px rgba(255, 255, 255)';
            //nav.style.height = "6vh";
            //document.getElementById('logo').style.width = '60%'
            button_top.style.color = '#53b4e5';
            button_top.style.border = "1px solid #53b4e5";
            button_top.style.borderRadius = "50%";
           
            
           
        }else {
            nav.style.background = "transparent";
            nav.style.boxShadow = '0px 10px 32px 18px rgba(255, 255, 255,0)';
            //nav.style.height = "8vh";
            //document.getElementById('logo').style.width = '100%'
            //document.getElementById('logo').style.transition = '0.5s'
            button_top.style.color = 'rgb(255,255,255,0)'; 
            button_top.style.border = "none";
           
            
        }
    }

</script> 
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
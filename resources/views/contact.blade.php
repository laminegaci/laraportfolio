<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mohamed Lamine | Developpeur web</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.11.2-web/css/all.css') }}"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/favicon.png') }}" />
    
    
    
    
    <link rel="stylesheet" href="{{ asset('css/dist/semantic.css') }}"/>
    <script src="{{ asset('css/dist/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('css/dist/semantic.min.js') }}"></script>
    <style>
    .alert {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    }

    .alert-danger {
    color: #761b18;
    background-color: #f9d6d5;
    border-color: #f7c6c5;
    }

    .alert-danger hr {
    border-top-color: #f4b0af;
    }

    .alert-danger .alert-link {
    color: #4c110f;
    }
    .alert-success {
  color: #1d643b;
  background-color: #d7f3e3;
  border-color: #c7eed8;
}

.alert-success hr {
  border-top-color: #b3e8ca;
}

.alert-success .alert-link {
  color: #123c24;
}
    </style>
</head>
<body>

<nav id="nav">
<div class="logo">
        <a href="{{route('portfolio')}}"> <img class="" src="{{ asset('storage/images/logo.png') }}" alt="sdsd" id="logo"></a>
    </div>
    <ul class="navbar">
        <li><a href="#propos" class="link"></a></li>
        <li><a href="#services" class="link"></a></li>
        <li> <a href="#projects" class="link"></a></li>
        <li><a href="{{ route('blog.posts.index') }}" class="link">Blog</a></li>
        <li><a href="{{route('contact.create')}}" class="link">Contact</a></li>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav><!-- end nav -->
<section class="section_contact" id="contact">
        <h1 class="titre"></h1>
        
            <div class="ui container">
                
                <div class="contacts">
                   
                        <div class="left">
                                <p>
                                Si vous êtes intéressé à travailler ensemble, remplissez le formulaire ci-dessous et 
                                décrivez votre projet. Je vous répondrai dès que possible.<br> s'il vous plaît, attendez 
                                quelques jours pour que je réponde
                                </p>

                                @include('errors')
                        </div>
                        
                        <div class="right" data-aos="fade-up" data-aos-delay="300">
                       
                            <div class="form-control">
                                <form method="POST" action=" {{route('contact.store')}} " class="form">
                                        @csrf
                                        <div class="field" >
                                            <input class="field-input" type="text" name="nom" placeholder="Nom">
                                        </div>
                                        <div class="field" >
                                            <input class="field-input" type="text" name="prenom" placeholder="prenom">
                                        </div>
                                        <div class="field" >
                                            <input class="field-input" type="text" name="email" placeholder="e-mail">
                                        </div>
                                        <div class="field" >
                                        <textarea class="field-input message" row="6" placeholder="Message" name="contenu"></textarea>
                                        </div>
                                        <input type="submit" value="Envoyer" class="btn envoyer">
                                   
                                </form>
                               
                                 
                            </div>
                        <!-- <marquee behavior="" direction="down" height="100" width="200" bgcolor="white">  Scrolling text</marquee> -->
                        </div>
                       
                   

                   
                   
                </div>
        

        </div><!-- end container -->
    </section><!-- end section_contact -->

    <footer>
        <div class="ui container">
            <div class="footer_content">
                <div class="left">
                    <!-- <img src="images/logo3.png" alt="mkch"> -->
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
                       <li>Contact</li>
                       <li>Blog</li>
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
            //document.getElementById('logo').style.width = '40%'
            button_top.style.color = '#53b4e5';
            button_top.style.border = "1px solid #53b4e5";
            button_top.style.borderRadius = "50%";
           
            
           
        }else {
            nav.style.background = "transparent";
            nav.style.boxShadow = '0px 10px 32px 18px rgba(255, 255, 255,0)';
            //nav.style.height = "8vh";
            //document.getElementById('logo').style.width = '50%'
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
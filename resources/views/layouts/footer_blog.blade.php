

<script>



const navSlid = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.navbarr');
    const navLinks = document.querySelectorAll('.navbarr li');
    const navbar = document.getElementById('navig');
   

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

    var nav = document.getElementById('navig');
    var button_top = document.getElementById('button_top');
   
   
   

    window.onscroll = function(){
        if(window.pageYOffset > 50) {
            nav.style.background = '#eee';
            //nav.style.boxShadow = '0px 0px 32px 1px rgba(255, 255, 255)';
            nav.style.height = "6vh";
            document.getElementById('logo').style.width = '40%'
            //button_top.style.color = '#53b4e5';
            //button_top.style.border = "1px solid #53b4e5";
            //button_top.style.borderRadius = "50%";
           
            
           
        }else {
            nav.style.background = "transparent";
            nav.style.boxShadow = '0px 10px 32px 18px rgba(255, 255, 255,0)';
            nav.style.height = "8vh";
            document.getElementById('logo').style.width = '50%'
            document.getElementById('logo').style.transition = '0.5s'
            //button_top.style.color = 'rgb(255,255,255,0)'; 
            //button_top.style.border = "none";
           
            
        }
    }

</script>
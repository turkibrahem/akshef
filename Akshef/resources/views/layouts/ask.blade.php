<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="icon" href="img/logo.png" type="images/png" sizes="17x19">

    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--------
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/ajax.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootsrap.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    ---->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/ajax.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootsrap.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>


    <style>
    



 
 body {
      font-family:Droid Sans Arabic;
      line-height: 1.8;
      color: #818181;
      

      
  }

/*----------------------------------Top navbar----------------------------------------*/



  



/*---------------------------------------------------------------------image background----------------------------------------------------*/

  .img2 {

width: 100%; /* Set width to 100% */
margin: auto;
}





/*-------------------------------------------------------------estshr tabibk---------------------------------------------------------*/

    .line1 { background-color: #16a3b5;
            height: 2px;
            border-radius: 1px;

    }

#headline{ text-align: center;


}

#headline1{ text-align: center;

    
}


    .slideanim{ padding:0;
                margin: 0;

    }

    #comments{ padding: 0;
               margin-left:520px;
               width: 420px;
               height: 120px;
               border: 1px solid #898989;
               border-radius: 10px;

    }
    #mybtn {            


    }
    #followbtn{ width: 250px;
                background-color: #16a3b5;
                margin-left: 550px;
                height: 40px;
                font-size: 18px;


    }

    #hbtn{ width: 120px;



    }

@media (max-width:767px) {
  #pro1{ font-family: Droid Sans Arabic; font-size: 12px; margin-left: 190px;}
  #pro2{ font-family: Droid Sans Arabic; font-size: 12px; margin-left: 185px;}
  #pro3{ font-family: Droid Sans Arabic; font-size: 12px; margin-left: 40px;}
  #pro4{ font-family: Droid Sans Arabic; font-size: 12px;  margin-left: 55px;}

}

#uploud{ background-color: #febf01;     
         margin-left: 610px;
         border-radius: 10px;
         margin-top: 8px;
         font-weight: bold;}

#img{ text-align: center;

}


  #pro1{ font-family: Droid Sans Arabic; font-size: 14px; text-align: center; margin-left: 165px;}
  #pro2{ font-family: Droid Sans Arabic; font-size: 14px; text-align: center; margin-left: 160px;}
  #pro3{ font-family: Droid Sans Arabic; font-size: 14px; text-align: center;}
  #pro4{ font-family: Droid Sans Arabic; font-size: 14px;  text-align: center;}

/*----------------------------------------------------------buttons css-----------------------------------------------------------------*/


.btn-info{ width: 220px;
           height: 55px;
           background-color: rgba(4, 133, 150, 0.773);
           border-radius: 50px;
           border: 0px;
}




  




/*----------------------------------------------------------Topnavbar css-----------------------------------------------------------------*/

.input-group{ width: 210px;
              margin-right: 30px;
              color: #ebebeb;


  }

.carousel-caption { margin-bottom: 260px;

}

.text1{ font-size: 52px;
        margin-bottom: 20px;

}

.text2{ font-size: 35px; 
    
}

.text3{ font-size: 30px;
    
}


/*----------------------------------------------------------footer css-----------------------------------------------------------------*/


.footer-distributed{
	background-color: #16a3b5;
	box-shadow: 0 1px 1px 0 rgb(214, 214, 214);
	box-sizing: border-box;
  height: 10px;
	text-align: center;
	font: normal 11px sans-serif;
	font-weight: bold;
	font-family: Droid Sans Arabic;
	padding: 5px 50px 30px;
  margin: 0;
}

.footer-distributed .footer-left p{
	color:  #8f9296;
	font-size: 14px;
	margin: 0;
	font-family: Droid Sans Arabic;

}

/* Footer links */

.footer-distributed p.footer-links{
	font-size:12px;
	font-weight: bold;
	color:  #ffffff;
	margin: -2px 0 8px;
	padding: 0;
	float: right;
	font-family: Droid Sans Arabic;

}

.footer-distributed p.footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
	font-family: Droid Sans Arabic;

}

.footer-distributed .footer-left{
	float: left;
	margin-left: 12px;
	max-width: 180px;
	font-family: Droid Sans Arabic;

}

.footer-distributed .footer-left a{
	display: inline-block;
	width: 35px;
	height: 35px;
	background-color:  #ebebeb ;
	border-radius: 2px;
	font-family: Droid Sans Arabic;
	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;
	margin-left: 3px;
}


#services{ background-color: #ebebeb;
}


#lists{ height: 280px;
        background-color: #13394c;
        color: #ffffff;
        padding: 0;
        margin: 0;
        direction: rtl;
        text-align: right;

        


}


#lists1{ direction: rtl;
         text-align: right;
         color: #ebebeb;
         margin-top: 20px;
        
    

}


#lists1 li a{ color: #ebebeb;
              text-decoration: none;

}

#lists1 li a:hover{ color: #febf01;
              

}


#point { color: #febf01;
    list-style: none;
    direction: rtl;
    font-size: 18px;
    font-weight: bold;

}

h5{ font-size: 13px;
    font-weight: bold;
}

.slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }







/*----------------------------------------------------------------social media icons css-------------------------------------------------------------------*/


.c-icon {
    width:  30px;
    height: 30px;
    fill: currentColor;
    transition: .2s;
    text-align: center;
    margin-top: 8px;
}

.c-link--facebook:hover  { color: #3b5998 }
.c-link--twitter:hover   { color: #55acee }
.c-link--google:hover    { color: #dd4b39 }
.c-link--pinterest:hover { color: #bd081c }
.c-link--instagram:hover { color: #833ab4 }
.c-link--facebook:hover::after  { background: #3b5998 }
.c-link--twitter:hover::after   { background: #55acee }
.c-link--google:hover::after    { background: #dd4b39 }
.c-link--pinterest:hover::after { background: #bd081c }
.c-link--instagram:hover::after { background: #833ab4 }

.c-link {  
    position: relative;
    color: #bbb;
    right: 1px;
}

.c-link:not(:last-of-type) {
    margin-right: -100px;
}



.c-tooltip::before,
.c-tooltip::after {
    display: block;
    position: absolute;
    left: 50%;
    transform: translate(-50%, -10px);
    opacity: 0;
    transition: .2s;
}

.c-tooltip::before {
    content: '';
    bottom: calc(100% + 2px);
    border: solid 5px transparent;
    border-top-color: currentColor;
}

.c-tooltip::after {
    content: attr(aria-label);
    bottom: calc(100% + 12px);
    padding: .61em .93em;
    font-size: .875rem;
    color: white;
    border-radius: 3px;
}

.c-tooltip:hover::before,
.c-tooltip:hover::after {
    opacity: 1;
    transform: translate(-50%);
}

.pens-link-container {
    flex-basis: 100%;
    font-size: .9rem;
    text-align: center;
}

.pens-link {
    margin-bottom: 0;
    background: white;
    box-shadow: 0 4px 18px rgba(0, 0, 0, .1);
    border: none;
}

#circle{ height: 45px;
         background-color: #ebebeb;
         text-align: center;
         margin: 0;
         padding: 0;
}



/*----------------------------------------------------------copyright---------------------------------------------------------------------*/

.copy{ margin-top: 5px;
  color: rgb(53, 53, 53);;
  font-size: 12px;
    
}






/*----------------------------------------------------------Media Query---------------------------------------------------------------------*/

@media screen and (max-width: 480px) {


#lists{ height: 850px;
        background-color: #13394c;
        color: #ffffff;
        padding: 0;
        margin: 0;
        direction: rtl;
        text-align: center;
        list-style: none;

        


}
#lists1{ direction: rtl;
         text-align: right;
         color: #ebebeb;
         margin-top: 20px;
         list-style: none;
         

         
         

}


.carousel-caption { margin-bottom: 2px;
                    font-size: 10px;

}

.text1{ font-size: 15px;

}

.text2{ font-size: 12px;
    
}

.text3{ font-size: 15px;
    
}

.btn-info{ width: 120px;
           height: 30px;
           background-color: rgba(4, 133, 150, 0.773);
           border-radius: 20px;
           border: 0px;
}



 }




@media screen and (max-width: 768px) {

.carousel-caption { margin-bottom: 20px;

}

.text1{ font-size: 22px;
        margin-bottom: 20px;

}

.text2{ font-size: 15px; 
    
}

.text3{ font-size: 10px;
    
}

.btn-info{ width: 100px;
           height: 30px;
           background-color: rgba(4, 133, 150, 0.773);
           border-radius: 20px;
           border: 0px;
}
#lists{ height: 1000px;
        background-color: #13394c;
        color: #ffffff;
        padding: 0;
        margin:0 ;
        direction: rtl;
        text-align: center;
     

        


}

#lists1{ margin-top: 20px;
         text-align: center;
         color: #ebebeb;

         
         

}

#lists , ul { list-style: none;
              
      


}

#lists ,#lists1 , ul , li{ font-size: 19px;
              
      


            }

#section{ 
          padding: 0;
          margin: 0;
          direction: rtl;
          text-align: center;
}

.form-control{ width: 80px; 
               top: 12px;
               right: 108px;
               border:1px solid #ebebeb;
               border-radius: 25px;
               border-right: none;
               background-color: rgba(0, 0, 0, 0.1);
               direction: rtl;
               font-size: 12px;
               position: relative;
               color: #ebebeb;}

.btn-danger{ top: 4px;
             padding: 0;
             width: 110px;
             height: 34px;
             display: inline;
             direction: rtl;
             position: absolute;
             right: -1px;
             background-color: rgba(0, 0, 0, .1);             
             border:1px solid #ebebeb;
             border-radius: 0px 20px 20px 0px;
             border-left: none;
}


.btn-success{ 
              margin-top: 8px;
              border-radius: 15px;
              background-color: rgba(7, 76, 92, 0.64);
              border: 1px solid #ebebeb;
              height: 35px;
              position:relative;
              right: -10px;


  }


 .btn-primary{ right: 1px;
                top: 1px;
                padding-top: 8 px;
                background-color:rgba(0, 185, 226, 0.64);
                border: 1px   solid #ebebeb;
                border-radius: 15px;
                width: 100px;
                position: relative;



  }

.navbar-right{ margin-right: 40px;
               margin-top: 9px;
               color: #ebebeb;
               font-weight: bold;
               


}

.c-link {  
    position: relative;
    color: #bbb;
    right: -2px;
}

.c-link:not(:last-of-type) {
    margin-right: -100px;
}

    #comments{ padding: 0;
               margin-left:200px;
               width: 280px;
               height: 120px;
               border: 1px solid #898989;
               border-radius: 10px;
              

    }

  #pro1{ font-family: Droid Sans Arabic; font-size: 11px; text-align: center; margin-left: 165px;}
  #pro2{ font-family: Droid Sans Arabic; font-size: 11px; text-align: center; margin-left: 160px;}
  #pro3{ font-family: Droid Sans Arabic; font-size: 11px; text-align: center;}
  #pro4{ font-family: Droid Sans Arabic; font-size: 11px;  text-align: center;}


#uploud{ background-color: #febf01;     
         margin-left: 170px;
         border-radius: 10px;
         margin-top: 10px;
         font-weight: bold;}


    #followbtn{ width: 250px;
                background-color: #16a3b5;
                margin-left: 110px;
                height: 40px;
                font-size: 18px;
                margin-bottom: 50px;


    }

  }




.container-fluid{ padding: 0;
      margin: 0;

}

 .container {
      font-family: Droid Sans Arabic;
      padding: 0;
      margin: 0;

  }




</style>
</head>
<body>
@include('style.navbarstyle')
    
                @include('inc.nav')
                
  <header>
@yield('content')
</header>
<footer>
@include('inc.footer')

</footer>

<script>
        $(document).ready(function(){
          // Add smooth scrolling to all links in navbar + footer link
          $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();
        
              // Store hash
              var hash = this.hash;
        
              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 900, function(){
           
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
          
          $(window).scroll(function() {
            $(".slideanim").each(function(){
              var pos = $(this).offset().top;
        
              var winTop = $(window).scrollTop();
                if (pos < winTop + 1000) {
                  $(this).addClass("slide");
                }
            });
          });
        })
        </script>
                <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>




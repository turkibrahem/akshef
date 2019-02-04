<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="icon" href="img/logo.png" type="images/png" sizes="17x19">

    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
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


   .navbar {
      font-family: Droid Sans Arabic;
      background-color: rgba(0, 147, 167, 0.704);
      font-size: 14px !important;
      font-weight: bold;
      border: 0px;
      
      
      


  }



.navbar li a{ opacity: 1;


}
  .navbar li a, .navbar .navbar-brand { 
    color: #ffffff !important;
    
  }
  .navbar-nav li a:hover {
      color: #febf01 !important;

  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }

.form-control{ width: 80px; 
               height: 40px;
               top: 16px;
               border:1px solid #ebebeb;
               border-radius: 25px;
               border-right: none;
               background-color: rgba(0, 0, 0, 0.1);
               direction: rtl;
               font-size: 12px;
               position: relative;
               color: #ebebeb;}



.input-group{ width: 160px;
              margin-right: 52px;
              color: #ebebeb;


  }


.navbar ul { margin-bottom: 15px;
             margin-left: 90px;

}

.navbar ul li a{ 

}



#text{ width: 150px;

}

#text:hover{ background-color: #febf01;
             text-decoration: none;
     

}

.navbar li a #logo:hover{text-decoration: none;

}

.navbar li {text-decoration: none;
             margin-right: -20px;
             padding-right: 10px;
}


#logo{ 
       padding: 0;
       border: 0;


}





#logo1{
       width: 65px;
       height: 52px !important;
       margin-right: 70px !important;
       border: 0;
       cursor: pointer;


}




/*---------------------------------------------------------------------image background----------------------------------------------------*/

  .img2 {

width: 100%; /* Set width to 100% */
margin: auto;
}





/*-------------------------------------------------------------healthy information css---------------------------------------------------------*/



.card{ border: 1px solid #16a3b5;
       border-radius: 10px;

}

.card-body{ margin-right: 5px;
            text-align: center;



}


h3{ text-align: center;


}

h5{ font-weight: bold;


}

h6{ line-height: 20px;


}



.btn-outline-dark{ background-color: #16a3b5;
                   height: 30px ;
                   margin-bottom: 5px;
                   color: #ebebeb;
                   margin-right: 20px;
                   font-weight: bold;


}

.card-img-top{ border-radius: 9px 9px 0px 0px;


}

.col-sm-3{              margin-bottom: 10px;
}
.col-sm-4{              margin-bottom: 10px;
}
.col-sm-4{              margin-bottom: 10px;
}


#boxbtn{ width: 155px;
         margin-left: 30px;


}


/*----------------------------------------------------------buttons css-----------------------------------------------------------------*/


.btn-info{ width: 220px;
           height: 55px;
           background-color: rgba(4, 133, 150, 0.773);
           border-radius: 50px;
           border: 0px;
           outline: none !important;
}




.btn-danger{ margin-top: 16px;
             padding: 0;
             width: 40px;
             height: 40px;
             display: inline;
             direction: rtl;
             position: absolute;
             right: -40px;
             background-color: rgba(0, 0, 0, .1);             
             border:1px solid #ebebeb;
             border-radius: 0px 20px 20px 0px;
             border-left: none;
             outline: none !;

}

.btn-danger:hover{ margin-top: 16px;
             padding: 0;
             width: 40px;
             height: 40px;
             display: inline;
             direction: rtl;
             position: absolute;
             right: -40px;
             background-color: #febf01;             
             border:1px solid #ebebeb;
             border-radius: 0px 20px 20px 0px;
             border-left: none;
             outline: none !;

}


.glyphicon-search{ float: right;
                   margin-right: 10px;
                   margin-bottom: 4px;

}

.btn-success{ margin-right: 5px;
              margin-top: 6px;
              border-radius: 15px;
              background-color: rgba(7, 76, 92, 0.64);
              border: 1px solid #ebebeb;
              height: 35px;
              position:relative;
              right: 2px;


  }
  
  .btn-success:hover{
              background-color: #febf01;
              border: 1px solid #ebebeb;


  }

  .btn-primary{ right: 6px;
                top: 2px;
                padding-top: 8 px;
                background-color:rgba(0, 185, 226, 0.64);
                border: 1px   solid #ebebeb;
                border-radius: 15px;
                width: auto;
                position: relative;



  }

#button{ 
         font-size: 15px;

}





/*----------------------------------------------------------Topnavbar css-----------------------------------------------------------------*/



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



.copy:hover{ 
  color: #febf01;
  font-size: 14px;
  cursor: pointer;

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


.nav{ margin-right:0px;


}


   .navbar {
      font-family: Droid Sans Arabic;
      background-color: rgba(0, 147, 167, 0.704);
      font-size: 14px !important;
      font-weight: bold;
      border: 0px;
      width:auto;
      margin-top: -10px;
      padding-top: -10px;
      text-align: center;
      height: auto;
      
      
      


  }

.navbar li a{ opacity: 1;


}
  .navbar li a, .navbar .navbar-brand {       text-align: center;

    color: #ffffff !important;
    
  }
  .navbar-nav li a:hover {      text-align: center;

      color: #febf01 !important;

  }
  .navbar-nav li.active a {      text-align: center;

      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {      text-align: center;

      border-color: transparent;
  }

.form-control{ width: 80px; 
               height: 40px;
               top: 2px;
               text-align: center;
               border:1px solid #ebebeb;
               border-radius: 25px;
               border-right: none;
               background-color: rgba(0, 0, 0, 0.1);
               direction: rtl;
               font-size: 12px;
               position: relative;
               color: #ebebeb;
               margin-left: 45px;
}



.input-group{ width: 170px;
              color: #ebebeb;
              text-align: center;
              



  }



#logo1{right: -40px;
       top: 10px;
       width: 70px;
       height: 90px;
       background-color: 0;
       position: relative;
       padding-bottom: 2px;


}


#text{ width: 150px;

}

#text:hover{ background-color: #febf01;
             text-decoration: none;
     

}

.navbar li a :hover{text-decoration: none;

}



.navbar ul li { margin-right: 180px;
                margin-bottom: 10px;
                font-size: 14px;


}

.navbar-toggle{ margin-top: 15px;


}



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



/*----------------------------------------------------------buttons css-----------------------------------------------------------------*/


.btn-info{ width: 220px;
           height: 55px;
           background-color: rgba(4, 133, 150, 0.773);
           border-radius: 50px;
           border: 0px;
           outline: none !important;
           margin-right: 10px;
}




.btn-danger{ margin-top: 2px;
             padding: 0;
             width: 40px;
             height: 40px;
             display: inline;
             direction: rtl;
             position: absolute;
             right: -85px;
             background-color: rgba(0, 0, 0, .1);             
             border:1px solid #ebebeb;
             border-radius: 0px 20px 20px 0px;
             border-left: none;
             outline: none !;

}

.btn-danger:hover{ margin-top: 2px;
             padding: 0;
             width: 40px;
             height: 40px;
             display: inline;
             direction: rtl;
             position: absolute;
             right: -85px;
             background-color: #febf01;             
             border:1px solid #ebebeb;
             border-radius: 0px 20px 20px 0px;
             border-left: none;
             outline: none !;

}



.glyphicon-search{ float: right;
                   margin-right: 10px;
                   margin-bottom: 4px;

}


.btn-success{ margin-right: 5px;
              margin-top: 15px;
              border-radius: 15px;
              background-color: rgba(7, 76, 92, 0.64);
              border: 1px solid #ebebeb;
              height: 35px;
              position:relative;
              right: -10px;
  }






  .btn-primary{ 
                top: 5px;
                padding-top: 8 px;
                background-color:rgba(0, 185, 226, 0.64);
                border: 1px   solid #ebebeb;
                border-radius: 15px;
                width: auto;
                position: relative;
                right: -10px;



  }



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
         margin-left: 60px;

         
         

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



.c-link {  
    position: relative;
    color: #bbb;
    right: -2px;
}

.c-link:not(:last-of-type) {
    margin-right: -100px;
}

.card{ margin-left: 100px;


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




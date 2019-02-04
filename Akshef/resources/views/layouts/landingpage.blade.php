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
    @include('style.navbarstyle')
    @include('style.home')
   @include('style.footer')
</head>
<body>
@include('inc.nav')
@yield('content')
<footer>
@include('inc.footer')
</footer>

  <!--------------------------------------------------------------section display scripts------------------------------------------------------------------->

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
                if (pos < winTop + 800) {
                  $(this).addClass("slide");
                }
            });
          });


/*------------------------------------------------------------------------------------------------------------------*/



/*-------------------------------------------------------------icon hover 0-------------------------------------------*/


        $("#i0").hover(function (){
            //this.animate({'src' : ''} , 500);
            //$("image1").css('','');
            $("#i0").attr('src' , 'img/list1.png');

        });
        $("#i0").mouseout(function (){
            //this.animate({'src' : ''} , 500);
            //$("image1").css('','');
            $("#i0").attr('src' , 'img/list.png');

        });

/*-------------------------------------------------------------icon hover 1-------------------------------------------*/


        $("#i1").hover(function (){
            //this.animate({'src' : ''} , 500);
            //$("image1").css('','');
            $("#i1").attr('src' , 'img/body.png');

        });
        $("#i1").mouseout(function (){
            //this.animate({'src' : ''} , 500);
            //$("image1").css('','');
            $("#i1").attr('src' , 'img/bodyhov.png');

        });


/*-------------------------------------------------------------icon hover 2-------------------------------------------*/


$("#i2").hover(function (){
    //this.animate({'src' : ''} , 500);
    //$("image1").css('','');
    $("#i2").attr('src' , 'img/true1.png');

});
$("#i2").mouseout(function (){
    //this.animate({'src' : ''} , 500);
    //$("image1").css('','');
    $("#i2").attr('src' , 'img/true.png');

});

/*-------------------------------------------------------------icon hover 3-------------------------------------------*/


$("#i3").hover(function (){
    //this.animate({'src' : ''} , 500);
    //$("image1").css('','');
    $("#i3").attr('src' , 'img/treat1.png');

});
$("#i3").mouseout(function (){
    //this.animate({'src' : ''} , 500);
    //$("image1").css('','');
    $("#i3").attr('src' , 'img/treat.png');

});

/*-------------------------------------------------------------icon hover 4-------------------------------------------*/


$("#i4").hover(function (){
    //this.animate({'src' : ''} , 500);
    //$("image1").css('','');
    $("#i4").attr('src' , 'img/bt1.png');

});
$("#i4").mouseout(function (){
    //this.animate({'src' : ''} , 500);
    //$("image1").css('','');
    $("#i4").attr('src' , 'img/bt.png');

});


/*-------------------------------------------------------------icon hover 5-------------------------------------------*/


$("#i5").hover(function (){
    //this.animate({'src' : ''} , 500);
    //$("image1").css('','');
    $("#i5").attr('src' , 'img/heart1.png');

});

$("#i5").mouseout(function (){
    //this.animate({'src' : ''} , 500);
    //$("image1").css('','');
    $("#i5").attr('src' , 'img/heart.png');

});



        })
        </script>

        
        <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>




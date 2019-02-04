<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="icon" href="img/logo.png" type="images/png" sizes="17x19">
<title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/ajax.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootsrap.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
   @include('style.navbarstyle')
   @include('style.footer')
</head>
<body>
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


</body>

</html>


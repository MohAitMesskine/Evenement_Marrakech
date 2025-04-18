<!DOCTYPE html>
<html lang="en">
   <head>

@include('home.css')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

       </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
      @include('home.header')

      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      @include('home.slider')

      <!-- end banner -->
      <!-- about -->
      @include('home.about')

      <!-- end about -->
      @include('home.event')

      @include('home.gallary')

      @include('home.blog')
      @include('home.contact')
      @include('home.footer')
      <!-- Javascript files-->
      

<script>
   $(window).on("scroll", function () {
  sessionStorage.scrollTop = $(this).scrollTop(); 
});

$(document).ready(function () {
  if (sessionStorage.scrollTop !== undefined) { 
    $(window).scrollTop(sessionStorage.scrollTop); 
  }
});

</script>
   </body>
</html>
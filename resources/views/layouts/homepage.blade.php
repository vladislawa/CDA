<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Google Analytics -->
        <!-- Facebook Pixel -->
        <?php echo File::get("facebook.js"); ?>
        <?php echo File::get("google.js"); ?>
        
        <meta name="robots" content="noindex">

        <!-- Customizable Description and Title -->
        <meta name="description" content= "{{ $desc }}"/>
        <title>{{ $title }}</title>

        @if($index)
          <meta name="robots" content="noindex">
        @endif


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">


    </head>

    <body>
      @include('parts.navbar')
      @yield('head')
      @yield('content')
  
      <footer id="footer">
  
      <div class="row">
          <div class="col-md-7 col-lg-8">
            <p class="text-center text-md-left">©2013-2016 BeMo Academic Consulting Inc. All rights reserved.
              <a href="#">Disclaimer & Privacy Policy</a>
              <a href="{{ url('contact')}}">Contact Us</a>
            </p>
          </div>
         
          <div class="col-md-5 col-lg-4 ml-lg-0">
            <div class="text-center text-md-right">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a class="pr-2">
                    <i class="fab fa-facebook-f fa-lg"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="pr-5">
                  <i class="fab fa-twitter fa-lg"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
      </div>
    </footer>

    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script> 
            $(document).ready(function(){ 
                $(window).scroll(function(){ 
                  $('.nav-bar').toggleClass('scroll', $(window).scrollTop() > $('.nav-bar').height());
                }) 
                

            }) 
    </script> 
    <script src="backend/plugins/simplemde/simplemde.min.js"></script>
    </body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Donation') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="icon" href="{{asset('image/icon.jpg')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light headercontent shadow-sm" style="margin:0">
            <div class="container">
                <a href="{{ url('/') }}"><img src="image/muhahecharityLog.png" alt="" srcset="" class="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                           <li class="nav-item ">
                                <a class="nav-link text-white font" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white font" href="#">AboutUs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white font" href="#">contactUs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white font" href="/donate">Donations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white font" href="#">Shop</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
    <!-- footer section -->
    <footer class="footer-section footerDiv" style="margin-top:25px">
        <div class="container">
          <div class="row" style="margin-top:25px">
               <div class="col-sm-3" style="margin-top:40px">
                  <h4>Social link</h4>
                    <ul>
                       <li><a href="https://web.facebook.com/Muhahecharity-111282497709109"><i class="fa fa-facebook"></i>  facebook</a></li>
                       <li><a href="#"><i class="fa fa-twitter"></i>  Twitter</a></li>
                       <li><a href="https://www.linkedin.com/in/muhahe-charity-4939a4209/"><i class="fa fa-linked-plus"></i>  linked In</a></li>
                       <li><a href="#"><i class="fa fa-instagram"></i>  instagram</a></li>
                       <li><a href="https://www.youtube.com/channel/UCbsvpe6iJUORWAihhWHVB3A"><i class="fa fa-youtube-play"></i>  Youtube</a></li>
                    </ul>                    
               </div>
               <div class="col-sm-3" style="margin-top:40px">
                    <h4>Contact Us</h4>
                    <ul>
                        <li>contact:+250786080119</li>
                        <li>email : charitymuhahe@gmail.com</li>
                        <li>address  kigali Nyarugenge  Rwanda </li>
                    </ul>
               </div>
               <div class="col-sm-3">
                    <div class="ft-newslatter" style="margin-top:40px">
                        <h4>New latest</h4>
                        <p>Get the latest updates and offers.</p>
                        <form action="#" class="fn-form">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
               </div>
               <div class="col-sm-3" style="margin-top:40px">
               <ul>
                    <li><a href="#">contact us</a></li>
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
               </div>
          </div>
        </div>
    </footer>
    <!-- Footer Section End -->

      <!-- Js Plugins -->
    
      <script>
$('.amount-selected').on("keyUp", function() { alert('');
    //my input text has changed
});</script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/booststrap.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/mainj.js"></script>
    <script src="js/jquerry.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/mainn.js"></script>
    <script src="js/donation.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>

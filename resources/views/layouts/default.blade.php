<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
   @include('includes.head')
</head>

<body class="config">
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/preloader.png" alt=""></div>
    </div>

      <!--====== Main App ======-->
    <div id="app">
         
             <!--====== Main Header ======-->
          <header class="header--style-1">
              @include('includes.header')
          </header>
             <!--====== End - Main Header ======-->
             
           <div class="app-content"> 
                @yield('content')
           </div>
            <!--====== Main Footer ======-->
        <footer>
              @include('includes.footer')
        </footer>
             <!--====== END Main Footer ======-->

    </div>
     <!--====== End - Main App ======-->

      <!--====== Vendor Js ======-->
    <script src="{{asset ('js/vendor.js')}}"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="{{asset('js/jquery.shopnav.js') }}"></script>

    <!--====== App ======-->
    <script src="{{asset ('js/app.js')}}"></script>
 
</body>

</html>
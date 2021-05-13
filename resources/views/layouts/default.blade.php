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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!--====== App ======-->
    <script src="{{asset ('js/ludus.js')}}"></script>
 
</body>

</html>
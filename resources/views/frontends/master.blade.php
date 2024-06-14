@php
   $socials = App\Models\Social::orderBy('id','DESC')->get();
   $config  = App\Models\Settings::where('id','1')->first();
@endphp
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>photography</title>
      <!-- FAVICON LINK -->
      <link rel="shortcut icon" href="{{ asset($config->web_fevicon) }}" type="image/x-icon">
      <!--====================================================== STYLESHEETS ======================================================-->
      @include('frontends.inc.styles')

   </head>
   <body data-spy="scroll" data-target="#navbarSupportedContent" data-offset="100">
      <div id="return-to-top">
         <i class="fa fa-angle-up"></i>
      </div>
      <!--======================================================= NAVIGATION START =================================================-->
      @include('frontends.inc.header')
      <!--================================================================ NAVIGATION END ===============================================================-->
      
      @yield('front_contents')
      
      <!--====================================================== FOOTER AREA START ======================================================-->
      @include('frontends.inc.footer')
      
      <!--====================================================== FOOTER AREA START ======================================================-->
      @include('frontends.inc.scripts')
   </body>
</html>
<!DOCTYPE html>
<html>
 <head>
      <title>Customer Dashboard</title>
      @include('frontpanel.head')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
           @include('frontpanel.header')
           <div class="content-wrapper">
              @yield('content')
            </div>
        </div>
      </div>
       <!--  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
       <script src="{{ asset('public/js/ajax.js') }}"></script>
        <script src="{{ asset('public/js/jquery.min.js')}}" ></script>
<script src="{{ asset('public/js/modernizr.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/js/script.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/js/wow.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/js/slick.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/js/parallax.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/js/select-chosen.js')}}" type="text/javascript"></script>
</body>
</html>
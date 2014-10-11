<!doctype html>
<html class="no-js">

  <head>
    <meta charset="utf-8">
    <title>Laravel Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css">
    <link rel="stylesheet" href="{{ cdn("/assets/styles/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ cdn("/assets/styles/main.css") }}">

    <script>
        Config = {
            'cdnDomain': '{{ getCdnDomain() }}',
            'user_id': {{ $currentUser ? $currentUser->id : 0 }},
            'routes': {
            },
            'token': '{{ csrf_token() }}',
        };
    </script>

    @yield('styles')

  </head>

  <body>
    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="container main">

        @include('layouts.partials.topnav')

        @include('flash::message')

        <div class="content">

            @yield('content')
        </div>


      <div class="footer">
        <p>
            <span class="glyphicon glyphicon-heart"></span> from The EST Group
            <span class="pull-right"><a href="{{ route('about') }}" style="color:#777">about</a></span>
        </p>

      </div>

    </div>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js"></script>

    <script src="{{ cdn("/assets/scripts/main.js") }}"></script>

    @yield('scripts')

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="/images/icons/building-2.png"/>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body class="sans-serif">
    <main>
      <header>
        <nav class="flex justify-between bb b--white-10 bg-navy o-70">
          <a class="link white-70 no-underline flex items-center pa2" href="/">
            <img src="/images/icons/building-1.png" class="bg-white-80  hover-bg-white pa1" title="Home">
          </a>
          <div class="flex-grow pa3 flex items-center">
          @if (Route::has('login'))
            @auth
              <a class="f6 link dib white mr3 mr4-ns hover-gold" href="{{ url('/home') }}">Home</a>
            @else
              <a class="f6 link dib white mr3 mr4-ns hover-gold" href="{{ route('login') }}">Sign In</a>
              <a class="f6 dib white bg-animate hover-bg-white hover-black no-underline pv2 ph4 br-pill ba b--white-20" href="{{ route('register') }}">Sign Up</a>
            @endauth
          @endif
          </div>
        </nav>
      </header>

      <div class="center w-100 db cf bg-light-gray pa3">
        @yield('content')
      </div>

      <footer class="tc w-100 bg-navy o-70">
      @if (Route::has('login'))
        <ul class="center dib list">
          <li class="dib-l mb4 mb2-l pa2"><a class="white no-underline hover-gold" href="{{ route('login') }}">Sign In</a>
          </li>
          <li class="dib-l mb4 mb2-l pa2"><a class="white no-underline hover-gold" href="{{ route('register') }}">Sign Up</a>
          </li>
        </ul>
      @endif
      </footer>



        <!-- <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> -->
        <link rel="stylesheet" href="{{ mix('/css/tachyons.min.css') }}">
    </main>
  </body>
</html>
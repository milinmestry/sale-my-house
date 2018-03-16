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
          @include('global.top-nav')
        </nav>
      </header>

      <div class="center w-100 db cf bg-light-gray pa3">
        @yield('content')
      </div>

      <footer class="tc w-100 bg-navy o-70">
      @if (Route::has('login'))
        @include('global.footer-nav')
      @endif
      </footer>



        <!-- <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> -->
        <link rel="stylesheet" href="{{ mix('/css/tachyons.min.css') }}">
    </main>
  </body>
</html>
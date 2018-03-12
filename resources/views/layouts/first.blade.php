<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <main>
      <header>
        <nav class="flex justify-between bb b--white-10 bg-mid-gray">
          <a class="link white-70 hover-white no-underline flex items-center pa3" href="">
            <svg
              class="dib h1 w1"
              data-icon="grid"
              viewBox="0 0 32 32"
              style="fill:currentcolor">
              <title>Super Normal Icon Mark</title>
              <path d="M2 2 L10 2 L10 10 L2 10z M12 2 L20 2 L20 10 L12 10z M22 2 L30 2 L30 10 L22 10z M2 12 L10 12 L10 20 L2 20z M12 12 L20 12 L20 20 L12 20z M22 12 L30 12 L30 20 L22 20z M2 22 L10 22 L10 30 L2 30z M12 22 L20 22 L20 30 L12 30z M22 22 L30 22 L30 30 L22 30z">
              </path>
            </svg>
          </a>
          <div class="flex-grow pa3 flex items-center">
            <a class="f6 link dib white dim mr3 mr4-ns" href="#0">About</a>
            <a class="f6 link dib white dim mr3 mr4-ns" href="#0">Sign In</a>
            <a class="f6 dib white bg-animate hover-bg-white hover-black no-underline pv2 ph4 br-pill ba b--white-20" href="#0">Sign Up</a>
          </div>
        </nav>
      </header>
      
      <div class="center w-100 db cf bg-lightest-blue">
        @yield('content')

        <footer class="b tc w-100 pv1 pv2-l bg-mid-gray">
          <ul class="center dib list">
            <li class="dib-l mb4 mb2-l pa2"><a class="white" href="https://interfacelovers.com/interviews">Login</a>
            </li>
            <li class="dib-l mb4 mb2-l pa2"><a class="white" href="https://interfacelovers.com/mixes">Register</a>
            </li>
                  
          </ul>
        </footer>
      </div>


        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('/css/tachyons.min.css') }}">
    </main>
  </body>
</html>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title')</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
      <header>
        <div class="menu w-100 w-90-l ph3 ph0-l center flex items-center justify-between contain">
          <a href="/">
            logo
          </a>

          <button type="button" class="db dn-l bn menuButton bg-transparent ">
            <svg width="25px" height="18px" viewBox="0 3 25 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="menuIcon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(0.000000, 3.000000)">
              <rect class="hamburger" id="bottom" fill="
                #1D1D1D        " x="0" y="16" width="24" height="2"></rect>
              <rect class="hamburger" id="mid" fill="
                #1D1D1D        " x="0" y="8" width="24" height="2"></rect>
              <rect class="hamburger" id="top" fill="
                #1D1D1D        " x="0" y="0" width="24" height="2"></rect>
              </g>
            </svg>
          </button>

          <nav class="big-nav dn db-l">
            <a class="ml4 b" href="https://interfacelovers.com/interviews">Interviews</a>
            <a class="ml4 b" href="https://interfacelovers.com/mixes">Mixes</a>
            <a class="ml4 b" href="https://interfacelovers.com/about">About</a>
              <button type="button" class="ml4 b subscribeButton">Subscribe</button>
          </nav>
        </div>
      </header>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>

        <footer class="b tc w-100 white pv4 pv5-l">
          <ul class="center dib list">
                        <li class="dib-l mb4 mb2-l"><a href="https://interfacelovers.com/interviews">Interviews</a>
              </li><li class="dn dib-l ph2">/</li>
                    <li class="dib-l mb4 mb2-l"><a href="https://interfacelovers.com/mixes">Mixes</a>
              </li><li class="dn dib-l ph2">/</li>
                    <li class="dib-l mb4 mb2-l"><a href="https://interfacelovers.com/about">About</a>
              </li><li class="dn dib-l ph2">/</li>
                      <li class="dib-l mb4 mb2-l"><a href="mailto:hi@interfacelovers.com?subject=Post%20Job" target="_blank">Post Job</a></li>
            <li class="dn dib-l ph2">/</li>
            <li class="dib-l"><a href="mailto:hi@interfacelovers.com" target="_blank">Email Us</a></li>
          </ul>
        </footer>
    </body>
</html>
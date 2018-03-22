<div class="flex-grow pa3 flex items-center">
  <ul id="top-nav" class="f6 yellow list ma0">
    <li class="white bb fl relative hover-bg-dark-blue ph3 pv2">
      <a class="near-white no-underline db ma0"  href="http://www.webdesignerwall.com/demo/css3-dropdown-menu/">Home</a></li>
    <li class="hover-bg-dark-blue pb2 fl relative">
      <a class="near-white no-underline db ph3 pv2 ma0" href="http://www.ndesign-studio.com">My Projects</a>
      <ul class="bg-dark-blue list dn pa0 ma0 absolute">
        <li class="hover-bg-blue ph3 pv2">
          <a class="near-white no-underline" href="http://www.ndesign-studio.com">N.Design Studio</a>
          <ul class="bg-blue list dn pa0 ma0 absolute">
            <li class="hover-bg-light-blue">
              <a class="near-white no-underline db ph3 pv2 ma0" href="http://www.ndesign-studio.com/portfolio">Portfolio</a></li>
            <li>
                <a class="near-white no-underline db ph3 pv2 ma0" href="http://www.ndesign-studio.com/portfolio">Portfolio1</a></li>
            <li>
                <a class="near-white no-underline db ph3 pv2 ma0" href="http://www.ndesign-studio.com/portfolio">Portfolio2</a>
            </li>
            <a class="near-white no-underline db ph3 pv2 ma0" href="http://www.ndesign-studio.com/portfolio">Portfolio3</a></li>
          </ul>
        </li>
        <li class="hover-bg-blue ph3 pv2">
          <a class="near-white no-underline" href="http://www.webdesignerwall.com">Web Designer Wall</a>
          <ul class="bg-dark-blue list dn pa0 ma0 absolute">
            <li class="hover-bg-blue ph3 pv2">
              <a class="near-white no-underline" href="http://jobs.webdesignerwall.com">Design Job Wall</a>
            </li>
          </ul>
        </li>
        <li><a href="http://icondock.com">IconDock</a></li>
        <li><a href="http://bestwebgallery.com">Best Web Gallery</a></li>
      </ul>
    </li>
    <li class="fl relative dn"><a href="#">Multi-Levels</a>
      <ul class="dn pa0 ma0">
        <li><a href="#">Team</a>
          <ul>
            <li><a href="#">Sub-Level Item</a></li>
            <li><a href="#">Sub-Level Item</a>
              <ul>
                <li><a href="#">Sub-Level Item</a></li>
                <li><a href="#">Sub-Level Item</a></li>
                <li><a href="#">Sub-Level Item</a></li>
              </ul>
            </li>

            <li><a href="#">Sub-Level Item</a></li>
          </ul>
        </li>
        <li><a href="#">Sales</a></li>
        <li><a href="#">Another Link</a></li>
        <li><a href="#">Department</a>
          <ul>
            <li><a href="#">Sub-Level Item</a></li>
            <li><a href="#">Sub-Level Item</a></li>
            <li><a href="#">Sub-Level Item</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="fl relative hover-bg-dark-blue ph3 pv2">
      <a class="near-white no-underline db ma0" href="#">About</a></li>
    <li class="fl relative hover-bg-dark-blue ph3 pv2">
      <a class="near-white no-underline db ma0" href="#">Contact Us</a></li>
  </ul>

  @if (Route::has('login'))
    @auth
      <a class="f6 link dib white mr3 mr4-ns hover-gold" href="{{ url('/home') }}">@lang('site.MENU_LINKS.HOME')</a>
      <a class="f6 link dib white mr3 mr4-ns hover-gold" href="{{ url('/user') }}">@lang('site.MENU_LINKS.USER')</a>
      <a class="f6 link dib white mr3 mr4-ns hover-gold" href="{{ url('/property/create') }}">@lang('site.MENU_LINKS.ADD_PROPERTY')</a>
      <a class="f6 link dib white mr3 mr4-ns hover-gold" href="{{ route('logout') }}">@lang('site.MENU_LINKS.LOGOUT')</a>
    @else
      <a class="f6 link dib white mr3 mr4-ns hover-gold" href="{{ route('login') }}">@lang('site.MENU_LINKS.LOGIN')</a>
      <a class="f6 dib white bg-animate hover-bg-white hover-black no-underline pv2 ph4 br-pill ba b--white-20" href="{{ route('register') }}">@lang('site.MENU_LINKS.REGISTER')</a>
    @endauth
  @endif
</div>
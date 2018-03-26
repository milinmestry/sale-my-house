<div class="flex-grow pa3 flex items-center">
  <ul id="top-nav" class="f6 yellow list ma0">
    <li class="white bb fl relative hover-bg-dark-blue ph2 pv1">
      <a class="near-white no-underline db ma0 pa2 hover-gold" href="{{ url('/home') }}">@lang('site.MENU_LINKS.HOME')</a>
    </li>
    <li class="white relative hover-bg-dark-blue ph2 pv1">
      <a class="near-white no-underline db ma0 pa2 hover-gold" href="{{ url('/property/search') }}">@lang('site.MENU_LINKS.SEARCH_PROPERTIES')</a>
    </li>

    @if (Route::has('login'))
      @auth
      <li class="white relative hover-bg-dark-blue ph2 pv1">
        <a class="f6 link dib white mr3 mr4-ns hover-gold pa2" href="{{ url('/user') }}">@lang('site.MENU_LINKS.MY_ACCOUNT')</a>
        <ul class="bg-dark-blue list dn pa0 ma0 absolute">
          <li class="hover-bg-blue ph2 pv1">
            <a class="near-white no-underline pv2 ph3" href="http://www.ndesign-studio.com">@lang('site.MENU_LINKS.MY_PROPERTIES')</a>
            <ul class="bg-blue list dn pa0 ma0 absolute">
              <li class="hover-bg-light-blue ph2 pv1">
                <a class="near-white no-underline pa2 hover-dark-gray" href="{{ url('/property/create') }}">@lang('site.MENU_LINKS.ADD_PROPERTY')</a>
              </li>
            </ul>
          </li>
          <li class="hover-bg-blue ph2 pv1"><a class="near-white no-underline pv2 ph3" href="http://icondock.com">IconDock</a></li>
          <li class="hover-bg-blue ph2 pv1"><a class="near-white no-underline db pv2 ph3" href="http://bestwebgallery.com">Best Web Gallery</a></li>
        </ul>
      </li>
      <li class="white relative hover-bg-dark-blue ph2 pv1">
        <a class="f6 link dib white mr3 mr4-ns hover-gold pa2" href="{{ url('/property/create') }}">@lang('site.MENU_LINKS.ADD_PROPERTY')</a>
      </li>
      <li class="white relative hover-bg-dark-blue ph2 pv1">
        <a class="f6 link dib white mr3 mr4-ns hover-gold pa2" href="{{ route('logout') }}">@lang('site.MENU_LINKS.LOGOUT')</a>
      </li>
      @else
      <li class="white relative hover-bg-dark-blue ph2 pv1">
        <a class="f6 link dib white mr3 mr4-ns hover-gold pa2" href="{{ route('login') }}">@lang('site.MENU_LINKS.LOGIN')</a>
      </li>
      <li class="">
        <a class="f6 dib white bg-animate hover-bg-white hover-black no-underline pv2 ph4 br-pill ba b--white-20" href="{{ route('register') }}">@lang('site.MENU_LINKS.REGISTER')</a>
      </li>
      @endauth
    @endif
  </ul>


</div>
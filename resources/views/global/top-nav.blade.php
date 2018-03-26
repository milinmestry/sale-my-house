<div class="flex-grow pa3 flex items-center">
  <ul id="top-nav" class="f6 yellow list ma0">
    <li class="white bb fl relative hover-bg-mid-gray">
      <a class="near-white no-underline db ma0 ph3 pv2 hover-white" href="{{ url('/home') }}">@lang('site.MENU_LINKS.HOME')</a>
    </li>
    <li class="white relative hover-bg-mid-gray">
      <a class="near-white no-underline db ma0 ph3 pv2 hover-white" href="{{ url('/property/search') }}">@lang('site.MENU_LINKS.SEARCH_PROPERTIES')</a>
    </li>

    @if (Route::has('login'))
      @auth
      <li class="white relative hover-bg-mid-gray">
        <a class="f6 link dib white mr3 mr4-ns hover-white ph3 pv2" href="{{ url('/user') }}">@lang('site.MENU_LINKS.MY_ACCOUNT')</a>
        <ul class="bg-mid-gray list dn pa0 ma0 absolute">
          <li class="hover-bg-dark-green">
            <a class="near-white no-underline ph3 pv2" href="http://www.ndesign-studio.com">@lang('site.MENU_LINKS.MY_PROPERTIES')</a>
            <ul class="bg-dark-green list dn pa0 ma0 absolute">
              <li class="hover-bg-light-green">
                <a class="near-white no-underline ph3 pv2 hover-dark-gray" href="{{ url('/property/create') }}">@lang('site.MENU_LINKS.ADD_PROPERTY')</a>
              </li>
            </ul>
          </li>
          <li class="hover-bg-dark-green"><a class="near-white no-underline ph3 pv2" href="http://icondock.com">IconDock</a></li>
          <li class="hover-bg-dark-green"><a class="near-white no-underline db ph3 pv2" href="http://bestwebgallery.com">Best Web Gallery</a></li>
        </ul>
      </li>
      <li class="white relative hover-bg-mid-gray">
        <a class="f6 link dib white mr3 mr4-ns hover-white ph3 pv2" href="{{ url('/property/create') }}">@lang('site.MENU_LINKS.ADD_PROPERTY')</a>
      </li>
      <li class="white relative hover-bg-mid-gray">
        <a class="f6 link dib white mr3 mr4-ns hover-white ph3 pv2" href="{{ route('logout') }}">@lang('site.MENU_LINKS.LOGOUT')</a>
      </li>
      @else
      <li class="white relative hover-bg-mid-gray">
        <a class="f6 link dib white mr3 mr4-ns hover-white ph3 pv2" href="{{ route('login') }}">@lang('site.MENU_LINKS.LOGIN')</a>
      </li>
      <li class="">
        <a class="f6 dib white bg-animate hover-bg-white hover-black no-underline pv2 ph4 br-pill ba b--white-20" href="{{ route('register') }}">@lang('site.MENU_LINKS.REGISTER')</a>
      </li>
      @endauth
    @endif
  </ul>
</div>
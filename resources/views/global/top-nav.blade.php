<div class="flex-grow pa1 flex items-center">
  <nav class="nav">
    <ul class="menu">
      <li class="menu-item">
        <a class="hover-bg-mid-gray hover-light-green no-underline" href="{{ url('/home') }}">@lang('site.MENU_LINKS.HOME')</a>
      </li>
      <li class="menu-item has-children">
        <a class="hover-bg-mid-gray no-underline" href="{{ url('/home') }}">First 1</a>
        <ul class="sub-menu bg-silver">
          <li class="menu-item">
            <a class="hover-bg-moon-gray no-underline" href="{{ url('/home') }}">First 1-1</a>
              <ul class="sub-menu bg-moon-gray">
                <li class="menu-item">
                  <a class="hover-bg-near-white no-underline" href="{{ url('/home') }}">First 1-1-1</a>
                </li>
                <li class="menu-item">
                <a href="{{ url('/home') }}">First 1-1-2</a>
                </li>
              </ul>
          </li>
          <li class="menu-item">
            <a href="{{ url('/home') }}">First 1-2</a>
          </li>
        </ul>
      </li>
      <li class="menu-item"><a href="{{ url('/home') }}">Third</a></li>
      <li class="menu-item"><a href="{{ url('/home') }}">Four</a></li>
      <li class="menu-item"><a href="{{ url('/home') }}">Five</a></li>
      <li class="menu-item">
        <a href="{{ url('/home') }}">Six</a>
      </li>
    </ul>
  </nav>
</div>


<div class="flex-grow pa1 flex items-center dn-ns">
  <ul id="top-nav" class="f6 yellow list ma0">
    <li class="white bb fl relative hover-bg-mid-gray">
      <a class="near-white no-underline db ma0 ph3 pv2 hover-white" href="{{ url('/home') }}">@lang('site.MENU_LINKS.HOME')</a>
    </li>
    <li class="white relative hover-bg-mid-gray">
      <a class="near-white no-underline db ma0 ph3 pv2 hover-white" href="{{ url('/property/search') }}">@lang('site.MENU_LINKS.SEARCH_PROPERTIES')</a>
    </li>
  {{--  </ul>  --}}
{{--  </div>

  <div class="flex-grow pa1 flex items-center">  --}}
    {{--  <ul id="top-nav" class="f6 yellow list ma0">  --}}
    @if (Route::has('login'))
      @auth
      <li class="white relative hover-bg-mid-gray">
        <a class="f6 link dib white mr3 mr4-ns hover-white ph3 pv2" href="{{ url('/user') }}">{{ ucwords(Auth::user()->name) }}</a>
        <span id="s1"></span>
        <ul class="bg-mid-gray list dn pa0 ma0 absolute subs">
          <li class="hover-bg-dark-green">
            <a class="near-white no-underline ph3 pv2" href="#">@lang('site.MENU_LINKS.MY_PROPERTIES')</a>
            <ul class="bg-dark-green list dn pa0 ma0 absolute">
              <li class="hover-bg-light-green">
                <a class="near-white no-underline ph3 pv2 hover-dark-gray" href="{{ url('/property/create') }}">@lang('site.MENU_LINKS.ADD_PROPERTY')</a>
              </li>
              <li class="hover-bg-light-green">
                <a class="near-white no-underline ph3 pv2 hover-dark-gray" href="{{ url('/property') }}">@lang('site.MENU_LINKS.LIST_PROPERTY')</a>
              </li>
            </ul>
          </li>
          <li class="hover-bg-dark-green">
            <a class="near-white no-underline ph3 pv2" href="{{ route('logout') }}">@lang('site.MENU_LINKS.LOGOUT')</a>
          </li>
        </ul>
      </li>
      @else
      <li class="white relative hover-bg-mid-gray">
        <a class="f6 link dib white mr3 mr4-ns hover-white ph3 pv2" href="{{ route('login') }}">@lang('site.MENU_LINKS.LOGIN')</a>
      </li>
      <li class="">
        <a class="f6 dib white bg-animate hover-bg-white hover-black no-underline pv2 ph4 br-pill ba b--white-20" href="{{ route('register') }}">@lang('site.MENU_LINKS.REGISTER')</a>
      </li>
      </ul>
      @endauth
    @endif
  {{--  </div>  --}}
</div>

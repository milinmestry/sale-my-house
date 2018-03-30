<div class="db dtc-l v-mid w-100 w-90-l tc tr-l nav nav--cen">
  <ul class="menu">
    <li class="menu-item">
      <a class="hover-bg-silver hover-light-green no-underline" href="{{ url('/home') }}">@lang('site.MENU_LINKS.HOME')</a>
    </li>
    <li class="menu-item">
      <a class="hover-bg-silver hover-light-green no-underline" href="{{ url('/property/search') }}">@lang('site.MENU_LINKS.SEARCH_PROPERTIES')
      </a>
    </li>
    @if (Route::has('login'))
    @auth
    <li class="menu-item has-children">
      <a class="hover-bg-silver no-underline" href="{{ url('/user') }}">{{ ucwords(Auth::user()->name) }}<span class="dropdown-icon"></span></a>
      <ul class="sub-menu bg-silver">
        <li class="menu-item has-children">
          <a class="hover-bg-moon-gray no-underline" href="#">@lang('site.MENU_LINKS.MY_PROPERTIES')<span class="dropdown-icon"></span></a>
            <ul class="sub-menu bg-moon-gray">
              <li class="menu-item">
                <a class="hover-bg-near-white no-underline" href="{{ url('/property/create') }}">@lang('site.MENU_LINKS.ADD_PROPERTY')</a>
              </li>
              <li class="menu-item">
              <a class="hover-bg-near-white no-underline" href="{{ url('/property') }}">@lang('site.MENU_LINKS.LIST_PROPERTY')</a>
              </li>
            </ul>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a class="hover-bg-silver no-underline" href="{{ route('logout') }}">@lang('site.MENU_LINKS.LOGOUT')</a>
    </li>
    @else
    <li class="menu-item">
      <a class="hover-bg-silver no-underline" href="{{ route('login') }}">@lang('site.MENU_LINKS.LOGIN')</a>
    </li>
    <li class="menu-item">
      <a class="hover-bg-silver no-underline" href="{{ route('register') }}">@lang('site.MENU_LINKS.REGISTER')</a>
    </li>
    @endauth
    @endif
  </ul>
</div>
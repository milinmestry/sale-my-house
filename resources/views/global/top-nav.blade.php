<div class="flex-grow pa3 flex items-center">
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
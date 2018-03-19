{{--  @extends('layouts.app')  --}}
@extends('layouts.first')

@section('title', trans('site.PAGE_TITLE.SIGN_IN'))

@section('content')
<div class="center">
  <article class="center mw5 mw6-ns br3 hidden ba b--black-10 mv4 shadow-1">
    <h1 class="f4 bg-navy o-50 br3 br--top white mv0 pv2 ph3">@lang('forms.REGISTRATION.SIGN_IN')</h1>
    <div class="pa3 bt b--black-10 bg-white-60">
      <form method="POST" action="{{ route('login') }}" accept-charset="utf-8" autocomplete="off">
        @csrf

        <div class="mw9">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="email">@lang('forms.REGISTRATION.E-MAIL')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="email" name="email" id="email" max="150" maxlength="150"required autofocus>

              @if ($errors->has('email'))
                <small id="email-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('email') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt2-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="password">@lang('forms.REGISTRATION.PASSWORD')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="password" name="password" id="password" max="50" maxlength="50"required>

              @if ($errors->has('password'))
                <small id="password-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('password') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt2-ns">
          <div class="cf ph2-ns">
              <div class="fl w-100 w-25-ns pa2-ns">
              </div>
              <div class="fl w-100 w-75-ns pa2-ns">
                <label class="pa0 ma0 lh-copy f6 pointer">
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> @lang('forms.REGISTRATION.REMEMBER_ME')
                </label>
              </div>
          </div>
        </div>

        <div class="mt3 mt2-ns tc">
          <input class="b ph4 pv2 input-reset ba b--navy white bg-navy pointer f6 br2 dim" type="submit" value="@lang('forms.BUTTON_SIGN_IN')">
        </div>

      </form>

      <div class="lh-copy mt3 mt2-ns">
        <a href="{{ route('password.request') }}" class="f6 link hover-gold black db">@lang('Forgot Your Password&quest;')</a>
      </div>
    </div>
  </article>
</div>
@endsection

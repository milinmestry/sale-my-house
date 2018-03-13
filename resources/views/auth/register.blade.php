@extends('layouts.first')

@section('content')
<div class="center">
  <article class="center mw5 mw6-ns br3 hidden ba b--black-10 mv4 shadow-1">
    <h1 class="f4 bg-navy o-50 br3 br--top white mv0 pv2 ph3">@lang('forms.REGISTRATION.SIGN_UP')</h1>
    <div class="pa3 bt b--black-10 bg-white">
      <form method="POST" action="{{ route('register') }}" accept-charset="utf-8" autocomplete="off">
        @csrf
        <div class="mt3">
          <label class="db fw4 lh-copy f6" for="name">@lang('forms.REGISTRATION.NAME')</label>
          <input class="pa2 input-reset ba b--black-10 bg-transparent w-80 measure" type="text" name="name" id="name" value="{{ old('name') }}" min="1" max="50" required autofocus>
          @if ($errors->has('name'))
            <small id="name-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('name') }}</small>
          @endif
        </div>
        <div class="mt3">
          <label class="db fw4 lh-copy f6" for="email">@lang('forms.REGISTRATION.E-MAIL')</label>
          <input class="pa2 input-reset ba b--black-10 bg-transparent w-80 measure" type="email" name="email" id="email" value="{{ old('email') }}" min="3" max="100" required>
          @if ($errors->has('email'))
            <small id="email-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('email') }}</small>
          @endif
        </div>
        <div class="mt3">
          <label class="db fw4 lh-copy f6" for="password">@lang('forms.REGISTRATION.PASSWORD')</label>
          <input class="pa2 input-reset ba b--black-10 bg-transparent w-80 measure" type="password" name="password" id="password" value="" min="8" max="30" required>
          @if ($errors->has('password'))
            <small id="password-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('password') }}</small>
          @endif
        </div>
        <div class="mt3">
          <label class="db fw4 lh-copy f6" for="password-confirm">@lang('forms.REGISTRATION.CONFIRM_PASSWORD')</label>
          <input class="pa2 input-reset ba b--black-10 bg-transparent w-80 measure" type="password" name="password_confirmation" id="password-confirm" value="" min="8" max="30" required>
          @if ($errors->has('password-confirm'))
            <small id="password-confirm-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('password-confirm') }}</small>
          @endif
        </div>
        <div class="mt3">
          <label class="db fw4 lh-copy f6" for="mobile">@lang('forms.REGISTRATION.MOBILE')</label>
          <input class="pa2 input-reset ba b--black-10 bg-transparent w-80 measure" type="text" name="mobile" id="mobile" value="{{ old('mobile') }}" min="10" max="15" maxlength="15" required>
          @if ($errors->has('mobile'))
            <small id="mobile-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('mobile') }}</small>
          @endif
        </div>
        <div class="mt3 tc">
          <input class="b ph4 pv2 input-reset ba b--navy white bg-navy pointer f6 br2 dim" type="submit" value="@lang('forms.REGISTRATION.SIGN_UP')"></div>
      </form>
    </div>
  </article>
</div>
@endsection

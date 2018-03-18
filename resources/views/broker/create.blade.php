@extends('layouts.first')

@section('title', trans('site.PAGE_TITLE.USER'))

@section('content')
<div class="center">
  <article class="center mw5 mw7-ns br3 hidden ba b--black-10 mv4 shadow-1">
    <h1 class="f4 bg-navy o-50 br3 br--top white mv0 pv2 ph3">@lang('forms.REG_BROKER.HEADING')</h1>
    <div class="pa3 bt b--black-10 bg-white">
      <form method="POST" action="{{ route('broker.store') }}" accept-charset="utf-8" autocomplete="off">
        @csrf

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="agency_name">@lang('forms.REG_BROKER.AGENCY_NAME')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="text" name="agency_name" id="contact_landline" value="{{ old('agency_name') }}" min="2" max="100" maxlength="100" autofocus>
              @if ($errors->has('agency_name'))
                <small id="agency_name-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('agency_name') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="present_address">@lang('forms.REG_SELLER.PRESENT_ADDRESS')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <textarea class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" name="present_address" id="present_address" rows="3" cols="50" required>{{ old('present_address') }}</textarea>
              @if ($errors->has('present_address'))
                <small id="present_address-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('present_address') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="postal_code">@lang('forms.REG_BROKER.POSTAL_CODE')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="text" name="postal_code" id="postal_code" value="{{ old('postal_code') }}" min="6" max="10" maxlength="10" required>
              @if ($errors->has('postal_code'))
                <small id="postal_code-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('postal_code') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="contact_landline">@lang('forms.REG_SELLER.CONTACT_LANDLINE')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="text" name="contact_landline" id="contact_landline" value="{{ old('contact_landline') }}" min="8" max="50" maxlength="50">
              @if ($errors->has('contact_landline'))
                <small id="contact_landline-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('contact_landline') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="alternate_email">@lang('forms.REG_SELLER.ALTERNATE_E-MAIL')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="email" name="alternate_email" id="alternate_email" value="{{ old('alternate_email') }}" min="3" max="255">
              @if ($errors->has('alternate_email'))
                <small id="alternate_email-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('alternate_email') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mt3 tc">
          <input class="b ph4 pv2 input-reset ba b--navy white bg-navy pointer f6 br2 dim" type="submit" value="@lang('forms.BUTTON_SAVE')">
        </div>
      </form>
    </div>
  </article>
</div>
@endsection

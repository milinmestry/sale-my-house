@extends('layouts.first')
@section('title', trans('site.PAGE_TITLE.PROPERTY'))
@section('content')
<div class="center">
  <article class="center mw5 mw7-ns br3 hidden ba b--black-10 mv4 shadow-1">
    <h1 class="f4 bg-green br3 br--top white mv0 pv2 ph3">
      {{ isset($editForm) ? trans('enquiry.EDIT_ENQUIRY') : trans('enquiry.ADD_ENQUIRY') }}
    </h1>
    <div class="pa3 bt b--black-10 bg-white">
      <form method="POST" action="{{ isset($editForm) ? route('property.update',$id) : route('property.store') }}" accept-charset="utf-8" autocomplete="off">
        @if (isset($editForm))
        @method('PUT')
        @endif

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-30-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="property_id">@lang('enquiry.PROPERTY')</label>
            </div>
            <div class="fl w-100 w-70-ns pa2-ns">
              <select name="property_id" id="property_id" class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns" required autofocus>
                <option value="">--Select--</option>
                @foreach ($properties as $oProperty)
                <option value="{{ $oProperty['id'] }}" {{ (old('property_id', $property->property_id ?? '') == $oProperty['id']) ? 'selected' : '' }}>
                    {{ $oProperty['apartment_type'] }} at {{ $oProperty['address'] }}
                </option>
                @endforeach
              </select>

              @if ($errors->has('property_id'))
                <small id="property_id-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('property_id') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-30-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="fullname">@lang('enquiry.FULLNAME')</label>
            </div>
            <div class="fl w-100 w-70-ns pa2-ns">
              <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="text" name="fullname" id="fullname" value="{{ old('fullname', $enquiry->fullname ?? '') }}" min="2" max="30" maxlength="30" required>
              @if ($errors->has('fullname'))
                <small id="fullname-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('fullname') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-30-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="mobile">@lang('enquiry.MOBILE')</label>
            </div>
            <div class="fl w-100 w-70-ns pa2-ns">
              <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="text" name="mobile" id="mobile" value="{{ old('mobile', $enquiry->mobile ?? '') }}" min="2" max="30" maxlength="30" required>
              @if ($errors->has('mobile'))
                <small id="mobile-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('mobile') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-30-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="contact_numbers">@lang('enquiry.CONTACT_NUMBERS')</label>
            </div>
            <div class="fl w-100 w-70-ns pa2-ns">
              <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="text" name="contact_numbers" id="contact_numbers" value="{{ old('contact_numbers', $enquiry->contact_numbers ?? '') }}" min="0" max="50" maxlength="50">
              @if ($errors->has('contact_numbers'))
                <small id="contact_numbers-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('contact_numbers') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-30-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="address">@lang('enquiry.ADDRESS')</label>
            </div>
            <div class="fl w-100 w-70-ns pa2-ns">
              <textarea class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" name="address" id="address" rows="3" cols="50">{{ old('address', $enquiry->address ?? '') }}</textarea>
              @if ($errors->has('address'))
                <small id="address-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('address') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-30-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="zipcode">@lang('enquiry.ZIPCODE')</label>
            </div>
            <div class="fl w-100 w-70-ns pa2-ns">
              <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="text" name="zipcode" id="zipcode" value="{{ old('zipcode', $enquiry->zipcode ?? '') }}" min="0" max="10" maxlength="10">
              @if ($errors->has('zipcode'))
                <small id="zipcode-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('zipcode') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="pr4 cf ph2-ns">
            <div class="fl w-100 w-30-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="enquiry_from">@lang('enquiry.ENQUIRY_FROM')</label>
            </div>
            <div class="fl w-100 w-70-ns pa2-ns">
              <div class="items-center w-20 di pr3">
                <input value="0"
                type="radio" name="enquiry_from" id="enquiry_from_buyer"
                {{ (Input::old('enquiry_from', $enquiry->enquiry_from ?? '') === trans('enquiry.BUYER'))
                ? 'checked' : '' }} required>
                <label for="enquiry_from" class="fw4 lh-copy f6">@lang('site.STR_BUYER')</label>
              </div>
              <div class="items-center w-20 di pr3">
                <input value="1"
                type="radio" name="enquiry_from" id="enquiry_from_broker"
                {{ (Input::old('enquiry_from', $property->enquiry_from ?? '') === trans('site.STR_BROKER'))
                ? 'checked' : '' }}>
                <label for="enquiry_from" class="fw4 lh-copy f6">@lang('site.STR_BROKER')</label>
              </div>
              @if ($errors->has('enquiry_from'))
                <small id="enquiry_from-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('enquiry_from') }}</small>
              @endif
            </div>
          </div>
        </div>

        <fieldset class="ba b--gray b--dashed mt2">
          <legend class="b bg-light-gray pa1">@lang('site.STR_BROKER')</legend>
          <div class="mw9 mt3 mt1-ns">
            <div class="cf ph2-ns">
              <div class="fl w-100 w-30-ns pa2-ns">
                <label class="fw4 lh-copy f6" for="broker_name">@lang('enquiry.BROKER_NAME')</label>
              </div>
              <div class="fl w-100 w-70-ns pa2-ns">
                <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="text" name="broker_name" id="broker_name" value="{{ old('broker_name', $enquiry->broker_name ?? '') }}" min="0" max="50" maxlength="50">
                @if ($errors->has('broker_name'))
                  <small id="broker_name-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('broker_name') }}</small>
                @endif
              </div>
            </div>
          </div>

          <div class="mw9 mt3 mt1-ns">
            <div class="cf ph2-ns">
              <div class="fl w-100 w-30-ns pa2-ns">
                <label class="fw4 lh-copy f6" for="broker_details">@lang('enquiry.BROKER_DETAILS')</label>
              </div>
              <div class="fl w-100 w-70-ns pa2-ns">
                <textarea class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" name="broker_details" id="broker_details" rows="3" cols="50">{{ old('broker_details', $enquiry->broker_details ?? '') }}</textarea>
                @if ($errors->has('broker_details'))
                  <small id="broker_details-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('broker_details') }}</small>
                @endif
              </div>
            </div>
          </div>
        </fieldset>

        <fieldset class="ba b--gray b--dashed mt2">
          <legend class="b bg-light-gray pa1">@lang('enquiry.TEXT_REFERER')</legend>
          <div class="mw9 mt3 mt1-ns">
            <div class="cf ph2-ns">
              <div class="fl w-100 w-30-ns pa2-ns">
                <label class="fw4 lh-copy f6" for="referer_name">@lang('enquiry.REFERER_NAME')</label>
              </div>
              <div class="fl w-100 w-70-ns pa2-ns">
                <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="text" name="referer_name" id="referer_name" value="{{ old('referer_name', $enquiry->referer_name ?? '') }}" min="0" max="50" maxlength="50">
                @if ($errors->has('referer_name'))
                  <small id="referer_name-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('referer_name') }}</small>
                @endif
              </div>
            </div>
          </div>

          <div class="mw9 mt3 mt1-ns">
            <div class="cf ph2-ns">
              <div class="fl w-100 w-30-ns pa2-ns">
                <label class="fw4 lh-copy f6" for="referer_contact">@lang('enquiry.REFERER_CONTACT')</label>
              </div>
              <div class="fl w-100 w-70-ns pa2-ns">
                <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="text" name="referer_contact" id="referer_contact" value="{{ old('referer_contact', $enquiry->referer_contact ?? '') }}" min="0" max="50" maxlength="50">
                @if ($errors->has('referer_contact'))
                  <small id="referer_contact-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('referer_contact') }}</small>
                @endif
              </div>
            </div>
          </div>

          <div class="mw9 mt3 mt1-ns">
            <div class="cf ph2-ns">
              <div class="fl w-100 w-30-ns pa2-ns">
                <label class="fw4 lh-copy f6" for="referer_address">@lang('enquiry.REFERER_ADDRESS')</label>
              </div>
              <div class="fl w-100 w-70-ns pa2-ns">
                <textarea class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" name="referer_address" id="referer_address" rows="3" cols="50" required>{{ old('referer_address', $enquiry->referer_address ?? '') }}</textarea>
                @if ($errors->has('referer_address'))
                  <small id="referer_address-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('referer_address') }}</small>
                @endif
              </div>
            </div>
          </div>
        </fieldset>

        <fieldset class="ba b--gray b--dashed mt2">
          <legend class="b bg-light-gray pa1">@lang('enquiry.TEXT_BUYER_FUNDING')</legend>
          <div class="mw9 mt3 mt1-ns">
            <div class="cf ph2-ns">
              <div class="fl w-100 w-30-ns pa2-ns">
                <label class="fw4 lh-copy f6" for="cash_in_hand">@lang('enquiry.CASH_IN_HAND')</label>
              </div>
              <div class="fl w-100 w-70-ns pa2-ns">
                <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="text" name="cash_in_hand" id="cash_in_hand" value="{{ old('cash_in_hand', $enquiry->cash_in_hand ?? '') }}" min="0" max="20" maxlength="20">
                @if ($errors->has('cash_in_hand'))
                  <small id="cash_in_hand-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('cash_in_hand') }}</small>
                @endif
              </div>
            </div>
          </div>

          <div class="mw9 mt3 mt1-ns">
            <div class="pr4 cf ph2-ns">
              <div class="fl w-100 w-30-ns pa2-ns">
                <label class="fw4 lh-copy f6" for="need_homeloan">@lang('enquiry.NEED_HOMELOAN')</label>
              </div>
              <div class="fl w-100 w-70-ns pa2-ns">
                <div class="items-center w-20 di pr3">
                  <input value="0"
                  type="radio" name="need_homeloan" id="need_homeloan_yes"
                  {{ (Input::old('need_homeloan', $enquiry->need_homeloan ?? '') === trans('forms.TEXT_YES'))
                  ? 'checked' : '' }}>
                  <label for="need_homeloan" class="fw4 lh-copy f6">@lang('forms.TEXT_YES')</label>
                </div>
                <div class="items-center w-20 di pr3">
                  <input value="1"
                  type="radio" name="need_homeloan" id="need_homeloan_no"
                  {{ (Input::old('need_homeloan', $property->need_homeloan ?? '') === trans('forms.TEXT_NO'))
                  ? 'checked' : '' }}>
                  <label for="need_homeloan" class="fw4 lh-copy f6">@lang('forms.TEXT_NO')</label>
                </div>
                @if ($errors->has('need_homeloan'))
                  <small id="need_homeloan-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('need_homeloan') }}</small>
                @endif
              </div>
            </div>
          </div>

          <div class="mw9 mt3 mt1-ns">
            <div class="pr4 cf ph2-ns">
              <div class="fl w-100 w-30-ns pa2-ns">
                <label class="fw4 lh-copy f6" for="homeloan_presanctioned">@lang('enquiry.HOMELOAN_PRESANCTIONED')</label>
              </div>
              <div class="fl w-100 w-70-ns pa2-ns">
                <div class="items-center w-20 di pr3">
                  <input value="0"
                  type="radio" name="homeloan_presanctioned" id="homeloan_presanctioned_yes"
                  {{ (Input::old('homeloan_presanctioned', $enquiry->homeloan_presanctioned ?? '') === trans('forms.TEXT_YES'))
                  ? 'checked' : '' }}>
                  <label for="homeloan_presanctioned" class="fw4 lh-copy f6">@lang('forms.TEXT_YES')</label>
                </div>
                <div class="items-center w-20 di pr3">
                  <input value="1"
                  type="radio" name="homeloan_presanctioned" id="homeloan_presanctioned_no"
                  {{ (Input::old('homeloan_presanctioned', $property->homeloan_presanctioned ?? '') === trans('forms.TEXT_NO'))
                  ? 'checked' : '' }}>
                  <label for="homeloan_presanctioned" class="fw4 lh-copy f6">@lang('forms.TEXT_NO')</label>
                </div>
                @if ($errors->has('homeloan_presanctioned'))
                  <small id="homeloan_presanctioned-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('homeloan_presanctioned') }}</small>
                @endif
              </div>
            </div>
          </div>

          <div class="mw9 mt3 mt1-ns">
            <div class="cf ph2-ns">
              <div class="fl w-100 w-30-ns pa2-ns">
                <label class="fw4 lh-copy f6" for="homeloan_details">@lang('enquiry.HOMELOAN_DETAILS')</label>
              </div>
              <div class="fl w-100 w-70-ns pa2-ns">
                <textarea class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" name="homeloan_details" id="homeloan_details" rows="3" cols="50">{{ old('homeloan_details', $enquiry->homeloan_details ?? '') }}</textarea>
                @if ($errors->has('homeloan_details'))
                  <small id="homeloan_details-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('homeloan_details') }}</small>
                @endif
              </div>
            </div>
          </div>
        </fieldset>

        <div class="mt3 tc">
          <input class="b ph4 pv2 input-reset ba b--green white bg-green pointer f6 br2 dim" type="submit" value="{{ isset($editForm) ? trans('forms.BUTTON_UPDATE') : trans('forms.BUTTON_SAVE') }}">
        </div>

      </form>
    </div>
  </article>
</div>
@endsection

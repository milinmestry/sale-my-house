@extends('layouts.first')

@section('title', trans('site.PAGE_TITLE.PROPERTY'))

@section('content')

<div class="center">
  <article class="center mw5 mw7-ns br3 hidden ba b--black-10 mv4 shadow-1">
    <h1 class="f4 bg-navy o-50 br3 br--top white mv0 pv2 ph3">@lang('forms.PROPERTY.HEADING')</h1>
    <div class="pa3 bt b--black-10 bg-white">
      <form method="POST" action="{{ route('property.store') }}" accept-charset="utf-8" autocomplete="off">
        @csrf

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="property_type">@lang('forms.PROPERTY.PROPERTY_TYPE')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <select name="property_type" id="property_type" class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns" required autofocus>
                @foreach ($propertyTypes as $oValue => $ptype)
                  @if (old('property_type') === $oValue)
                    <option value="{{ $oValue  }}" selected>
                    {{ $ptype  }}</option>
                  @else
                    <option value="{{ $oValue  }}">{{ $ptype  }}</option>
                  @endif
                @endforeach
              </select>

              @if ($errors->has('property_type'))
                <small id="property_type-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('property_type') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="apartment_type">@lang('forms.PROPERTY.APARTMENT_TYPE')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <select name="apartment_type" id="apartment_type" class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns" required>
                @foreach ($apartmentTypes as $oValue => $ptype)
                  @if (old('apartment_type') === $oValue)
                    <option value="{{ $oValue  }}" selected>
                    {{ $ptype  }}</option>
                  @else
                    <option value="{{ $oValue  }}">{{ $ptype  }}</option>
                  @endif
                @endforeach
              </select>

              @if ($errors->has('apartment_type'))
                <small id="apartment_type-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('apartment_type') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="address">@lang('forms.PROPERTY.ADDRESS')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <textarea class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" name="address" id="address" rows="3" cols="50" required>{{ old('address') }}</textarea>
              @if ($errors->has('address'))
                <small id="address-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('address') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="measurement">@lang('forms.PROPERTY.MEASUREMENT')</label>
            </div>
            <div class="fl w-80 w-40-ns pa2-ns pa1">
              <input class="pa2 input-reset ba b--black-10 bg-transparent w-100 w-90-ns measure" type="text" name="measurement" id="measurement" value="{{ old('measurement') }}" min="1" max="10" maxlength="10" required>

              @if ($errors->has('measurement'))
                <small id="measurement-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('measurement') }}</small>
              @endif
            </div>

            <div class="fl pa2-ns ph1">
              <select name="measurement_type" id="measurement_type" class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-60-ns" required>
                @foreach ($propertyMeasurements as $oValue => $ptype)
                  @if (old('measurement_type') === $oValue)
                    <option value="{{ $oValue  }}" selected>
                    {{ $ptype  }}</option>
                  @else
                    <option value="{{ $oValue  }}">{{ $ptype  }}</option>
                  @endif
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="sale_price">@lang('forms.PROPERTY.SALE_PRICE')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="text" name="sale_price" id="sale_price" value="{{ old('sale_price') }}" min="1" max="11" maxlength="11" required>
              @if ($errors->has('sale_price'))
                <small id="sale_price-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('sale_price') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="min_expected_price">@lang('forms.PROPERTY.MIN_EXPECTED_PRICE')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="text" name="min_expected_price" id="min_expected_price" value="{{ old('min_expected_price') }}" min="1" max="11" maxlength="11" required>
              @if ($errors->has('min_expected_price'))
                <small id="min_expected_price-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('min_expected_price') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="pr4 cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="ownership">@lang('forms.PROPERTY.OWNERSHIP')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <div class="items-center w-20 di pr3">
                <input value="@lang('forms.PROPERTY.INDIVIDUAL')" type="radio" name="ownership" id="ownership_solo" value="{{ old('ownership') }}" required>
                <label for="ownership" class="lh-copy">@lang('forms.PROPERTY.INDIVIDUAL')</label>
              </div>
              <div class="items-center w-20 di pr3">
                <input value="@lang('forms.PROPERTY.JOINT')" type="radio" name="ownership" id="ownership_group" value="{{ old('ownership') }}">
                <label for="ownership" class="lh-copy">@lang('forms.PROPERTY.JOINT')</label>
              </div>
              @if ($errors->has('ownership'))
                <small id="ownership-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('ownership') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="joint_owners_name">@lang('forms.PROPERTY.JOINT_OWNERS_NAME')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <input class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" type="text" name="joint_owners_name" id="joint_owners_name" value="{{ old('joint_owners_name') }}" max="80" maxlength="80">
              @if ($errors->has('joint_owners_name'))
                <small id="joint_owners_name-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('joint_owners_name') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="amenities">@lang('forms.PROPERTY.AMENITIES')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <textarea class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" name="amenities" id="amenities" rows="3" cols="50">{{ old('homeloan_details') }}</textarea>
              @if ($errors->has('amenities'))
                <small id="amenities-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('amenities') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="locality_features">@lang('forms.PROPERTY.LOCALITY_FEATURES')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <textarea class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" name="locality_features" id="locality_features" rows="3" cols="50">{{ old('homeloan_details') }}</textarea>
              @if ($errors->has('locality_features'))
                <small id="locality_features-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('locality_features') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="homeloan_details">@lang('forms.PROPERTY.HOMELOAN_DETAILS')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <textarea class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns measure" name="homeloan_details" id="homeloan_details" rows="3" cols="50">{{ old('homeloan_details') }}</textarea>
              @if ($errors->has('homeloan_details'))
                <small id="homeloan_details-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('homeloan_details') }}</small>
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

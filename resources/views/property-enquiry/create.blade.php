@extends('layouts.first')
@section('title', trans('site.PAGE_TITLE.PROPERTY'))
@section('content')
<div class="center">
  <article class="center mw5 mw7-ns br3 hidden ba b--black-10 mv4 shadow-1">
    <h1 class="f4 bg-green br3 br--top white mv0 pv2 ph3">
      {{ isset($editForm) ? trans('forms.PROPERTY.EDIT_NEW_PROPERTY') : trans('forms.PROPERTY.ADD_NEW_PROPERTY') }}
    </h1>
    <div class="pa3 bt b--black-10 bg-white">
      <form method="POST" action="{{ isset($editForm) ? route('property.update',$id) : route('property.store') }}" accept-charset="utf-8" autocomplete="off">
        @if (isset($editForm))
        @method('PUT')
        @endif

        <div class="mw9 mt3 mt1-ns">
          <div class="cf ph2-ns">
            <div class="fl w-100 w-25-ns pa2-ns">
              <label class="fw4 lh-copy f6" for="property_id">@lang('enquiry.PROPERTY')</label>
            </div>
            <div class="fl w-100 w-75-ns pa2-ns">
              <select name="property_id" id="property_id" class="pa2 input-reset ba b--black-10 bg-transparent w-90 w-80-ns" required autofocus>
                @foreach ($properties as $oValue => $ptype)
                  <option value="{{ $oValue }}" {{ (old('property_id', $property->property_type ?? '') == $oValue) ? 'selected' : '' }}>{{ $ptype  }}</option>
                @endforeach
              </select>

              @if ($errors->has('property_id'))
                <small id="property_id-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('property_id') }}</small>
              @endif
            </div>
          </div>
        </div>

        <div class="mw9 mt3 mt1-ns">
            <div class="pr4 cf ph2-ns">
              <div class="fl w-100 w-25-ns pa2-ns">
                <label class="fw4 lh-copy f6" for="ownership">@lang('forms.PROPERTY.PRIVATE_PROPERTY')</label>
              </div>
              <div class="fl w-100 w-75-ns pa2-ns">
                <div class="items-center w-20 di pr3">
                  <input value="0"
                  type="radio" name="is_private" id="is_private_no"
                  {{ (Input::old('is_private', $property->is_private ?? 0) === 0)
                  ? 'checked' : '' }} required>
                  <label for="is_private" class="lh-copy">@lang('forms.TEXT_NO')</label>
                </div>
                <div class="items-center w-20 di pr3">
                  <input value="1"
                  type="radio" name="is_private" id="is_private_yes"
                  {{ (Input::old('is_private', $property->is_private ?? '') === 1)
                  ? 'checked' : '' }}>
                  <label for="is_private" class="lh-copy">@lang('forms.TEXT_YES')</label>
                </div>
                @if ($errors->has('is_private'))
                  <small id="is_private-error" class="f6 black-60 db mb2 pv1 red">{{ $errors->first('is_private') }}</small>
                @endif
              </div>
            </div>
          </div>Z

      </form>
    </div>
  </article>
</div>
@endsection

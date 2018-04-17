@extends('layouts.first')
@section('title', trans('site.PAGE_TITLE.PROPERTY'))
@section('content')
<section class="cf mw5 mw7-ns center pa3 ph5-ns">
  <div class="fl w-100 w-50-m w-34-l bg-black-10 pv3 ph2 mb1 mr1">
    <b class="db f4 mb1">@lang('property.PROPERTY_TYPE')</b>
    <span class="f5 db lh-copy measure">
    {{{ ucfirst($property->property_type) }}}</span>
  </div>
  <div class="fl w-100 w-50-m w-34-l bg-black-10 pv3 ph2 mb1 mr1">
    <b class="db f4 mb1">@lang('property.APARTMENT_TYPE')</b>
    <span class="f5 db lh-copy measure">
    {{{ ucfirst($property->apartment_type) }}}</span>
  </div>
  <div class="fl w-100 w-50-m w-30-l bg-black-10 pv3 ph2 mb1">
    <b class="db f4 mb1">@lang('forms.PROPERTY.MEASUREMENT')</b>
    <span class="f5 db lh-copy measure">
    {{{ $property->measurement }}} {{{ $property->measurement_type }}}</span>
  </div>
  <div class="fl w-100 w-50-m w-100-l bg-black-10 pv3 ph2 mb1">
    <b class="db f4 mb1">@lang('forms.PROPERTY.ADDRESS')</b>
    <span class="f5 db lh-copy measure">
    {{{ $property->address }}}</span>
  </div>
  <div class="fl w-100 w-50-m w-25-l bg-black-10 pv3 ph2 mb1 mr1">
    <b class="db f4 mb1">@lang('forms.PROPERTY.SALE_PRICE')</b>
    <span class="f5 db lh-copy measure">@lang('site.INR')
    {{{ number_format($property->sale_price) ?? trans('site.NO_DATA') }}}</span>
  </div>
  <div class="fl w-100 w-50-m w-33-l bg-black-10 pv3 ph2 mb1 mr1">
    <b class="db f4 mb1">@lang('forms.PROPERTY.MIN_EXPECTED_PRICE')</b>
    <span class="f5 db lh-copy measure">@lang('site.INR')
    {{{ number_format($property->min_expected_price) ?? trans('site.NO_DATA') }}}</span>
  </div>
  <div class="fl w-100 w-50-m w-40-l bg-black-10 pv3 ph2 mb1 mr1">
    <b class="db f4 mb1">@lang('forms.PROPERTY.MAINTENANCE_CHARGES')</b>
    <span class="f5 db lh-copy measure">@lang('site.INR')
    {{{ number_format($property->maintenance_charges) ?? trans('site.NO_DATA') }}}</span>
  </div>
  <div class="fl w-100 w-50-m w-100-l bg-black-10 pv3 ph2 mb1">
    <b class="db f4 mb1">@lang('forms.PROPERTY.OWNERSHIP')</b>
    <span class="f5 db lh-copy measure">
    {{{ $property->ownership ?? trans('site.NO_DATA') }}}

    {{{ $property->joint_owners_name ? '(' . $property->joint_owners_name . ')' : '' }}}
    </span>
  </div>
  <div class="fl w-100 w-50-m w-100-l bg-black-10 pv3 ph2 mb1">
    <b class="db f4 mb1">@lang('forms.PROPERTY.AMENITIES')</b>
    <span class="f5 db lh-copy measure">
    {{{ $property->amenities ?? trans('site.NO_DATA') }}}</span>
  </div>
  <div class="fl w-100 w-50-m w-100-l bg-black-10 pv3 ph2 mb1">
    <b class="db f4 mb1">@lang('forms.PROPERTY.LOCALITY_FEATURES')</b>
    <span class="f5 db lh-copy measure">
    {{{ $property->locality_features ?? trans('site.NO_DATA') }}}</span>
  </div>
  <div class="fl w-100 w-50-m w-100-l bg-black-10 pv3 ph2 mb1">
    <b class="db f4 mb1">@lang('forms.PROPERTY.HOMELOAN_DETAILS')</b>
    <span class="f5 db lh-copy measure">
    {{{ $property->homeloan_details ?? trans('site.NO_DATA') }}}</span>
  </div>
  <div class="fl w-100 w-50-m w-100-l bg-black-10 pv3 ph2 mb1">
    <b class="db f4 mb1">@lang('forms.PROPERTY.PRIVATE_PROPERTY')</b>
    <span class="f5 db lh-copy measure">
    {{{ $property->is_private ? trans('forms.TEXT_YES') : trans('forms.TEXT_NO') }}}</span>
    @if ($property->is_private == 1)
      <span class="db lh-title">@lang('property.LAST_UPDATED')&colon;{{{ $property->is_private_ts }}}</span>
      <small id="comment-desc" class="f5 red">@lang('property.PRIVATE_PROPERTY_MESSAGE')</small>
    @endif
  </div>
</section>

@endsection
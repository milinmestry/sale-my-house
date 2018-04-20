@extends('layouts.first')
@section('title', trans('site.PAGE_TITLE.PROPERTY'))
@section('content')

<section class="cf w-100 w-80-ns pa2-ns center">
  @forelse ($allProperties as $propertyObj)
  <article class="fl-ns br2 ba dark-gray b--black-10 ma4-ns w-100 w-50-m w-25-l mw5 center mv4">
    <img src="{{ asset('images/city-275-208-1.jpg') }}" class="db w-100 br2 br--top" alt="for sale">
    <div class="pa2 ph3-ns pb3-ns bg-moon-gray">
      <div class="dt w-100 mt1">
        <div class="dtc">
          <h1 class="f5 f4-ns mv0">{{ $propertyObj->apartment_type }}</h1>
        </div>
        <div class="dtc tr">
          <h2 class="f5 mv0">@lang('site.INR') {{ number_format($propertyObj->sale_price) }}</h2>
        </div>
      </div>
      <p class="f6 lh-copy measure mt2 dark-gray">
        {{ $propertyObj->address }}
      </p>
      <div class="tr">
      <a class="f6 link dim br2 ph3 pv2 dib white bg-mid-gray" href="#">@lang('site.CONTACT_TEXT')</a></div>
    </div>
  </article>
  @empty
  <div class="pa2 ph3-ns pb3-ns f4 tc">@lang('property.NO_PROPERTIES_BUYER')</div>
  @endforelse

</section>
@endsection
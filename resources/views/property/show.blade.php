@extends('layouts.first')
@section('title', trans('site.PAGE_TITLE.PROPERTY'))
@section('content')
<section class="cf mw5 mw7-ns center bg-moon-gray pa3 ph5-ns">
  <div class="fl w-100 w-50-m w-34-l bg-black-10 pv3 ph2 mb1 mr1">
    <b class="db f4 mb1">@lang('property.PROPERTY_TYPE')</b>
    <span class="f5 db lh-copy measure">
    {{ ucfirst($property->property_type) }}</span>
  </div>
  <div class="fl w-100 w-50-m w-34-l bg-black-10 pv3 ph2 mb1 mr1">
    <b class="db f4 mb1">@lang('property.APARTMENT_TYPE')</b>
    <span class="f5 db lh-copy measure">
    {{ ucfirst($property->apartment_type) }}</span>
  </div>
  <div class="fl w-100 w-50-m w-30-l bg-black-10 pv3 ph2 mb1">
    <b class="db f4 mb1">@lang('forms.PROPERTY.MEASUREMENT')</b>
    <span class="f5 db lh-copy measure">
    {{ $property->measurement }} {{ $property->measurement_type }}</span>
  </div>
  <div class="fl w-100 w-50-m w-100-l bg-black-10 pv3 ph2 mb1">
    <b class="db f4 mb1">@lang('forms.PROPERTY.ADDRESS')</b>
    <span class="f5 db lh-copy measure">
    {{ $property->address }}</span>
  </div>
  <div class="fl w-100 w-50-m w-25-l bg-black-10 pv3 ph2 mb1 mr1">
    <b class="db f4 mb1">@lang('forms.PROPERTY.SALE_PRICE')</b>
    <span class="f5 db lh-copy measure">@lang('site.INR')
    {{ number_format($property->sale_price) }}</span>
  </div>
  <div class="fl w-100 w-50-m w-33-l bg-black-10 pv3 ph2 mb1 mr1">
    <b class="db f4 mb1">@lang('forms.PROPERTY.MIN_EXPECTED_PRICE')</b>
    <span class="f5 db lh-copy measure">@lang('site.INR')
    {{ number_format($property->min_expected_price) }}</span>
  </div>
  <div class="fl w-100 w-50-m w-40-l bg-black-10 pv3 ph2 mb1 mr1">
    <b class="db f4 mb1">@lang('forms.PROPERTY.MAINTENANCE_CHARGES')</b>
    <span class="f5 db lh-copy measure">@lang('site.INR')
    {{ number_format($property->maintenance_charges) }}</span>
  </div>

</section>

<section class="mw5 mw7-ns center bg-moon-gray pa3 ph5-ns">
<ul class="list pl0">
    <li class="pa2 pa3-ns bb b--black-10 w-30">
      <b class="db f4 mb1">@lang('property.PROPERTY_TYPE')</b>
      <span class="f5 db lh-copy measure ml3">
        {{ ucfirst($property->property_type) }}</span>
    </li>
    <li class="pa2 pa3-ns bb b--black-10 w-30">
      <b class="db f4 mb1">@lang('property.APARTMENT_TYPE')</b>
      <span class="f5 db lh-copy measure ml3">
        {{ ucfirst($property->apartment_type) }}</span>
    </li>
    <li class="pa3 pa4-ns bb b--black-10">
      <b class="db f3 mb1">
        ascender
      </b>
      <span class="f5 db lh-copy measure">
        The part of lowercase letters (such as k, b, and d) that ascends above the
        x-height of the other lowercase letters in a face.
      </span>
    </li>
    <li class="pa3 pa4-ns bb b--black-10">
      <b class="db f3 mb1">
        baseline
      </b>
      <span class="f5 db lh-copy measure">
        The imaginary line on which the majority of the characters in a typeface rest.
      </span>
    </li>
    <li class="pa3 pa4-ns bb b--black-10">
      <b class="db f3 mb1">
        body text
      </b>
      <span class="f5 db lh-copy measure">
        The paragraphs in a document that make up the bulk of its content. The body text should be set in an appropriate and easy-to-read face, typically at 10- or 12-point size.
      </span>
    </li>
    <li class="pa3 pa4-ns bb b--black-10">
      <b class="db f3 mb1">
        boldface
      </b>
      <span class="f5 db lh-copy measure">
        A typeface that has been enhanced by rendering it in darker, thicker strokes so that it will stand out on the page. Headlines that need emphasis should be boldface. Italics are preferable for emphasis in body text.
      </span>
    </li>
    <li class="pa3 pa4-ns bb b--black-10">
      <b class="db f3 mb1">
        bullet
      </b>
      <span class="f5 db lh-copy measure">
      A dot or other special character placed at the left of items in a list to show that they are individual, but related, points.
      </span>
    </li>
    <li class="pa3 pa4-ns bb b--black-10">
      <b class="db f3 mb1">
  cap height
      </b>
      <span class="f5 db lh-copy measure">
      The height from the baseline to the top of the uppercase letters in a font. This may or may not be the same as the height of ascenders. Cap height is used in some systems to measure the type size.
      </span>
    </li>
    <li class="pa3 pa4-ns">
      <b class="db f3 mb1">
        centered
      </b>
      <span class="f5 db lh-copy measure">
      Text placed at an equal distance from the left and right margins. Headlines are often centered. It is generally not good to mix centered text with flush left or flush right text.
      </span>
    </li>
  </ul>
</article>
@endsection
@extends('layouts.first')

@section('title', trans('site.PAGE_TITLE.PROPERTY'))

@section('content')

@includeIf('global.success')
@includeIf('global.error')
@includeIf('global.warn')

<div class="pa4-ns pa2">
  <h1 class="f4-ns f5 bg-black-30 br--top black-60 pv2 ph3 mv0">@lang('property.LIST_HEADING')</h1>
  <div class="overflow-auto">
    <div class="pa2 tr">
        <a class="black-80 fw7 no-underline underline-hover hover-green" href="{{ url('property/create') }}">&plus; @lang('site.MENU_LINKS.ADD_PROPERTY')</a>
    </div>

    <table class="f6 w-100 mw9 center" cellspacing="0">
      <thead>
        <tr class="stripe-dark">
          <th class="fw6 tc pa2 bg-black-10"></th>
          <th class="fw6 tc pa2 bg-black-10">@lang('property.PROPERTY_TYPE')</th>
          <th class="fw6 tc pa2 bg-black-10">@lang('property.APARTMENT_TYPE')</th>
          <th class="fw6 tc pa2 bg-black-10">@lang('property.APARTMENT_ADDRESS')</th>
          <th class="fw6 tc pa2 bg-black-10">@lang('property.SALE_PRICE')</th>
          <th class="fw6 tc pa2 bg-black-10">@lang('property.MIN_EXPECTED_PRICE')</th>
          <th class="fw6 tc pa2 bg-black-10">@lang('property.LAST_UPDATED')</th>
          <th class="fw6 tc pa2 bg-black-10">@lang('site.ACTIONS_TEXT')</th>
        </tr>
      </thead>
      <tbody class="lh-copy">
        @forelse ($allProperties as $propertyObj)
        <tr class="hover-bg-light-gray">
          <td class="pa2 bb b--black-10">
            @if ($propertyObj->is_private === 1)
              <a title="@lang('property.PRIVATE_PROPERTY_MESSAGE')">
              @svgEyeWithLine()
              @endsvgEyeWithLine
              </a>
            @else
              <a title="@lang('property.PUBLIC_PROPERTY_MESSAGE')">
              @svgEyeOpen()
              @endsvgEyeOpen
              </a>
            @endif
          </td>
          <td class="pa2 bb b--black-10">
            {{ ucfirst($propertyObj->property_type) }}</td>
          <td class="pa2 bb b--black-10">{{ $propertyObj->apartment_type }}</td>
          <td class="pa2 bb b--black-10">{{ $propertyObj->address }}</td>
          <td class="pa2 bb b--black-10 tr">{{ $propertyObj->sale_price }}</td>
          <td class="pa2 bb b--black-10 tr">{{ $propertyObj->min_expected_price
           }}</td>
          <td class="pa2 bb b--black-10">{{ $propertyObj->updated_at }}</td>
          <td class="pa2 bb b--black-10 tl">
            <section class="pa2">
              <a class="link no-underline underline-hover black dib ph2 pv1 mv1 bg-black-10 hover-bg-silver" href="{{ route('property.edit', $propertyObj->id) }}">@lang('site.EDIT_TEXT')</a>
              <a class="link no-underline underline-hover black dib ph2 pv1 bg-black-10 hover-bg-silver" href="{{ route('property.show', $propertyObj->id) }}">@lang('site.SHOW_TEXT')</a>
            </section>
          </td>
        </tr>
        @empty
        <tr class="stripe-dark">
          <td class="pa2 tc" colspan="8">@lang('property.NO_PROPERTIES_SELLER')</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

@endsection
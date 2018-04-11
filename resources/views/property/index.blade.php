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
          <th class="fw6 tc pa3 bg-black-10">@lang('property.PROPERTY_TYPE')</th>
          <th class="fw6 tc pa3 bg-black-10">@lang('property.APARTMENT_TYPE')</th>
          <th class="fw6 tc pa3 bg-black-10">@lang('property.APARTMENT_ADDRESS')</th>
          <th class="fw6 tc pa3 bg-black-10">@lang('property.SALE_PRICE')</th>
          <th class="fw6 tc pa3 bg-black-10">@lang('property.MIN_EXPECTED_PRICE')</th>
          <th class="fw6 tc pa3 bg-black-10">@lang('property.LAST_UPDATED')</th>
          <th class="fw6 tc pa3 bg-black-10">@lang('site.ACTIONS_TEXT')</th>
        </tr>
      </thead>
      <tbody class="lh-copy">
        @forelse ($allProperties as $propertyObj)
        <tr class="hover-bg-light-gray">
          <td class="pa3 bb b--black-10">{{ $propertyObj->property_type }}</td>
          <td class="pa3 bb b--black-10">{{ $propertyObj->apartment_type }}</td>
          <td class="pa3 bb b--black-10">{{ $propertyObj->address }}</td>
          <td class="pa3 bb b--black-10 tr">{{ $propertyObj->sale_price }}</td>
          <td class="pa3 bb b--black-10 tr">{{ $propertyObj->min_expected_price
           }}</td>
          <td class="pa3 bb b--black-10">{{ $propertyObj->updated_at }}</td>
          <td class="pa3 bb b--black-10">
            <div class="pa3 lh-copy">
                <a class="black no-underline underline-hover bg-black-10 pa2 hover-bg-silver" href="{{ route('property.edit', $propertyObj->id) }}">@lang('site.EDIT_TEXT')</a>
            </div>
          </td>
        </tr>
        @empty
        <tr class="stripe-dark">
          <td class="pa3 tc" colspan="7">@lang('property.NO_PROPERTIES')</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

@endsection
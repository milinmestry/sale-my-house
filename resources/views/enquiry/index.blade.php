@extends('layouts.first')

@section('title', trans('site.PAGE_TITLE.PROPERTY'))

@section('content')

@includeIf('global.success')
@includeIf('global.error')
@includeIf('global.warn')

<div class="pa4-ns pa2">
  <h1 class="f4-ns f5 bg-black-30 br--top black-60 pv2 ph3 mv0">@lang('enquiry.LIST_HEADING')</h1>
  <div class="overflow-auto">
    <div class="pa2 tr">
        <a class="black-80 fw7 no-underline underline-hover hover-green" href="{{ url('enquiry/create') }}">&plus; @lang('enquiry.ADD_ENQUIRY')</a>
    </div>

    <table class="f6 w-100 mw9 center" cellspacing="0">
      <thead>
        <tr class="stripe-dark">
          <th class="fw6 tc pa2 bg-black-10">@lang('enquiry.MOBILE')</th>
          <th class="fw6 tc pa2 bg-black-10">@lang('enquiry.CONTACT_NUMBERS')</th>
          <th class="fw6 tc pa2 bg-black-10">@lang('enquiry.CASH_IN_HAND')</th>
          <th class="fw6 tc pa2 bg-black-10">@lang('enquiry.NEED_HOMELOAN')</th>
          <th class="fw6 tc pa2 bg-black-10">@lang('enquiry.OFFER_AMOUNT')</th>
          <th class="fw6 tc pa2 bg-black-10">@lang('enquiry.ENQUIRY_DATETIME')</th>
          <th class="fw6 tc pa2 bg-black-10">@lang('site.ACTIONS_TEXT')</th>
        </tr>
      </thead>
      <tbody class="lh-copy">
        @forelse ($allEnquries as $enquiryObj)
        <tr class="hover-bg-light-gray">
          <td class="pa2 bb b--black-10">
            {{ ucfirst($enquiryObj->fullname) }}</td>
          <td class="pa2 bb b--black-10">{{ $enquiryObj->primary_mobile }}</td>
          <td class="pa2 bb b--black-10">{{ $enquiryObj->contant_numbers }}</td>
          <td class="pa2 bb b--black-10">{{ $enquiryObj->cash_in_hand }}</td>
          <td class="pa2 bb b--black-10 tr">{{ $enquiryObj->need_homeloan }}</td>
          <td class="pa2 bb b--black-10 tr">{{ $enquiryObj->price_quoted
           }}</td>
          <td class="pa2 bb b--black-10">{{ $enquiryObj->created_at }}</td>
          <td class="pa2 bb b--black-10 tl">
            <section class="pa2">
              <a class="link no-underline underline-hover black dib ph2 pv1 mv1 bg-black-10 hover-bg-silver" href="{{ route('enquiry.edit', $enquiryObj->id) }}">@lang('site.EDIT_TEXT')</a>
              <a class="link no-underline underline-hover black dib ph2 pv1 bg-black-10 hover-bg-silver" href="{{ route('enquiry.show', $enquiryObj->id) }}">@lang('site.SHOW_TEXT')</a>
            </section>
          </td>
        </tr>
        @empty
        <tr class="stripe-dark">
          <td class="pa2 tc" colspan="7">@lang('enquiry.NO_ENQUIRIES_SELLER')</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

@endsection
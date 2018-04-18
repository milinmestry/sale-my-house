@extends('layouts.first')

@section('title', trans('site.PAGE_TITLE.PROPERTY'))

@section('content')

@includeIf('global.success')
@includeIf('global.error')
@includeIf('global.warn')
<?xml version="1.0" encoding="iso-8859-1"?>
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="16.626px" height="16.627px" viewBox="0 0 511.626 511.627" style="enable-background:new 0 0 511.626 511.627;"
	 xml:space="preserve">
<g>
	<g>
		<path d="M361.161,291.652c15.037-21.796,22.56-45.922,22.56-72.375c0-7.422-0.76-15.417-2.286-23.984l-79.938,143.321
			C326.235,329.101,346.125,313.438,361.161,291.652z"/>
		<path d="M372.872,94.221c0.191-0.378,0.28-1.235,0.28-2.568c0-3.237-1.522-5.802-4.571-7.715c-0.568-0.38-2.423-1.475-5.568-3.287
			c-3.138-1.805-6.14-3.567-8.989-5.282c-2.854-1.713-5.989-3.472-9.422-5.28c-3.426-1.809-6.375-3.284-8.846-4.427
			c-2.479-1.141-4.189-1.713-5.141-1.713c-3.426,0-6.092,1.525-7.994,4.569l-15.413,27.696c-17.316-3.234-34.451-4.854-51.391-4.854
			c-51.201,0-98.404,12.946-141.613,38.831C70.998,156.08,34.836,191.385,5.711,236.114C1.903,242.019,0,248.586,0,255.819
			c0,7.231,1.903,13.801,5.711,19.698c16.748,26.073,36.592,49.396,59.528,69.949c22.936,20.561,48.011,37.018,75.229,49.396
			c-8.375,14.273-12.562,22.556-12.562,24.842c0,3.425,1.524,6.088,4.57,7.99c23.219,13.329,35.97,19.985,38.256,19.985
			c3.422,0,6.089-1.529,7.992-4.575l13.99-25.406c20.177-35.967,50.248-89.931,90.222-161.878
			C322.908,183.871,352.886,130.005,372.872,94.221z M158.456,362.885C108.97,340.616,68.33,304.93,36.547,255.822
			c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.206-17.417,64.237c0,20.365,4.661,39.68,13.99,57.955
			c9.327,18.274,22.27,33.4,38.83,45.392L158.456,362.885z M265.525,155.887c-2.662,2.667-5.906,3.999-9.712,3.999
			c-16.368,0-30.361,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971c0,3.811-1.336,7.044-3.999,9.71
			c-2.668,2.667-5.902,3.999-9.707,3.999c-3.809,0-7.045-1.334-9.71-3.999c-2.667-2.666-3.999-5.903-3.999-9.71
			c0-23.79,8.52-44.206,25.553-61.242c17.034-17.034,37.447-25.553,61.241-25.553c3.806,0,7.043,1.336,9.713,3.999
			c2.662,2.664,3.996,5.901,3.996,9.707C269.515,149.992,268.181,153.228,265.525,155.887z"/>
		<path d="M505.916,236.114c-10.853-18.08-24.603-35.594-41.255-52.534c-16.646-16.939-34.022-31.496-52.105-43.68l-17.987,31.977
			c31.785,21.888,58.625,49.87,80.51,83.939c-23.024,35.782-51.723,65-86.07,87.648c-34.358,22.661-71.712,35.693-112.065,39.115
			l-21.129,37.688c42.257,0,82.18-9.038,119.769-27.121c37.59-18.076,70.668-43.488,99.216-76.225
			c13.322-15.421,23.695-29.219,31.121-41.401c3.806-6.476,5.708-13.046,5.708-19.702
			C511.626,249.157,509.724,242.59,505.916,236.114z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>

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
          <td class="pa2 tc" colspan="8">@lang('property.NO_PROPERTIES')</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

@endsection
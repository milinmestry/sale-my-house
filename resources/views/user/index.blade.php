@extends('layouts.first')

@section('title', trans('site.PAGE_TITLE.USER'))

@section('content')

@includeIf('global.success')

<section class="w-100 pv3 f6 ph3 ph4-ns">
  <div class="mw9 center ph3-ns bg-black-10">
    <div class="tc pt1">
      <h1 class="f2-l f4 ttu tracked">@lang('site.USER_TYPE_SELECTION')</h1>
    </div>

    <div class="cf ph2-ns">
      <div class="fl w-100 w-third-ns pa2">
        <article class="mw5 center bg-white br3 pa3 pa4-ns mv3 ba @lang('site.SELLER_COLOR')">
          @empty($seller)
          <a class="@lang('site.SELLER_COLOR') no-underline grow dib" href="{{ route('seller.create') }}">
          @endempty
            <div class="tc">
              <div class="dt w3 center">
                <div class="f6 bg-@lang('site.SELLER_COLOR') ba b--black-10 br-100 tc dtc h3 v-mid pa2">
                </div>
              </div>
              <h1 class="f4">@lang('site.STR_SELLER')</h1>
              <hr class="mw3 bb bw1 b--black-10">
            </div>

            @if (!empty($seller))
            <p class="lh-copy measure center f6 @lang('site.SELLER_COLOR')">
              @lang('site.SUCCESS_MESSAGES.SELLER_STORED')
            </p>
            @else
            <p class="lh-copy measure center f6 black-70">
              @lang('site.PARA_SELLER_MEANS')
            </p>
            @endif
          @empty($seller)
          </a>
          @endempty
        </article>
      </div>

      <div class="fl w-100 w-third-ns pa2">
        <article class="mw5 center bg-white br3 pa3 pa4-ns mv3 ba @lang('site.BUYER_COLOR')">
          @empty($buyer)
          <a class="@lang('site.BUYER_COLOR') no-underline grow dib" href="{{ route('buyer.create') }}">
          @endempty
            <div class="tc">
              <div class="dt w3 center">
                <div class="f6 bg-@lang('site.BUYER_COLOR') ba b--black-10 br-100 tc dtc h3 v-mid pa2">
                </div>
              </div>
              <h1 class="f4">@lang('site.STR_BUYER')</h1>
              <hr class="mw3 bb bw1 b--black-10">
            </div>
            @if (!empty($buyer))
              <p class="lh-copy measure center f6 @lang('site.BUYER_COLOR')">
                @lang('site.SUCCESS_MESSAGES.BUYER_STORED')
              </p>
            @else
              <p class="lh-copy measure center f6 black-70">
                  @lang('site.PARA_BUYER_MEANS')
              </p>
            @endif
          @empty($buyer)
          </a>
          @endempty
        </article>
      </div>

      <div class="fl w-100 w-third-ns pa2">
        <article class="mw5 center bg-white br3 pa3 pa4-ns mv3 ba @lang('site.BROKER_COLOR')">
          @empty($broker)
          <a class="@lang('site.BROKER_COLOR') no-underline grow dib" href="{{ route('broker.create') }}">
          @endempty
            <div class="tc">
              <div class="dt w3 center">
                <div class="f6 bg-@lang('site.BROKER_COLOR') ba b--black-10 br-100 tc dtc h3 v-mid pa2">
                </div>
              </div>
              <h1 class="f4">@lang('site.STR_BROKER')</h1>
              <hr class="mw3 bb bw1 b--black-10">
            </div>
            @if (!empty($broker))
            <p class="lh-copy measure center f6 black-70">
              @lang('site.SUCCESS_MESSAGES.BROKER_STORED')
            </p>
            @else
            <p class="lh-copy measure center f6 black-70">
              @lang('site.PARA_BROKER_MEANS')
            </p>
            @endif
          @empty($broker)
          </a>
          @endempty
        </article>
      </div>
    </div>
  </div>
</section>
@endsection
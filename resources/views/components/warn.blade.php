<section class="ph3 ph5-ns pv2">
  <article class="mw7 center br2 ba b--orange bg-light-yellow">
    <div class="dt-ns dt--fixed-ns w-100">
      <div class="pa3 pa4-ns dtc-ns v-mid">
        <div>
          <h2 class="fw4 orange mt0 mb3">{{ $title }}</h2>
          <p class="black-80 measure lh-copy mv0">
          {{ $message }}
          </p>
        </div>
      </div>
      @if ($anchorUrl)
      <div class="pa3 pa4-ns dtc-ns v-mid">
        <a href="{{ $anchorUrl }}" class="no-underline f5 tc db w-100 pv3 bg-animate bg-orange hover-bg-dark-blue white br2">{{ $anchorLable }}</a>
      </div>
      @endif
    </div>
    {{ $slot }}
  </article>
</section>
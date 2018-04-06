@if (session('warn'))
{{--  <div class="flex items-center justify-center pa3 bg-light-yellow black-60 ba b--yellow f5">
    <span class="lh-title ml3">{{ session('warn') }}</span>
  </div>  --}}

  <section class="mw5 mw7-ns center bg-light-yellow pa3 ph5-ns">
    {{--  <h3 class="mt0">Centeyellow Container</h3>  --}}
    <p class="lh-copy f5 tc">
      {{ session('warn') }}
    </p>
  </section>
@endif
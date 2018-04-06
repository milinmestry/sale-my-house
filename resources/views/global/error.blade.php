@if (session('error'))
  <section class="mw5 mw7-ns center bg-light-red pa2 ph3-ns">
    {{--  <h3 class="mt0">Centered Container</h3>  --}}
    <p class="lh-copy f5 tc">
      {{ session('error') }}
    </p>
  </section>
@endif
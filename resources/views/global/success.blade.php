@if (session('status'))
{{--  <div class="flex items-center justify-center pa3 bg-light-green black-60 ba b--green f5">
    <span class="lh-title ml3">{{ session('status') }}</span>
  </div>  --}}

  <section class="mw5 mw7-ns center bg-light-green pa3 ph5-ns">
    {{--  <h3 class="mt0">Centered Container</h3>  --}}
    <p class="lh-copy f5">
      {{ session('status') }}
    </p>
  </section>
@endif
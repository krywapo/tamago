@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

  @endif

  <section class="splide" aria-label="Splide Basic HTML Example">
    <div class="splide__track">
      <ul class="splide__list">

        @while(have_posts()) @php(the_post())
            @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
        @endwhile
        
      </ul>
    </div>
  </section>

@endsection

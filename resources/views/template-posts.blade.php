{{--
  Template Name: Posts
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')

    @include('partials.content-custom-posts')

  @endwhile
@endsection

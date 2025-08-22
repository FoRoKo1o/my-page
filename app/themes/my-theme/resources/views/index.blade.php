@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="mt-8 flex justify-center">
    {!! get_the_posts_navigation() !!}
  </div>

  <x-latestPosts />
@endsection




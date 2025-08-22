<div>

  @php
    $posts_displayed = 0;
    $max_posts = 3;
  @endphp

  @if (!have_posts())
    <x-alert type="warning" class="mb-6">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    <div class="mb-8">
      {!! get_search_form(false) !!}
    </div>
  @endif

  <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
    @while(have_posts() && $posts_displayed < $max_posts) 
      @php(the_post())
      <article class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-200">
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
      </article>
      @php($posts_displayed++)
    @endwhile
  </div>

  <div class="mt-8 flex justify-center">
    {!! get_the_posts_navigation() !!}
  </div>
</div>
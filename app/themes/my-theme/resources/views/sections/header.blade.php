<header class="bg-gray-900 text-white shadow-md">
  <div class="container mx-auto flex items-center justify-between p-4">

    <!-- Logo / brand -->
    <a class="text-xl font-bold hover:text-green-400" href="{{ home_url('/') }}">
      {{ get_bloginfo('name') }}
    </a>

    <!-- Desktop menu -->
    @if (has_nav_menu('primary_navigation'))
      <nav class="hidden md:flex space-x-6" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'flex space-x-6',
            'container' => false,
            'echo' => false,
        ]) !!}
      </nav>
    @endif

    <!-- Hamburger (mobile) -->
    <div class="md:hidden">
      <button id="mobile-menu-button" class="focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>

  </div>

  <!-- Mobile menu (hidden by default) -->
  <div id="mobile-menu" class="hidden md:hidden bg-gray-800">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'flex flex-col space-y-2 p-4',
          'container' => false,
          'echo' => false,
      ]) !!}
    @endif
  </div>
</header>

<header class="container" id="header">
  <a id="logo" href="{{ home_url('/') }}">
    <img src="@asset('images/LogoClean2.svg')" />
  </a>
  <nav>
    @if (has_nav_menu('main-menu'))
      {!! wp_nav_menu(['theme_location' => 'main-menu', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
</header>

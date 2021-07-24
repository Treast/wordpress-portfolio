<footer class="container">
  <p class="copyright">
    © Vincent Riva • <a href="#">Mentions légales</a>
  </p>
  <nav>
    @if (has_nav_menu('footer-menu'))
      {!! wp_nav_menu(['theme_location' => 'footer-menu', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
</footer>

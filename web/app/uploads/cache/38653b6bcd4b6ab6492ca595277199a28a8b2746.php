<footer class="container">
  <p class="copyright">
    © Vincent Riva • <a href="#">Mentions légales</a>
  </p>
  <nav>
    <?php if(has_nav_menu('footer-menu')): ?>
      <?php echo wp_nav_menu(['theme_location' => 'footer-menu', 'menu_class' => 'nav']); ?>

    <?php endif; ?>
  </nav>
</footer>

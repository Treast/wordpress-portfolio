<header class="container" id="header">
  <a id="logo" href="<?php echo e(home_url('/')); ?>">
    <img src="<?= App\asset_path('images/LogoClean2.svg'); ?>" />
  </a>
  <nav>
    <?php if(has_nav_menu('main-menu')): ?>
      <?php echo wp_nav_menu(['theme_location' => 'main-menu', 'menu_class' => 'nav']); ?>

    <?php endif; ?>
  </nav>
</header>

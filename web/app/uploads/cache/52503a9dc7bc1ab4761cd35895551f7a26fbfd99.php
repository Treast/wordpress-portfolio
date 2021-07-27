<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>

  <section class="container page-header">
    <div class="page-header__content">
      <h1><?php echo e($page->title); ?></h1>
      <h2><?php echo e($subtitle); ?></h2>
      <p><?php echo e($page->content); ?></p>

      <?php echo do_shortcode('[contact-form-7 id="80" title="Contact form 1"]'); ?>

    </div>
  </section>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
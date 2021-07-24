<?php $__env->startSection('content'); ?>
  <section class="container page-header">
    <div class="page-header-content">
      <h2><?php echo e($header->page_subtitle); ?></h2>
      <h1><?php echo e($header->page_title); ?></h1>
    </div>
    <div class="page-header-annexe">
      <h2><?php echo e($header->annexe_title); ?></h2>
      <p><?php echo e($header->annexe_subtitle); ?></p>
      <a href="#projects" class="link">Projets</a>
    </div>
  </section>
  
  <?php echo $__env->make('partials.projects-list', ['projects' => $projects], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>

  <section class="container page-header">
    <div class="page-header__content">
      <h1><?php echo e($project->title); ?></h1>
      <h2><?php echo e($project->subtitle); ?></h2>
    </div>

    <div class="page-header__image">
      <?php echo $__env->make('components.image-responsive', ['imageId' => $project->thumbnailID, 'size' => 'large', 'cover' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </section>

  <section class="container columns">
    <div class="col">
      <p><?php echo $project->content; ?></p>
      
      <?php if($project->website): ?>
        <a href="<?php echo e($project->website); ?>" class="link">Visiter le site</a>
      <?php endif; ?>
    </div>
    <div class="col">
      <?php echo $__env->make('components.image-responsive', ['imageId' => $project->smallImage['ID'], 'size' => 'large', 'cover' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </section>

  <section class="container full-image">
    <div class="full-image__content">
      <h2><?php echo e($project->caption); ?></h2>
      
      <?php echo $__env->make('components.image-responsive', ['imageId' => $project->fullImage['ID'], 'size' => 'full'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </section>
  <?php endwhile; ?>

  <section class="container project-footer">
    <a href="<?php echo e($next_project->permalink); ?>">
      <span class="link link--inverse">Projet suivant</span>
      <h2><?php echo e($next_project->title); ?></h2>
    </a>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
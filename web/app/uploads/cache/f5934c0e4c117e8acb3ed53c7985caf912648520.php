<?php $__env->startSection('content'); ?>
  <section class="container page-header">
    <div class="page-header__content">
      <h2><?php echo e($header->page_subtitle); ?></h2>
      <h1><?php echo e($header->page_title); ?></h1>
    </div>
    <div class="page-header__annexe">
      <h2><?php echo e($header->annexe_title); ?></h2>
      <p><?php echo e($header->annexe_subtitle); ?></p>
      <a href="#projects" class="link">Projets</a>
    </div>
  </section>
  
  <?php echo $__env->make('partials.projects-list', ['projects' => $projects], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <section class="container inner-text">
    <div class="inner-text__content">
      <?php echo $projects_list->content; ?>

      <a href="<?php echo e($projects_archives); ?>" class="link"><?php echo e($projects_list->link_text); ?></a>
    </div>
  </section>

  <section class="container full-section full-section--inverse" id="about">
    <h2><?php echo e($about->title); ?></h2>
    <div class="full-section__content">
      <?php echo $about->content; ?>


      <a href="https://www.linkedin.com/in/vincent-riva/" class="link link--inverse">LinkedIn</a>
    </div>

    <div class="full-section__annexe">
      <dl>
        <dt>Conception</dt>
        <dd><?php echo e($about->tags->conception); ?></dd>

        <dt>Frontend</dt>
        <dd><?php echo e($about->tags->frontend); ?></dd>
        
        <dt>Backend</dt>
        <dd><?php echo e($about->tags->backend); ?></dd>
      </dl>
    </div>
  </section>

  <section class="container inner-text full-section full-section--right" id="contact">
    <h2><?php echo e($contact->title); ?></h2>
    <div class="inner-text__content">
      <?php echo $contact->content; ?>


      <a href="/contact" class="link">Contactez-moi</a>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
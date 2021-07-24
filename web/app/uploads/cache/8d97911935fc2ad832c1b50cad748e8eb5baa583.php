<?php $__env->startSection('content'); ?>
  <section class="container page-header page-header--small">
    <div class="page-header__content">
        <p>Je conçois et développe des projets d’impact, entre site web, application et expérience interactive.</p>
    </div>
  </section>

  <?php echo $__env->make('partials.projects-list', ['projects' => $projects], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <section class="container inner-text full-section full-section--inverse full-section--right" id="contact">
    <h2>Contact</h2>
    <div class="inner-text__content">
      <p>Vous avez besoin d’un développeur pour un projet ?</p>

      <a href="#" class="link link--inverse">Contactez-moi</a>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
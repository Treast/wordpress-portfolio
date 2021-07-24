<article class="project">
    <h2><?php echo e($project->title); ?></h2>
    <a href="<?php echo e($project->permalink); ?>" class="grid">
        <div class="project__content">
            <ul>
                <li><?php echo e($project->type); ?></li>
                <li><?php echo e($project->role); ?></li>
            </ul>
            <span class="link">Voir le projet</span>
        </div>
        <div class="project__cover">
            <?php echo $project->thumbnail; ?>

        </div>
    </a>
</article>
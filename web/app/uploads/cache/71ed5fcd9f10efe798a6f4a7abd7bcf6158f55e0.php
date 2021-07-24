<article class="project grid">
    <h2><?php echo e($project->title); ?></h2>
    <div class="project-content">
        <ul>
            <li><?php echo e($project->type); ?></li>
            <li><?php echo e($project->role); ?></li>
        </ul>
        <a href="#" class="link">Voir le projet</a>
    </div>
    <div class="project-cover">
        <?php echo $project->thumbnail; ?>

    </div>
</article>
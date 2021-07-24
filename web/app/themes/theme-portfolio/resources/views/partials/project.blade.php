<article class="project grid">
    <h2>{{ $project->title }}</h2>
    <div class="project-content">
        <ul>
            <li>{{ $project->type }}</li>
            <li>{{ $project->role }}</li>
        </ul>
        <a href="#" class="link">Voir le projet</a>
    </div>
    <div class="project-cover">
        {!! $project->thumbnail !!}
    </div>
</article>
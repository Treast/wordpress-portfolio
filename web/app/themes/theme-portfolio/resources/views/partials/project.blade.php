<article class="project">
    <h2>{{ $project->title }}</h2>
    <a href="{{ $project->permalink }}" class="grid">
        <div class="project-content">
            <ul>
                <li>{{ $project->type }}</li>
                <li>{{ $project->role }}</li>
            </ul>
            <span class="link">Voir le projet</span>
        </div>
        <div class="project-cover">
            {!! $project->thumbnail !!}
        </div>
    </a>
</article>
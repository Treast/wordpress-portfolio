<section class="container" id="projects">
    @foreach($projects as $project)
        @include('partials.project', compact($project))
    @endforeach
</section>
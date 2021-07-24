<section class="container">
    @foreach($projects as $project)
        @include('partials.project', compact($project))
    @endforeach
</section>
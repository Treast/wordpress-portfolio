@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <section class="container page-header">
    <div class="page-header__content">
      <h1>{{ $project->title }}</h1>
      <h2>{{ $project->subtitle }}</h2>
    </div>

    <div class="page-header__image">
      @include('components.image-responsive', ['imageId' => $project->thumbnailID, 'size' => 'large', 'cover' => true])
    </div>
  </section>

  <section class="container columns">
    <div class="col">
      <p>{!! $project->content !!}</p>
      
      @if($project->website)
        <a href="{{ $project->website }}" class="link">Visiter le site</a>
      @endif
    </div>
    <div class="col">
      @include('components.image-responsive', ['imageId' => $project->smallImage['ID'], 'size' => 'large', 'cover' => true])
    </div>
  </section>

  <section class="container full-image">
    <div class="full-image__content">
      <h2>{{ $project->caption }}</h2>
      
      @include('components.image-responsive', ['imageId' => $project->fullImage['ID'], 'size' => 'full'])
    </div>
  </section>
  @endwhile

  <section class="container project-footer">
    <a href="{{ $next_project->permalink }}">
      <span class="link link--inverse">Projet suivant</span>
      <h2>{{ $next_project->title }}</h2>
    </a>
  </section>
@endsection

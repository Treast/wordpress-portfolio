@extends('layouts.app')

@section('content')
  <section class="container page-header">
    <div class="page-header__content">
      <h2>{{ $header->page_subtitle }}</h2>
      <h1>{{ $header->page_title }}</h1>
    </div>
    <div class="page-header__annexe">
      <h2>{{ $header->annexe_title }}</h2>
      <p>{{ $header->annexe_subtitle }}</p>
      <a href="#projects" class="link">Projets</a>
    </div>
  </section>
  
  @include('partials.projects-list', ['projects' => $projects])

  <section class="container inner-text">
    <div class="inner-text__content">
      {!! $projects_list->content !!}
      <a href="{{ $projects_archives }}" class="link">{{ $projects_list->link_text }}</a>
    </div>
  </section>

  <section class="container full-section full-section--inverse" id="about">
    <h2>{{ $about->title }}</h2>
    <div class="full-section__content">
      {!! $about->content !!}

      <a href="https://www.linkedin.com/in/vincent-riva/" class="link link--inverse">LinkedIn</a>
    </div>

    <div class="full-section__annexe">
      <dl>
        <dt>Conception</dt>
        <dd>{{ $about->tags->conception }}</dd>

        <dt>Frontend</dt>
        <dd>{{ $about->tags->frontend }}</dd>
        
        <dt>Backend</dt>
        <dd>{{ $about->tags->backend }}</dd>
      </dl>
    </div>
  </section>

  <section class="container inner-text full-section full-section--right" id="contact">
    <h2>{{ $contact->title }}</h2>
    <div class="inner-text__content">
      {!! $contact->content !!}

      <a href="#" class="link">Contactez-moi</a>
    </div>
  </section>
@endsection

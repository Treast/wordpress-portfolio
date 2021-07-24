@extends('layouts.app')

@section('content')
  <section class="container page-header page-header--small">
    <div class="page-header-content">
        <p>Je conçois et développe des projets d’impact, entre site web, application et expérience interactive.</p>
    </div>
  </section>

  @include('partials.projects-list', ['projects' => $projects])

  <section class="container inner-text full-section full-section--inverse full-section--right" id="contact">
    <h2>Contact</h2>
    <div class="inner-text-content">
      <p>Vous avez besoin d’un développeur pour un projet ?</p>

      <a href="#" class="link link--inverse">Contactez-moi</a>
    </div>
  </section>
@endsection

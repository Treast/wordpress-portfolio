@extends('layouts.app')

@section('content')
  <section class="container page-header">
    <div class="page-header-content">
      <h2>{{ $header->page_subtitle }}</h2>
      <h1>{{ $header->page_title }}</h1>
    </div>
    <div class="page-header-annexe">
      <h2>{{ $header->annexe_title }}</h2>
      <p>{{ $header->annexe_subtitle }}</p>
      <a href="#projects" class="link">Projets</a>
    </div>
  </section>
  
  @include('partials.projects-list', ['projects' => $projects])
@endsection

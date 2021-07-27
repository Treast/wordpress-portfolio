{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <section class="container page-header">
    <div class="page-header__content">
      <h1>{{ $page->title }}</h1>
      <h2>{{ $subtitle }}</h2>
      <p>{{ $page->content }}</p>

      {!! do_shortcode('[contact-form-7 id="80" title="Contact form 1"]') !!}
    </div>
  </section>
  @endwhile
@endsection
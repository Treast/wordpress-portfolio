@extends('layouts.app')

@section('content')
  @include('partials.projects-list', ['projects' => $projects])
@endsection

@extends('layout')

@section('meta')
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="{{ setting('site.description') }}" />
  <meta name="author" content="Kelechi Nwa-uwa" />
  <title>{{ setting('site.title') }}</title>
@endsection

@section('header')
  <!-- Page header with logo and tagline -->
  <header class="py-5 bg-light border-bottom mb-4">
      <div class="container">
          <div class="text-center my-5">
              <h1 class="fw-bolder">Welcome to {{ setting('site.title') }}</h1>
              <p class="lead mb-0">{{ setting('site.description') }}</p>
          </div>
      </div>
  </header>
@endsection

@section('content')
  @include('vendor.post-list')
  @include('vendor.sidebar')
@endsection

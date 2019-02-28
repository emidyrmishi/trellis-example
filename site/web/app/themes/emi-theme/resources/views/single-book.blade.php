@extends('layouts.app')

@section('content')

  @while (have_posts()) @php(the_post())

    <h1>{{ book::singleBook()->post_title }}</h1>
    {{ the_post_thumbnail('medium') }}
    <p>{{ book::singleBook()->post_content}}</p>
    
  @endwhile
@endsection
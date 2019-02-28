@extends('layouts.app')

@section('content')
    
    @foreach(book::allBook() as $item)
        <a href="{{ get_permalink($item->ID) }}"><h1>{{ $item->post_title }}</h1></a>
        <p>{{ $item->post_content }}</p>
        {!! get_the_post_thumbnail($item->ID, 'medium') !!}
    @endforeach
@endsection
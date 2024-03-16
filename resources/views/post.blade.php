@extends('layouts.main')


@section('container')


<h2>{{ $post->title }}</h2>
<p> By : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
{{-- <h5>{{ $post->author }}</h5> --}}
{!! $post->body !!}



<a href="/blog" class="d-block mt-3"> Back to post</a>
@endsection

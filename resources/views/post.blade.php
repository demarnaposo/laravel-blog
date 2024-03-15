@extends('layouts.main')


@section('container')

<article class="mb-5">
<h2>{{ $post->title }}</h2>
<p> By Dems <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
<h5>{{ $post->author }}</h5>
{!! $post->body !!}
</article>


<a href="/blog"> Back to post</a>
@endsection

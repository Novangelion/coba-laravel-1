@extends('layouts.main')

@section('container')
<h2>Judul</h2>
<h5></h5>
<p></p>
    @foreach ($posts as $post)
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $post["slug"] }}">
                {{  $post["title"] }}
        </a></h2>
        <h5>By: {{  $post["author"] }}</h5>
        <p>{{  $post["body"] }}</p>
    </article>
    @endforeach
@endsection


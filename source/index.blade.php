@extends('_layouts.main')

@section('body')
<div class="p-8">
    <h1 class="text-3xl font-bold">Hello world!</h1>
    <h1 class="text-3xl font-bold">Change here!</h1>
    <h1>{{ $page->author }}</h1>

    <h1>Blog</h1>
    @foreach ($blog as $blogItem)
        <a href="{{ $blogItem->getUrl() }}"> {{ $blogItem->title }}</a>
    @endforeach

    <div class="p-8">
        <h1 class="text-3xl font-bold">Reddit Posts!</h1>
    </div>

    <hr>

    @foreach ($reddit as $post)
        <div class="post-preview">
            <a href="{{ $post->getUrl() }}">
                <h2 class="post-title">{{ $post->title }}</h2>
            </a>
            <p class="post-meta">
                Posted by
                <a href="#!">{{ $post->author }}</a>
                on {{ date('D d M Y', $post->date) }}
            </p>
        </div>
    @endforeach

</div>
@endsection

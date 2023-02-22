@extends('_layouts.main')

@section('body')
<div class="p-8">
    <h1 class="text-3xl font-bold">About Us!</h1>
    <h1>{{ $page->author }}</h1>
</div>
@endsection

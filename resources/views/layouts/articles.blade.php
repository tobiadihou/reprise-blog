@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('content')
    <h2>Articles</h2>
@endsection



@if($articles)
    @foreach($articles as $article)
        @include('articles.index')
    @endforeach
@else
    @include('articles.no-articles')
@endif

@forelse($articles as $article)
    @include('articles.index')
@empty
    @include('articles.no-articles')
@endforelse

@each('articles.index', $articles, 'article', 'articles.no-articles')
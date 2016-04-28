@extends('layouts.app')

@section('content')
    @if (count($articles) > 0)
        @foreach ($articles as $article)
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>{{ $article->title }}</h3>
                    <p>{{ $article->content }}</p>
                </div>
            </div>
        @endforeach
    @endif
@endsection
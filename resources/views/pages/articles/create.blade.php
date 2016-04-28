@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object"  style="width: 64px; height: 64px;" src="" data-holder-rendered="true">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">{{ Auth::user()->name }}</h4>
                            {{ Auth::user()->email }}
                        </div>
                    </div>

                    <hr>

                    <form method="POST" action="{{ url('/article/create') }}">
                        {!! csrf_field() !!}
                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <input type="text" name="title" class="form-control input-lg" placeholder="Title" value="{{ old('title') }}">
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                            <textarea name="content" class="form-control input-lg" rows="3">{{ old('content') }}</textarea>
                            @if ($errors->has('content'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default btn-lg">Publish</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
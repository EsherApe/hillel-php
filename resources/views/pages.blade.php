@extends('layouts.app')

@section('content')
    <div class="col-xs-6 col-xs-offset-3">
        @foreach($pages as $page)
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="panel-title clearfix">
                        <div class="col-xs-6">
                            <div class="row"><h4>{{ $page->title }}</h4></div>
                        </div>
                        <div class="col-xs-6">
                            <div class="row text-right">
                                <h4>
                                    <small>{{ $page->created_at->toDayDateTimeString() }}</small>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    {{ $page->content }}
                </div>
            </div>
        @endforeach
    </div>
@stop
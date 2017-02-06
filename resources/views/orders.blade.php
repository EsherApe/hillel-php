@extends('layouts.app')

@section('content')
    <div class="col-xs-6 col-xs-offset-3">
        @foreach($orders as $order)
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title clearfix">
                        <div class="col-xs-6">
                            <div class="row"><h4>{{ $order->customer_name }}</h4></div>
                        </div>
                        <div class="col-xs-6">
                            <div class="row text-right">
                                <h4>
                                    <small>{{ $order->created_at->toDayDateTimeString() }}</small>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-xs-6">
                        <div class="row">{{ $order->feedback }}</div>
                    </div>
                    <div class="col-xs-6">
                        <div class="row text-right">
                            <small>{{ $order->email }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop
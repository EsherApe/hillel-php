@extends('layouts.app')

@section('content')
    <div class="product clearfix">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <div class="product__content">
                <div class="product__img-box">
                    <img src="{{ $product->img_url }}" alt="" class="product__img img-responsive">
                </div>
                <h2>{{ $product->title }}</h2>
                <div class="product__desc">
                    <p>{{ $product->description }}</p>
                </div>
                <h4 class="product__price">Price: ${{ $product->price }}</h4>
                <p><a class="btn btn-success" href="#" role="button">Buy »</a></p>
            </div>
        </div>
    </div>
@stop
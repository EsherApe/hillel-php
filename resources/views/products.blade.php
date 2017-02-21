@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="co-xs-12 col-sm-6 col-sm-offset-3">
            <h1 class="main-title">The 9 Best Programming Books to Read Right Now if You Want to Distinguish Yourself</h1>

        </div>
        @foreach($products as $product)
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
                        <p><a class="btn btn-info" href="/products/{{ $product->alias }}" role="button">View details »</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop
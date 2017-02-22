@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <div class="add-product-form">
                <h2>Add book:</h2>
                <form action="/products" method="post" role="form">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="alias">Alias</label>
                        <input type="text" class="form-control" name="alias" id="alias" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="img_url">Img url</label>
                        <input type="text" class="form-control" name="img_url" id="img_url" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success pull-right">Done</button>
                </form>
            </div>
        </div>
    </div>
@endsection
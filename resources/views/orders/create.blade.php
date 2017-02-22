@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <div class="order-form">
                <h2>Fill order form:</h2>
                <form action="/orders" method="post" role="form">
                    {{ csrf_field() }}
                    {{--<input type="hidden" name="total_price" value="{{ $total_sum }}">--}}
                    <div class="form-group">
                        <label for="customer_name">Name</label>
                        <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Ваша почта">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Ваш телефон">
                    </div>

                    <div class="form-group">
                        <label for="feedback">Feedback</label>
                        <textarea name="feedback" id="feedback" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success pull-right">Done</button>
                </form>
            </div>
        </div>
    </div>
@endsection
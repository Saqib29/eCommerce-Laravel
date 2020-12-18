@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-4">
        <h4>My Orders</h4>
    </div>
    <div class="col-sm-10">
        <div class="trending-wrapper">
            @foreach($orders as $item)
                <div class="row search-item cart-list-divider">
                    <div class="col-sm-3">
                        <a href="detail/{{ $item->id }}">
                            <img class="trending-img" src="{{ $item->gallery }}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <div class="">
                            <h2>{{ $item->name }}</h2>
                            <h5><strong>Delivery Status</strong> : {{ $item->status }}</h5>
                            <h5><strong>Address</strong> : {{ $item->address }}</h5>
                            <h5><strong>Payment Status</strong> : {{ $item->payment_status }}</h5>
                            <h5><strong>Payment method</strong> : {{ $item->payment_method }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-4">
        {{-- <a href="#">Filter</a> --}}
        <h4>Products to Cart</h4>
    </div>
    <div class="col-sm-10">
        <div class="trending-wrapper">
            @foreach($products as $item)
                <div class="row search-item cart-list-divider">
                    <div class="col-sm-3">
                        <a href="detail/{{ $item->id }}">
                            <img class="trending-img" src="{{ $item->gallery }}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="detail/{{ $item->id }}">
                            <div class="">
                            <h2>{{ $item->name }}</h2>
                            <h5>{{ $item->description }}</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="/remove_from_cart/{{ $item->cart_id }}" class="btn btn-warning">Remove from Cart</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
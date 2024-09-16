@extends('Components.layout')

@section('title', 'CNW | Home')

@section('jumbotron')
<div class="jumbotron">
    <div>
        <h1>Crafts N' Wraps</h1>
        <p>Creating eternal treasures embraced by the heart.</p>
        <a href="/shop" class="btn btn-shop-now btn-lg">Shop Now</a>
    </div>
</div>
@endsection

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Best Sellers</h2>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('asset/images/a.jpg') }}" class="card-img-top" alt="Bouquet 1">
                <div class="card-body">
                    <h5 class="card-title">Bouquet 1</h5>
                    <p class="card-text">A stunning mix of artificial flowers and chocolates perfect for any occasion.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('asset/images/b.jpg') }}" class="card-img-top" alt="Bouquet 2">
                <div class="card-body">
                    <h5 class="card-title">Bouquet 2</h5>
                    <p class="card-text">Brighten up someone's day with this vibrant arrangement.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('asset/images/c.jpg') }}" class="card-img-top" alt="Bouquet 3">
                <div class="card-body">
                    <h5 class="card-title">Bouquet 3</h5>
                    <p class="card-text">A classic bouquet featuring timeless floral favorites.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
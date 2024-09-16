@extends('Components.layout')

@section('title', 'CNW | Shop')

@section('content')
<div class="container mt-5">
    <br>
    <h1 class="text-center">Our Bouquets</h1>
    <div class="row mt-4">
        <div class="col-md-4 mb-custom">
            <div class="card">
                <img src="{{ asset('asset/images/1.jpg') }}" class="card-img-top" alt="Bouquet 1">
                <div class="card-body">
                    <h5 class="card-title">Bouquet 1</h5>
                    <p class="card-text">A stunning mix of roses and daisies.</p>
                    <br>
                    <p class="card-text"><strong>Price:</strong> P330</p>
                    <a href="#" class="btn btn-shop-now btn-lg">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-custom">
            <div class="card">
                <img src="{{ asset('asset/images/2.jpg') }}" class="card-img-top" alt="Bouquet 2">
                <div class="card-body">
                    <h5 class="card-title">Bouquet 2</h5>
                    <p class="card-text">Sunflowers and tulips for a bright, cheerful arrangement.</p>
                    <p class="card-text"><strong>Price:</strong> P330</p>
                    <a href="#" class="btn btn-shop-now btn-lg">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-custom">
            <div class="card">
                <img src="{{ asset('asset/images/3.jpg') }}" class="card-img-top" alt="Bouquet 3">
                <div class="card-body">
                    <h5 class="card-title">Bouquet 3</h5>
                    <p class="card-text">A romantic blend of red and cream roses.</p>
                    <br>
                    <p class="card-text"><strong>Price:</strong> P500</p>
                    <a href="#" class="btn btn-shop-now btn-lg">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-custom">
            <div class="card">
                <img src="{{ asset('asset/images/4.jpg') }}" class="card-img-top" alt="Bouquet 4">
                <div class="card-body">
                    <h5 class="card-title">Bouquet 4</h5>
                    <p class="card-text">An elegant combination of roses and daisies.</p>
                    <br>
                    <p class="card-text"><strong>Price:</strong> P470</p>
                    <a href="#" class="btn btn-shop-now btn-lg">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-custom">
            <div class="card">
                <img src="{{ asset('asset/images/5.jpg') }}" class="card-img-top" alt="Bouquet 5">
                <div class="card-body">
                    <h5 class="card-title">Bouquet 5</h5>
                    <p class="card-text">A vibrant arrangement of butterflies and chocolates.</p>
                    <p class="card-text"><strong>Price:</strong> P450</p>
                    <a href="#" class="btn btn-shop-now btn-lg">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-custom">
            <div class="card">
                <img src="{{ asset('asset/images/6.jpg') }}" class="card-img-top" alt="Bouquet 6">
                <div class="card-body">
                    <h5 class="card-title">Bouquet 6</h5>
                    <p class="card-text">A beautiful single sunflower.</p>
                    <br>
                    <p class="card-text"><strong>Price:</strong> P150</p>
                    <a href="#" class="btn btn-shop-now btn-lg">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
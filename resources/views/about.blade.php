@extends('Components.layout')

@section('title', 'CNW | About')

@section('content')
<div class="container mt-5">
    <br>
    <h1 class="text-center">About CNW</h1>
    <p class="text-center">
        Crafts N' Wraps is a flower shop offering exquisite bouquets crafted with love and care. Our mission is to
        bring beauty and joy into every home with our artificial floral arrangements.
    </p>
    <div class="row mt-4">
        <div class="col-md-6">
            <img src="{{ asset('asset/images/500x300.png') }}" class="img-fluid" alt="About CNW">
        </div>
        <div class="col-md-6">
            <h3>Our Story</h3>
            <p>
                Founded in 2024, CNW began as a small passion project. Today, we are proud to have grown into a
                beloved local business known for our unique and high-quality bouquets.
            </p>
        </div>
    </div>
</div>
@endsection
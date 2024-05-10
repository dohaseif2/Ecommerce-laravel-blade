@extends('layouts.layout')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Fresh and Organic</p>
                        <h1>Check Out Product</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- check out section -->
    <div class="checkout-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-accordion-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="card single-accordion">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Billing Address
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="billing-address-form">
                                            @php
                                                $totalPrice = 0;
                                            @endphp
                                            @if (session('cart'))
                                                @foreach (session('cart') as $id => $item)
                                                    @php
                                                        $totalPrice += $item['price'] * $item['quantity'];
                                                    @endphp
                                                @endforeach
                                            @endif
                                            <form action="{{ route('checkout.store') }}" method="post">
                                                @csrf
                                                <p>
                                                    <input type="text" placeholder="Address" name="address">
                                                    @error('address')
                                                      <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </p>

                                                <p>
                                                    <input type="tel" placeholder="Phone" name="phone">
                                                    @error('phone')
                                                        <div class="text-danger">{{ $message }}</div>
                                                     @enderror
                                                </p>

                                                <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                                                <input type="submit" value="Confirm Order" class="boxed-btn">

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="order-details-wrap">
                        <table class="order-details">
                            <thead>
                                <tr>
                                    <th>Your order Details</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody class="order-details-body">
                                <tr>
                                    <td>Product</td>
                                    <td>Total</td>
                                </tr>
                                @php
                                    $totalPrice = 0;
                                @endphp
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $item)
                                        @php
                                            $totalPrice += $item['price'] * $item['quantity'];
                                        @endphp
                                        <tr>
                                            <td>{{ $item['name'] }}</td>
                                            <td>{{ $item['price'] * $item['quantity'] }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                            <tbody class="checkout-details">
                                <tr>
                                    <td>Total</td>
                                    <td>${{ $totalPrice }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end check out section -->

    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/1.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/2.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/3.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/4.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->
@endsection

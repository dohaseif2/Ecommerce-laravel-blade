@extends('layouts.website.layout')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>All Your Products</p>
                        <h1>Cart</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- cart -->
    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove"></th>
                                    <th class="product-image">Product Image</th>
                                    <th class="product-name">Name</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-total">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $totalPrice = 0;
                                @endphp
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $item)
                                        @php
                                            $totalPrice += $item['price'] * $item['quantity'];
                                        @endphp
                                        <tr class="table-body-row">
                                            <td class="product-remove">
                                                <form action="{{ route('deleteFromCard', $id) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        style="border: none; background-color: transparent;">
                                                        <i class="far fa-window-close"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="product-image"><img src=" {{ asset('images/' . $item['image']) }}"
                                                    alt=""></td>
                                            <td class="product-name">{{ $item['name'] }}</td>
                                            <td class="product-price">${{ $item['price'] * $item['quantity'] }}</td>
                                            <td class="product-total"><input type="number" placeholder="0"
                                                    value="{{ $item['quantity'] }}"></td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5">Your Card is empty</td>
                                        </tr>
                                    
                                @endif



                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="total-section">
                        <table class="total-table">
                            <thead class="total-table-head">
                                <tr class="table-total-row">
                                    <th>Total</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="total-data">
                                    <td><strong>total: </strong></td>
                                    <td>{{ $totalPrice }}</td>
                                </tr>


                            </tbody>
                        </table>
                        <div class="cart-buttons">
                           
                            @if (!empty(session('cart')))
                            <a href="{{route('checkout')}}"  class="boxed-btn black" >Check Out</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end cart -->

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

@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="section-title text-center mb-4">More Services</h2>
    <p class="text-center mb-5">Explore our wide range of services designed to help your business grow and succeed.</p>

    <div class="row g-4">
        <!-- Service 1 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" 
                     class="card-img-top p-4" alt="Customer Support" style="height:200px; object-fit:contain;">
                <div class="card-body text-center">
                    <h5 class="card-title">24/7 Customer Support</h5>
                    <p class="card-text">We provide round-the-clock assistance to ensure smooth business operations and happy customers.</p>
                </div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://cdn-icons-png.flaticon.com/512/3596/3596094.png" 
                     class="card-img-top p-4" alt="Delivery Service" style="height:200px; object-fit:contain;">
                <div class="card-body text-center">
                    <h5 class="card-title">Fast & Secure Delivery</h5>
                    <p class="card-text">Our delivery service ensures your products reach customers safely and on time, every time.</p>
                </div>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://cdn-icons-png.flaticon.com/512/2910/2910768.png" 
                     class="card-img-top p-4" alt="Sales & Marketing" style="height:200px; object-fit:contain;">
                <div class="card-body text-center">
                    <h5 class="card-title">Sales & Marketing</h5>
                    <p class="card-text">Boost your sales with our tailored marketing strategies that target the right audience effectively.</p>
                </div>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://cdn-icons-png.flaticon.com/512/3593/3593323.png" 
                     class="card-img-top p-4" alt="Product Packaging" style="height:200px; object-fit:contain;">
                <div class="card-body text-center">
                    <h5 class="card-title">Premium Packaging</h5>
                    <p class="card-text">We offer attractive and safe packaging to keep your products fresh and appealing.</p>
                </div>
            </div>
        </div>

        <!-- Service 5 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" 
                     class="card-img-top p-4" alt="Inventory Management" style="height:200px; object-fit:contain;">
                <div class="card-body text-center">
                    <h5 class="card-title">Inventory Management</h5>
                    <p class="card-text">Track, manage, and optimize your stock levels with our smart inventory solutions.</p>
                </div>
            </div>
        </div>

        <!-- Service 6 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135810.png" 
                     class="card-img-top p-4" alt="Store Management" style="height:200px; object-fit:contain;">
                <div class="card-body text-center">
                    <h5 class="card-title">Store Management</h5>
                    <p class="card-text">Manage all your store activities efficiently with our easy-to-use tools and systems.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

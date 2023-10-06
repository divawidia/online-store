@extends('layouts.dashboard')

@section('title')
    Store Dashboard
@endsection

@section('content')
    <div
        class="section-content section-dashboard-home"
        data-aos="fade-up"
    >
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">My Product</h2>
                <p class="dashboard-subtitle">Look what you have made today!</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <a
                            href="/dashboard-products-create.html"
                            class="btn btn-success"
                        >Add New Product</a
                        >
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a
                            href="/dashboard-products-details.html"
                            class="card card-dashboard-product d-block"
                        >
                            <div class="card-body">
                                <img
                                    src="/images/product-card-1.png"
                                    alt=""
                                    class="w-100 mb-2"
                                />
                                <div class="product-title">Shirup Marzzan</div>
                                <div class="product-category">food</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a
                            href="/dashboard-products-details.html"
                            class="card card-dashboard-product d-block"
                        >
                            <div class="card-body">
                                <img
                                    src="/images/product-card-1.png"
                                    alt=""
                                    class="w-100 mb-2"
                                />
                                <div class="product-title">Shirup Marzzan</div>
                                <div class="product-category">food</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a
                            href="/dashboard-products-details.html"
                            class="card card-dashboard-product d-block"
                        >
                            <div class="card-body">
                                <img
                                    src="/images/product-card-1.png"
                                    alt=""
                                    class="w-100 mb-2"
                                />
                                <div class="product-title">Shirup Marzzan</div>
                                <div class="product-category">food</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a
                            href="/dashboard-products-details.html"
                            class="card card-dashboard-product d-block"
                        >
                            <div class="card-body">
                                <img
                                    src="/images/product-card-1.png"
                                    alt=""
                                    class="w-100 mb-2"
                                />
                                <div class="product-title">Shirup Marzzan</div>
                                <div class="product-category">food</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a
                            href="/dashboard-products-details.html"
                            class="card card-dashboard-product d-block"
                        >
                            <div class="card-body">
                                <img
                                    src="/images/product-card-1.png"
                                    alt=""
                                    class="w-100 mb-2"
                                />
                                <div class="product-title">Shirup Marzzan</div>
                                <div class="product-category">food</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

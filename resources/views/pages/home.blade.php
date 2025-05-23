@extends('layouts.app')

@section('title')
    Store Homepage
@endsection

@section('content')
    <div class="page-content page-home">
        <section class="store-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="carousel slide" id="storeCarousel" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#storeCarousel" data-slide-to="0"></li>
                                <li data-target="#storeCarousel" data-slide-to="1"></li>
                                <li data-target="#storeCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('images/banner.jpg')}}" alt="Carousel-image" class="d-block w-100"/>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('images/banner.jpg')}}" alt="Carousel-image" class="d-block w-100"/>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('images/banner.jpg')}}" alt="Carousel-image" class="d-block w-100"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="store-trend-categories mt-4">
            <div class="container">
{{--                <div class="row">--}}
{{--                    <div class="col-12" data-aos="fade-up">--}}
{{--                        <h5>All Categories</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="row">
                    @php $incremenCategory = 0 @endphp
                    @forelse($categories as $category)
                        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{ $incremenCategory += 100 }}">
                            <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories">
                                <div class="categories-image">
                                    <img src="{{ Storage::url($category->photo) }}" alt="{{ $category->slug }}" class="w-100"/>
                                </div>
                                <p class="categories-text">{{ $category->name }}</p>
                            </a>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                            No Categories Found
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="store-new-product">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>All Product</h5>
                    </div>
                </div>
                <div class="row">
                    @php $incremenCategory = 0 @endphp
                    @forelse($products as $product)
                        <div
                            class="col-6 col-md-4 col-lg-3"
                            data-aos="fade-up"
                            data-aos-delay="{{ $incremenCategory += 100 }}"
                        >
                            <a href="{{ route('detail', $product->slug) }}" class="component-products d-block">
                                <div class="products-thumbnail">
                                    <div
                                        class="products-image"
                                        style="
                                  @if($product->galleries)
                                    background-image: url('{{ Storage::url($product->galleries->first()->photos) }}');
                                  @else
                                    background-image: #eee;
                                  @endif
                                  "
                                    ></div>
                                </div>
                                <div class="products-text">{{$product->name}}</div>
                                <div class="products-price">Rp. {{ number_format($product->price) }}</div>
                            </a>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                            No Product Found
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
@endsection

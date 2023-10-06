@extends('layouts.app')

@section('title')
    Store Homepage
@endsection

@section('content')
<div class="page-content page-home">
      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Trend Categories</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-gadget.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Gadget</p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-furniture.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Furniture</p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-makeup.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Make Up</p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-sneakers.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Sneaker</p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-tools.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Tools</p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/categories-baby.svg" alt="" class="w-100" />
                </div>
                <p class="categories-text">Baby</p>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="store-new-product">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>New Product</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('images/products-apple-watch-4.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Apple Watch 4</div>
                <div class="products-price">Rp. 100.000</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('images/products-bubuk-maketti.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Bubuk Maketti</div>
                <div class="products-price">Rp. 100.000</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-mavic-kawe.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Mavic Kawe</div>
                <div class="products-price">Rp. 100.000</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-monkey-toys.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">Rp. 100.000</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('/images/products-nike.jpg')"
                  ></div>
                </div>
                <div class="products-text">Sepatu Nika</div>
                <div class="products-price">Rp. 100.000</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-orange-bogotta.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Orange Bogotta</div>
                <div class="products-price">Rp. 100.000</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="700"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('/images/products-sofa.jpg')"
                  ></div>
                </div>
                <div class="products-text">Sofa</div>
                <div class="products-price">Rp. 100.000</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-tatakan-gelas.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Tatakan Gelas</div>
                <div class="products-price">Rp. 100.000</div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
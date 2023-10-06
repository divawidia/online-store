@extends('layouts.auth')

@section('content')
    <div class="page-content page-auth">
        <div class="section-store-auth" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center row-login">
                    <div class="col-lg-6 text-center">
                        <img
                            src="/images/login-placeholder.png"
                            alt=""
                            class="w-50 mb-4 mb-lg-none"
                        />
                    </div>
                    <div class="col-lg-5">
                        <h2>Belanja kebutuhan utama, menjadi lebih mudah</h2>
                        <form action="" class="mt-3">
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="email" class="form-control w-75" />
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control w-75" />
                            </div>
                            <a
                                href="/dashboard.html"
                                class="btn btn-success btn-block w-75 mt-4"
                            >Sign Up</a
                            >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

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
                <h2 class="dashboard-title">My Account</h2>
                <p class="dashboard-subtitle">Update your current profile</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="">
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="row mb-2"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                    >
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="adressOne">Your Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="name"
                                                    name="name"
                                                    value="Dipa"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="adressOne">Your Email</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="email"
                                                    name="email"
                                                    value="dasndksnd@gmail.com"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="province">Province</label>
                                                <select
                                                    name="province"
                                                    id="province"
                                                    class="form-control"
                                                >
                                                    <option value="West Java">West Java</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <select
                                                    name="city"
                                                    id="city"
                                                    class="form-control"
                                                >
                                                    <option value="Bandung">Bandung</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="postalCode">Postal Code</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="postalCode"
                                                    name="postalCode"
                                                    value="12999"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country">Country</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="country"
                                                    name="country"
                                                    value="Indonesia"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mobile">Mobile</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="mobile"
                                                    name="mobile"
                                                    value="+628 2020 11111"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button
                                                type="submit"
                                                class="btn btn-success px-5"
                                            >
                                                Save Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

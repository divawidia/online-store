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
                <h2 class="dashboard-title">Store1213</h2>
                <p class="dashboard-subtitle">Transactions Details</p>
            </div>
            <div class="dashboard-content" id="transactionDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img
                                            src="/images/product-details-dashboard.png"
                                            alt=""
                                            class="w-100 mb-3"
                                        />
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Customer Name</div>
                                                <div class="product-subtitle">Dipa Widia</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Product Name</div>
                                                <div class="product-subtitle">
                                                    Shirup Marzzan
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Date of Transaction
                                                </div>
                                                <div class="product-subtitle">
                                                    12 Januari, 2020
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Payment Status</div>
                                                <div class="product-subtitle">Pending</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Total Amount</div>
                                                <div class="product-subtitle">$280,409</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Mobile</div>
                                                <div class="product-subtitle">
                                                    +628 2020 11111
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mt-4">
                                        <h5>Shipping Information</h5>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Address I</div>
                                                <div class="product-subtitle">KNDAKSDNKAJ</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Address II</div>
                                                <div class="product-subtitle">KNDAKSDNKAJ</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Province</div>
                                                <div class="product-subtitle">KNDAKSDNKAJ</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">City</div>
                                                <div class="product-subtitle">KNDAKSDNKAJ</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Postal Code</div>
                                                <div class="product-subtitle">KNDAKSDNKAJ</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Country</div>
                                                <div class="product-subtitle">KNDAKSDNKAJ</div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="product-title">Status</div>
                                                <select
                                                    name="shipping_status"
                                                    id="status"
                                                    class="form-control"
                                                    v-model="status"
                                                >
                                                    <option value="UNPAID">Unpaid</option>
                                                    <option value="PENDING">Pending</option>
                                                    <option value="SHIPPING">Shipping</option>
                                                    <option value="SUCCESS">Success</option>
                                                </select>
                                            </div>
                                            <template v-if="status == 'SHIPPING'">
                                                <div class="col-md-3 mt-4">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        name="resi"
                                                        v-model="resi"
                                                    />
                                                </div>
                                                <div class="col-md-2">
                                                    <button
                                                        type="submit"
                                                        class="btn btn-success btn-block mt-4"
                                                    >
                                                        Update Resi
                                                    </button>
                                                </div>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn btn-success mt-4">
                                            Save Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
    <script>
        var transactionDetails = new Vue({
            el: "#transactionDetails",
            data: {
                status: "SHIPPING",
                resi: "BD0123445",
            },
        });
    </script>
@endpush

@extends('layouts.dashboard')

@section('title')
    Store Dashboard
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">Look what you have made today!</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Customer</div>
                                <div class="dashboard-card-subtitle">{{ number_format($customer) }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Revenue</div>
                                <div class="dashboard-card-subtitle">Rp. {{ number_format($revenue) }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Transaction</div>
                                <div class="dashboard-card-subtitle">{{ number_format($transaction_count) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">Recent Transactions</h5>
                        @if(count($transaction_data) == 0)
                            <h5 class="text-muted text-center">There is no transactions at this moment</h5>
                        @endif
                        @foreach($transaction_data as $transaction)
                            <a href="{{ route('dashboard-transaction-details', $transaction->id) }}" class="card card-list">
                                <div class="card-body">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-1">
                                            <img src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '') }}" class="w-75" alt="{{ $transaction->product->name }}"/>
                                        </div>
                                        <div class="col-md-4">{{ $transaction->product->name ?? '' }}</div>
                                        <div class="col-md-3">{{ $transaction->transaction->user->name ?? '' }}</div>
                                        <div class="col-md-3">{{ date('d F Y', strtotime($transaction->created_at ?? '')) }}</div>
                                        <div class="col-md-1 d-none d-md-block">
                                            <img src="{{asset('/images/dashboard-arrow-right.svg')}}" alt=""/>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

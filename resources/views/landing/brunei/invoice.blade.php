@extends('home')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Your Invoice</p>
            <h1 class="mb-5">invoice proof of your transaction</h1>
        </div>
        @foreach ($transaction as $data)
        <div class="row gx-4 my-4">
            <div class="col-lg-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2 text-center">
                                <img src="{{ $data->image == null ? asset('landing/img/product-3.jpg') : asset($data->image) }}" alt="image" class="img-thumbnail w-100">
                            </div>

                            <div class="col-lg-8">
                                <div class="my-5">
                                    <h3>{{ $data->name }}</h3>
                                    <h6>Total Price</h6>
                                    <span>${{ $data->total_price }}</span>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="position-absolute top-0 end-0 my-3">
                                    @if ($data->status == "Accepted")
                                        <span class="badge bg-success mx-3">{{ $data->status }}</span>
                                    @elseif ($data->status == "Unpaid")
                                        <span class="badge bg-secondary mx-3">{{ $data->status }}</span>
                                    @elseif ($data->status == "Waiting to be accepted")
                                        <span class="badge bg-warning mx-3">{{ $data->status }}</span>
                                    @elseif ($data->status == "Rejected")
                                        <span class="badge bg-danger mx-3">{{ $data->status }}</span>
                                    @endif
                                </div>
                                <div class="position-absolute bottom-0 end-0 my-3">
                                    <a href="{{ route('transaction.detailinvoice', $data->id) }}" class="mx-3 btn btn-info">Send proof of payment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@extends('layout.master')
@section('content')
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Devices</a>
                <span class="breadcrumb-item active">Bloc</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <!-- Shop Sidebar Start -->
        <div class="col-lg-3 col-md-4">
            <!-- Price Start -->
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">brands</span></h5>
            <div class="bg-light p-4 mb-30">
                <form>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" checked id="price-all">
                        <label class="custom-control-label" for="price-all">All brands</label>
                        <span class="badge border font-weight-normal">1000</span>
                    </div>
                    @foreach ($brands as $brand)
                        @php
                            $checkboxId = 'brand-' . $brand["id"];
                        @endphp
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="{{ $checkboxId }}">
                            <label class="custom-control-label" for="{{ $checkboxId }}">{{ $brand['name'] }}</label>
                            <span class="badge border font-weight-normal"></span>
                        </div>
                    @endforeach
                </form>
            </div>
        </div>
        <!-- Shop Sidebar End -->

        <!-- Shop bloc Start -->
        <div class="col-lg-9 col-md-8">
            <div class="row pb-3">
                @foreach ($blocs as $bloc)
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ $bloc->validImage }}" alt="">
                                <div class="product-action">
                                    <!-- Add bloc actions here -->
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="">{{ $bloc->name }}</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>${{ $bloc->price }}</h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <!-- Add bloc ratings here -->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Shop bloc End -->
    </div>
</div>
<!-- Shop End -->
@endsection

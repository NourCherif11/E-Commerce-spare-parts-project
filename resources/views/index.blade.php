@extends('layout.master')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">




@section('content')
<div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
                    <div class="carousel-item position-relative active" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{  asset('assets/images/Electronic.jpg')}}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Electronics shop</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn"></p>

                            </div>
                        </div>
                    </div>
        </div>
        <div class="col-lg-4">
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="{{  asset('assets/images/annonce.jpg')}}" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Gratuit</h6>
                    <h3 class="text-white mb-3">Creer Une Annonce</h3>
                    <a href="{{ route('annonce.create') }}" class="btn btn-primary">Creer Une Annonce</a>
                </div>
            </div>
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="{{  asset('assets/images/spareparts.jpg')}}" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Smartphone</h6>
                    <h3 class="text-white mb-3">Spare Parts</h3>
                    <a href="{{ route('smartphone') }}" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- devices -->
<section class="category">
    <h1 class="heading text-center">Devices</h1>

    <div id="categoryCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('smartphone') }}" class="slide text-center">
                            <img src="{{  asset('assets/images/icon-7.png')}}" alt="Laptop" class="d-block mx-auto">
                            <h3>Smartphone</h3>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ route('tablette') }}" class="slide text-center">
                            <img src="{{  asset('assets/images/tablet.png')}}" alt="TV" class="d-block mx-auto">
                            <h3>Tablette</h3>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ route('pcbureau') }}" class="slide text-center">
                            <img src="{{  asset('assets/images/computer.png')}}" alt="Camera" class="d-block mx-auto">
                            <h3>Pc bureau</h3>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ route('pcportable') }}" class="slide text-center">
                            <img src="{{  asset('assets/images/icon-1.png')}}" alt="Mouse" class="d-block mx-auto">
                            <h3>Pc portable</h3>
                        </a>
                    </div>

                </div>
            </div>

            <div class="carousel-item">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('ecran') }}" class="slide text-center">
                            <img src="{{  asset('assets/images/monitor.png')}}" alt="Washing Machine" class="d-block mx-auto">
                            <h3>Ecran</h3>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ route('smartwatch') }}" class="slide text-center">
                            <img src="{{  asset('assets/images/smartwatch.png')}}" alt="Fridge" class="d-block mx-auto">
                            <h3>Smartwatch</h3>
                        </a>
                    </div>

                    <!-- Add more items as needed -->
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#categoryCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#categoryCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>



 <!-- brands -->

<div class="container-fluid pt-5">

  <div class="container">
    <div class="box-container">

        <div class="box">
            <img src="{{  asset('assets/images/apple.png')}}" alt="">
        </div>
        <div class="box">
            <img src="{{  asset('assets/images/sony.png')}}" alt="">
        </div>
        <div class="box">
            <img src="{{  asset('assets/images/huawei.png')}}" alt="">
        </div>
        <div class="box">
            <img src="{{  asset('assets/images/lenovo.png')}}" alt="">
        </div>
        <div class="box">
            <img src="{{  asset('assets/images/nokia.png')}}" alt="">
        </div>
        <div class="box">
            <img src="{{  asset('assets/images/oppo.png')}}" alt="">
        </div>
        <div class="box">
            <img src="{{  asset('assets/images/samsung.png')}}" alt="">
        </div>
        <div class="box">
            <img src="{{  asset('assets/images/dell.png')}}" alt="">
        </div>
        <div class="box">
            <img src="{{  asset('assets/images/asus.png')}}" alt="">
        </div>
        <div class="box">
            <img src="{{  asset('assets/images/hp.png')}}" alt="">
        </div>
        <div class="box">
            <img src="{{  asset('assets/images/xiaomi.png')}}" alt="">
        </div>


    </div>

    </div>

</div>
<section class="random-products">
    <h1 class="heading text-center">Some Electronics Products</h1>

    <div id="randomProductsCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($electroproducts->chunk(4) as $index => $chunk)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="row">
                        @foreach ($chunk as $product)
                            <div class="col">
                                <a href="{{ route('detail', ['id' => $product->id]) }}" class="slide text-center">
                                    <img src="{{ $product->validImage }}" alt="{{ $product->name }}" class="d-block mx-auto">
                                    <h3>{{ $product->name }}</h3>
                                    <p>{{ $product->price }} TND</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#randomProductsCarousel1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#randomProductsCarousel1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>


<!-- household -->
<section class="category">
    <h1 class="heading text-center"> HouseHold-Appliance</h1>

    <div id="categoryCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('washingmachine') }}" class="slide text-center">
                            <img src="{{  asset('assets/images/icon-6.png')}}" alt="Laptop" class="d-block mx-auto">
                            <h3>Washing machine</h3>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ route('mixer') }}" class="slide text-center">
                            <img src="{{  asset('assets/images/mixer.png')}}" alt="TV" class="d-block mx-auto">
                            <h3>Mixer</h3>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ route('dishwasher') }}" class="slide text-center">
                            <img src="{{  asset('assets/images/dishwasher.png')}}" alt="Camera" class="d-block mx-auto">
                            <h3>Dishwasher</h3>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ route('refrigerator') }}" class="slide text-center">
                            <img src="{{  asset('assets/images/icon-5.png')}}" alt="Mouse" class="d-block mx-auto">
                            <h3>Refrigerator</h3>
                        </a>
                    </div>


                </div>
            </div>

            <div class="carousel-item">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('oven') }}" class="slide text-center">
                            <img src="{{  asset('assets/images/kitchen-oven.png')}}" alt="Mouse" class="d-block mx-auto">
                            <h3>Oven</h3>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ route('coffee') }}" class="slide text-center">
                            <img src="{{  asset('assets/images/coffee-machine.png')}}" alt="Washing Machine" class="d-block mx-auto">
                            <h3>Coffee maker</h3>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ route('waterheater') }}" class="slide text-center">
                            <img src="{{  asset('assets/images/heater.png')}}" alt="Fridge" class="d-block mx-auto">
                            <h3>Water heater</h3>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ route('air') }}" class="slide text-center">
                            <img src="{{  asset('assets/images/air-conditioner.png')}}" alt="Fridge" class="d-block mx-auto">
                            <h3>Air conditioner</h3>
                        </a>
                    </div>

                    <!-- Add more items as needed -->
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#categoryCarousel1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#categoryCarousel1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<div class="container-fluid pt-5">
    <div class="container">
      <div class="box-container">

          <div class="box">
              <img src="{{  asset('assets/images/condor.png')}}" alt="">
          </div>
          <div class="box">
              <img src="{{  asset('assets/images/lg.png')}}" alt="">
          </div>
          <div class="box">
              <img src="{{  asset('assets/images/Moulinex.png')}}" alt="">
          </div>
          <div class="box">
              <img src="{{  asset('assets/images/panasonic.png')}}" alt="">
          </div>
          <div class="box">
              <img src="{{  asset('assets/images/acer.png')}}" alt="">
          </div>
          <div class="box">
              <img src="{{  asset('assets/images/biolux.png')}}" alt="">
          </div>
          <div class="box">
              <img src="{{  asset('assets/images/samsungg.png')}}" alt="">
          </div>
          <div class="box">
              <img src="{{  asset('assets/images/starone.png')}}" alt="">
          </div>

      </div>
      </div>
  </div>
  <section class="random-products">
    <h1 class="heading text-center">Some HouseHold-appliance Products</h1>

    <div id="randomProductsCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($houseproducts->chunk(4) as $index => $chunk)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="row">
                        @foreach ($chunk as $product)
                            <div class="col">
                                <a href="{{ route('detail', ['id' => $product->id]) }}" class="slide text-center">
                                    <img src="{{ $product->validImage }}" alt="{{ $product->name }}" class="d-block mx-auto">
                                    <h3>{{ $product->name }}</h3>
                                    <p>{{ $product->price }} TND</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#randomProductsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#randomProductsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>


@endsection

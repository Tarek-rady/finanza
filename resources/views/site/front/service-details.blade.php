@extends('site.layouts.site')

@section('title')
   Service Details
@endsection

@section('style')
@endsection


@section('content')


    {{--  start of header service details  --}}

    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s" style="background-image:url({{ asset('storage/'.$category->img) }});">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Features</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Features</li>
            </ol>
            </nav>
        </div>
    </div>
    {{--  end of header service details  --}}

    {{-- start of service details  --}}
    <div class="container-xxl feature py-5">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3" >
                    Why Choosing Us!
                    </p>
                    <h1 class="display-5 mb-4">{{ $category->title}}</h1>
                    <p class="mb-4">
                      {{ $category->desc }}
                    </p>
                </div>

                <div class="col-lg-12">
                    <div class="row g-4 align-items-center">
                    <div class="col-md-12   ">


                        <div class="row g-4">

                           @foreach ($category->services as $service)

                            <div class="col-md-4 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="feature-box border rounded p-4">
                                <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">{{ $service->name }}</h4>

                                </div>
                            </div>
                           @endforeach



                        </div>
                    </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of service details  --}}





@endsection


@section('js')

@endsection

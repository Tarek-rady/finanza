@extends('site.layouts.site')

@section('title')
   Clints
@endsection

@section('style')
@endsection


@section('content')

     {{--  start of header  --}}
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Testimonial</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>
     {{--  start of header  --}}

    {{--  start of clints  --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Testimonial</p>
                <h1 class="display-5 mb-5">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
            @foreach ( $clints as $clint )

                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        {{ $clint->desc }}
                    </div>
                    <img class="rounded-circle mb-3" src="{{ asset('storage/'.$clint->img)}}" alt="{{ $clint->name }}">
                    <h4>{{ $clint->name }}</h4>
                    <span>{{ $clint->job }}</span>
                </div>
            @endforeach

            </div>
        </div>
    </div>
    {{--  end of clints  --}}






@endsection


@section('js')

@endsection

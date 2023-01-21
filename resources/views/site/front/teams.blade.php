@extends('site.layouts.site')

@section('title')
   Teams
@endsection

@section('style')
@endsection


@section('content')


    {{-- start of header   --}}
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Team Member</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Team Member</li>
                </ol>
            </nav>
        </div>
    </div>
    {{-- start of header   --}}


    {{--  start of teams  --}}
    <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Team</p>
            <h1 class="display-5 mb-5">Exclusive Team</h1>
        </div>
        <div class="row g-4">
            @foreach ($teams as $team)

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid rounded" src="{{ asset('storage/'.$team->img)}}" alt="{{ $team->name }}">
                        <div class="team-text">
                            <h4 class="mb-0">{{ $team->name }}</h4>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href="{{ $team->facebook }}"><i
                                        class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-square rounded-circle mx-1" href="{{ $team->twitter }}"><i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-square rounded-circle mx-1" href="{{ $team->instagram }}"><i
                                        class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    </div>
    {{--  end of teams  --}}





@endsection


@section('js')

@endsection

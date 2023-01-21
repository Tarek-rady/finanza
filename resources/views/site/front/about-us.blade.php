@extends('site.layouts.site')

@section('title')
  About us
@endsection

@section('style')
@endsection


@section('content')

    {{--  start of header  --}}
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">About</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
     {{--  end of header  --}}


   {{--  start of about  --}}
   <div class="container-xxl py-5">
    <div class="container">

        <div class="row g-4 align-items-end mb-4">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="{{ asset('storage/'.$about->img)}}">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">About Us</p>
                <h1 class="display-5 mb-4">{{ $about->title }}</h1>
                <p class="mb-4">{{ $about->desc }}</p>
                <div class="border rounded p-4">
                    <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                            <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                aria-selected="true">Story</button>
                            <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                aria-selected="false">Mission</button>
                            <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                aria-selected="false">Vision</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                            aria-labelledby="nav-story-tab">
                            <p>{{ $about->story }}</p>

                        </div>
                        <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                            aria-labelledby="nav-mission-tab">
                            <p>{{ $about->mission }}</p>

                        </div>
                        <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                            <p>{{ $about->vision }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4">

                @foreach ($feautures as $feauture )

                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-times text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>{{ $feauture->name }}</h4>
                                    <span>{{ $feauture->desc }}</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
   </div>
   {{--  end of about  --}}

   {{--  start of fast js  --}}
   <div class="container-fluid facts my-5 py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-users fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">{{ $clints_count }}</h1>
                <span class="fs-5 text-white">Happy Clients</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-check fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">{{ $projects_count }}</h1>
                <span class="fs-5 text-white">Projects Completed</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">{{ $team_count }}</h1>
                <span class="fs-5 text-white">Dedicated Staff</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-award fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">4</h1>
                <span class="fs-5 text-white">Awards Achieved</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
        </div>
    </div>
   </div>
   {{--  start of fast js  --}}


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

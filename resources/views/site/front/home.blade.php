@extends('site.layouts.site')

@section('title')
  Home
@endsection

@section('style')
@endsection


@section('content')


    {{--  start of banners  --}}
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

                @foreach ($banners as $banner )

                <div class="carousel-item {{ $banner->status == 'active' ? 'active' : '' }}">
                    <img class="w-100" src="{{ asset('storage/'.$banner->img)}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <p
                                        class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                        {{ $banner->title }}</p>
                                    <h1 class="display-1 mb-4 animated slideInDown">{{ $banner->desc }}</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{--  end of banners  --}}


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


    {{--  start of abouts  --}}
    <div class="container-xxl feature py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Why Choosing Us!</p>
                    <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        @foreach ($abouts as $about)
                            <div class="col-md-6">
                                <div class="row g-4">


                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">{{ $about->name }}</h4>
                                        <p class="mb-3">{{ $about->desc }}</p>
                                        <a class="fw-semi-bold" href="">Read More <i
                                                class="fa fa-arrow-right ms-1"></i>
                                            </a>
                                    </div>
                                </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  start of abouts  --}}


    {{--  start of categories  --}}
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Services</p>
                <h1 class="display-5 mb-5">Awesome Financial Services For Business</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                       @foreach ($categories as $category)

                       <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                           data-bs-toggle="pill" data-bs-target="#tab-pane-{{ $category->id }}" type="button">
                           <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>{{ $category->name }}</h5>
                       </button>
                       @endforeach

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">

                        <div class="tab-pane fade show active" id="tab-pane-{{ $category->id }}">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="{{ asset('site/img/service-1.jpg')}}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                        clita duo justo erat amet.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  start of categories  --}}


    {{--  start of contact us  --}}
    <div class="container-fluid callback my-5 pt-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Get In Touch
                            </p>
                            <h1 class="display-5 mb-5">Request A Call-Back</h1>
                        </div>
                        <form action="{{ route('web.contact-home') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                    @error('name')
                                        <span class="text-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="mail" name="email" value="{{ old('email') }}" placeholder="Your Email">
                                        <label for="mail">Your Email</label>
                                    </div>
                                    @error('email')
                                        <span class="text-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="mobile" name="phone" value="{{ old('phone') }}" placeholder="Your Mobile">
                                        <label for="mobile">Your Mobile</label>
                                    </div>
                                    @error('phone')
                                        <span class="text-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                    @error('subject')
                                        <span class="text-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="msg"
                                            style="height: 100px">{{ old('msg') }}</textarea>
                                        <label for="message">Message</label>
                                    </div>
                                    @error('msg')
                                        <span class="text-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  start of contact us  --}}


    {{--  start of projects  --}}
    <div class="container-xxl py-5">
         <div class="container">
             <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                 <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Projects</p>
                 <h1 class="display-5 mb-5">We Have Completed Latest Projects</h1>
             </div>
             <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
               @foreach ($projects as $project)

               <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="{{ asset('storage/'.$project->img)}}" alt="{{ $project->name }}">
                        <a href="{{ $project->link }}"><i class="fa fa-link fa-3x text-primary"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">{{ $project->name }}</h4>
                    </div>
               </div>
               @endforeach

             </div>
         </div>
    </div>
    {{--  start of projects  --}}


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

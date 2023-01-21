@extends('dashboard.layouts.app')

@section('title' , __('models.home'))

@section('content')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                <div class="row match-height">
                    <!-- Greetings Card starts -->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card card-congratulations">
                            <div class="card-body text-center">
                                <img src="{{ url('dashboard') }}/app-assets/images/elements/decore-left.png" class="congratulations-img-left" alt="card-img-left" />
                                <img src="{{ url('dashboard') }}/app-assets/images/elements/decore-right.png" class="congratulations-img-right" alt="card-img-right" />
                                <div class="avatar avatar-xl bg-primary shadow">
                                    <div class="avatar-content">
                                        <i data-feather="award" class="font-large-1"></i>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h1 class="mb-1 text-white">{{ __('models.welcome') }} {{ auth()->user()->name }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Greetings Card ends -->

                    <div class="row match-height">



                        {{--  admins  --}}
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.admins.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/team.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.admins') }}</h2>
                                        <p><span class="badge badge-pill badge-light-primary mr-1">{{ $admins }}</span></p>

                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>

                        {{--  banners  --}}
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.banners.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/cubes.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.banners') }}</h2>
                                        <p><span class="badge badge-pill badge-light-primary mr-1">{{ $banners }}</span></p>

                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>


                        {{--  feautures  --}}
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.feautures.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/cons.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.feautures') }}</h2>
                                        <p><span class="badge badge-pill badge-light-primary mr-1">{{ $feautures }}</span></p>

                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>


                        {{--  abouts  --}}
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.abouts.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/bookshelf.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.abouts') }}</h2>
                                        <p><span class="badge badge-pill badge-light-primary mr-1">{{ $abouts }}</span></p>

                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>


                        {{--  categories  --}}
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.categories.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/man.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.categories') }}</h2>
                                        <p><span class="badge badge-pill badge-light-primary mr-1">{{ $categories }}</span></p>

                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>


                        {{--  services  --}}
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.services.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/man.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.services') }}</h2>
                                        <p><span class="badge badge-pill badge-light-primary mr-1">{{ $services }}</span></p>

                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>



                        {{--  works  --}}
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.works.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/cons.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.works') }}</h2>
                                        <p><span class="badge badge-pill badge-light-primary mr-1">{{ $works }}</span></p>

                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>



                        {{--  clints  --}}
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.clints.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/notifications.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.clints') }}</h2>
                                        <p><span class="badge badge-pill badge-light-primary mr-1">{{ $clints }}</span></p>

                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>


                        {{--  teams  --}}

                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.teams.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/refuse.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.teams') }}</h2>
                                        <p><span class="badge badge-pill badge-light-primary mr-1">{{ $teams }}</span></p>

                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>








                    </div>

                </div>



            </section>
            <!-- Dashboard Analytics end -->






        </div>


    </div>
</div>



@push('js')

@endpush
@endsection

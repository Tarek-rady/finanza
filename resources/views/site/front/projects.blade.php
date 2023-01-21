@extends('site.layouts.site')

@section('title')
   Projects
@endsection

@section('style')
@endsection


@section('content')

    {{--  start of headers  --}}
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Projects</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                </ol>
            </nav>
        </div>
    </div>
    {{--  start of headers  --}}



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






@endsection


@section('js')

@endsection

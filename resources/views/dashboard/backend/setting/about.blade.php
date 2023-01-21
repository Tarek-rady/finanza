@extends('dashboard.layouts.app')

@section('title' , __('models.about_us')  )

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item"><a href="#">{{ __('models.about_us') }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">{{ __('models.about_us') }}</h2>
                                </div>
                                <div class="card-body">
                                    <form class="form form-vertical needs-validation"
                                        action="{{ route('admin.about-store') }}" method="POST"
                                        enctype="multipart/form-data" novalidate>
                                        @method('PUT')
                                        @csrf
                                        <div class="row">

                                            {{--  title_ar  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="title_ar">{{ __('models.title_ar') }}</label>
                                                    <input type="text" id="title_ar" class="form-control" name="title_ar"
                                                        value="{{ old('title_ar' , $about->title_ar) }}" required/>

                                                    @error('title_ar')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  title_en  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="title_en">{{ __('models.title_en') }}</label>
                                                    <input type="text" id="title_en" class="form-control" name="title_en"
                                                        value="{{ old('title_en' , $about->title_en) }}" required/>

                                                    @error('title_en')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>




                                            {{--  desc ar --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="desc_ar">{{ __('models.desc_ar') }}</label>
                                                <textarea class="form-control editor" cols="40" rows="10"id="desc_ar" name="desc_ar" >{{ old('desc_ar' , $about->desc_ar) }}</textarea>

                                                    @error('desc_ar')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  desc_en --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="desc_en">{{ __('models.desc_en') }}</label>
                                                <textarea class="form-control editor" cols="40" rows="10"id="desc_en" name="desc_en" >{{ old('desc_en' , $about->desc_en) }}</textarea>

                                                    @error('desc_en')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>


                                            {{--  story ar --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="story_ar">{{ __('models.story_ar') }}</label>
                                                <textarea class="form-control editor" cols="40" rows="10"id="story_ar" name="story_ar" >{{ old('story_ar' , $about->story_ar) }}</textarea>

                                                    @error('story_ar')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  story_en --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="story_en">{{ __('models.story_en') }}</label>
                                                <textarea class="form-control editor" cols="40" rows="10"id="story_en" name="story_en" >{{ old('story_en' , $about->story_en) }}</textarea>

                                                    @error('story_en')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  mission ar --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="mission_ar">{{ __('models.mission_ar') }}</label>
                                                <textarea class="form-control editor" cols="40" rows="10"id="mission_ar" name="mission_ar" >{{ old('mission_ar' , $about->mission_ar) }}</textarea>

                                                    @error('mission_ar')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  mission_en --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="mission_en">{{ __('models.mission_en') }}</label>
                                                <textarea class="form-control editor" cols="40" rows="10"id="mission_en" name="mission_en" >{{ old('mission_en' , $about->mission_en) }}</textarea>

                                                    @error('mission_en')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  vision ar --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="vision_ar">{{ __('models.vision_ar') }}</label>
                                                <textarea class="form-control editor" cols="40" rows="10"id="vision_ar" name="vision_ar" >{{ old('vision_ar' , $about->vision_ar) }}</textarea>

                                                    @error('vision_ar')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  vision_en --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="vision_en">{{ __('models.vision_en') }}</label>
                                                <textarea class="form-control editor" cols="40" rows="10"id="vision_en" name="vision_en" >{{ old('vision_en' , $about->vision_en) }}</textarea>

                                                    @error('vision_en')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>








                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="formFile" class="form-label">{{ __('models.image') }}</label>
                                                <input class="form-control image" type="file" id="formFile"
                                                    name="img" >

                                                @error('img')
                                                    <span class="text-danger">
                                                        <small class="errorTxt">{{ $message }}</small>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group prev">
                                                <img src="{{ asset('storage/'.$about->img) }}" style="width: 100px" class="img-thumbnail preview-formFile" alt="">
                                            </div>




                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1">{{ __('models.save') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Vertical form layout section end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    @push('js')
    <script src="{{ asset('dashboard/app-assets/js/custom/preview-image.js') }}"></script>
    @endpush
@endsection

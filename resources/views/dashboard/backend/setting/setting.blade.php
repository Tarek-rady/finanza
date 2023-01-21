@extends('dashboard.layouts.app')

@section('title' , __('models.setting')  )

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
                                    {{--  <li class="breadcrumb-item"><a href="{{ route('admin.clints.index') }}">{{ __('models.clints') }}</a>
                                    </li>  --}}
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.setting') }}</a>
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
                                    <h2 class="card-title">{{ __('models.setting') }}</h2>
                                </div>
                                <div class="card-body">
                                    <form class="form form-vertical needs-validation"
                                        action="{{ route('admin.setting-store') }}" method="POST"
                                         novalidate>
                                        @method('PUT')
                                        @csrf
                                        <div class="row">



                                            {{--  twitter  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="twitter">{{ __('models.twitter') }}</label>
                                                    <input type="text" id="twitter" class="form-control" name="twitter"
                                                        value="{{ old('twitter' , $setting->twitter) }}" required/>

                                                    @error('twitter')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  facebook  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="facebook">{{ __('models.facebook') }}</label>
                                                    <input type="text" id="facebook" class="form-control" name="facebook"
                                                        value="{{ old('facebook' , $setting->facebook) }}" required/>

                                                    @error('facebook')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  instagram  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="instagram">{{ __('models.instagram') }}</label>
                                                    <input type="text" id="instagram" class="form-control" name="instagram"
                                                        value="{{ old('instagram' , $setting->instagram) }}" required/>

                                                    @error('instagram')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  youtube  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="youtube">{{ __('models.youtube') }}</label>
                                                    <input type="text" id="youtube" class="form-control" name="youtube"
                                                        value="{{ old('youtube' , $setting->youtube) }}" required/>

                                                    @error('youtube')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>


                                            {{--  linkedin  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="linkedin">{{ __('models.linkedin') }}</label>
                                                    <input type="text" id="linkedin" class="form-control" name="linkedin"
                                                        value="{{ old('linkedin' , $setting->linkedin) }}" required/>

                                                    @error('linkedin')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  phone  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="phone">{{ __('models.phone') }}</label>
                                                    <input type="number" id="phone" class="form-control" name="phone"
                                                        value="{{ old('phone' , $setting->phone) }}" required/>

                                                    @error('phone')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  gmail  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="gmail">{{ __('models.gmail') }}</label>
                                                    <input type="text" id="gmail" class="form-control" name="gmail"
                                                        value="{{ old('gmail' , $setting->gmail) }}" required/>

                                                    @error('gmail')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  start_time  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="start_time">{{ __('models.start_time') }}</label>
                                                    <input type="text" id="start_time" class="form-control" name="start_time"
                                                        value="{{ old('start_time' , $setting->start_time) }}" required/>

                                                    @error('start_time')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  end_time  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="end_time">{{ __('models.end_time') }}</label>
                                                    <input type="text" id="end_time" class="form-control" name="end_time"
                                                        value="{{ old('end_time' , $setting->end_time) }}" required/>

                                                    @error('end_time')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            <div class="col-md-6 col-12 mb-3"></div>

                                            <div class="col-md-12 col-12 mb-3">
                                                <div class="d-flex col-md-12 flex-column mb-7 fv-row fv-plugins-icon-container">
                                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                            <span class="required" style="font-weight:bold">
                                                                {{ __('models.location') . ' ('.__('models.search_in_map').')' }}
                                                            </span>

                                                        </label>
                                                            <input type="text"  name="icon"  class="form-control form-control-solid" id="searchInput" value="{{ old('location' , $setting->location) }}" >

                                                </div> <br>
                                           </div>

                                            <div class="col-md-12 col-12 mb-3">
                                                <div class="d-flex col-12 flex-column mb-7 fv-row fv-plugins-icon-container" style="height:100vh">
                                                    <input type="hidden" name="location" class="form-control" id="location"  value="{{ old('location' , $setting->location) }}">
                                                    <input type="hidden" name="lat" class="form-control" id="lat"  value="{{ old('lat' , $setting->lat) }}">
                                                    <input type="hidden" name="lng" class="form-control" id="lng"  value="{{ old('lng' , $setting->lng) }}">
                                                    <div id="map" style="height: 100%;width: 100%;">
                                                </div>
                                            </div>


                                            <br><br>




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
    @include('dashboard.backend.setting.mab')
    @endpush
@endsection

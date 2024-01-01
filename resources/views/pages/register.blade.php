@extends('layouts.app')
@section('content')
    <div class=" regSec2">
        <div class="container comPadding22">
            <div class="row gx-0">
                <div class="col-lg-6 col-md-12 col-sm-12" style="position: relative;">
                    <img src={{ asset('images/abc.jpg') }} class="imgResigter" alt="...">
                    <div class="regImgTexg">
                        <h2 class="heading1 text-center pb-2"> <span class=""> Register </span>with us</span>
                        </h2>
                        <p>For an exclusive opportunity to access personalized services, valuable resources, and stay informed about the latest updates tailored to your needs</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 ">
                    </h2>
                    <div style='background:white'>
                        <div class="formSec regForm">
                            <div>
                                @include('pages.section.registerform')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

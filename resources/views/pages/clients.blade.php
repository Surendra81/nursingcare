@extends('layouts.app')
@section('content')
    <div class="clientBg"></div>
    <div class="clientCont">
        <h2 class="heading1"><span class="clgs heading1">We </span> Care Jobs and we Offer Specialized Services</h2>
        <p>Explore your options for a rewarding career in aged care Lorem ipsum dolor, sit amet consectetur adipisicing
            elit. Ipsam, dicta!</p>
        <a href="#postForm">
            <button class="btn btnPrimary btnAbt1 mt-2">Register A Vacancy</button>
        </a>
    </div>
    <div>
        @include('pages.section.believe')
    </div>
    <div>
        @include('pages.section.info')
    </div>
    <div class="bgColor comPadding" id="postForm">
        <h2 class="heading1 text-center pb-3"><span class="clgs"> Register</span> your Vacancy</h2>
        <div class="row">
            <div class="col-3 resNon tabNon"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 resFormEmp">
                <div class="postForm">
                    @include('pages.section.postVacancy')
                </div>
            </div>
            <div class="col-3 resNon tabNon"></div>
        </div>
    </div>

    <div class="bgClient2">
        <div class="bgText2">
            <div class="textBoxClient">
                <p>We’re available around the clock and specialise in providing the best support for health care providers.
                </p>
            </div>
        </div>

    </div>
@endsection

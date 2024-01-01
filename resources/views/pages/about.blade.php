@extends('layouts.app')
@section('content')
    <div class="abtBg"></div>
    <div class="abtCont1">
        <h2><span class="clgs">Aged </span> Care Jobs</h2>
        <p>Explore your options for a rewarding career in aged care fulfilling opportunities to provide compassionate and dedicated care to elderly individuals, making a positive impact on their well-being and quality of life.</p>
        <a href="/register">
            <button class="btn btnPrimary btnAbt1">Register with us</button>
        </a>
    </div>
    <div>
        @include('pages.section.content')
    </div>
    <div class="abt3Cont">
        <div class="container comPadding">
            <div class="text-center" style="color: white">
                <h1 class="heading1 pt-5">Why we are <span class="clgs"> difference ? </span></h1>
                <p class="p2">We differentiate ourselves through innovative client-centric solutions, fostering diversity and inclusion, upholding unwavering integrity, investing in continuous learning, embracing sustainable practices, prioritizing transparent communication, and cultivating an adaptable and collaborative team dedicated to excellence.</p>
            </div>
            <div class="row cardAbtSec1 ">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="abtCard">
                        <i class="fa-brands fa-buromobelexperte iconAbt"></i>
                        <hr class="lineStyle" />
                        <p class=" p3" style="color: white">Our commitment to growth extends to our team. We invest in continuous learning and development to ensure expertise and adaptability.</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="abtCard">
                        <i class="fa-solid fa-fire iconAbt"></i>
                        <hr class="lineStyle" />
                        <p class=" p3" style="color: white">We celebrate diversity, fostering an inclusive environment that values unique perspectives and promotes collaboration.</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 tabMt1">
                    <div class="abtCard">
                        <i class="fa-solid fa-earth-americas iconAbt"></i>
                        <hr class="lineStyle" />

                        <p class=" p3" style="color: white">In a rapidly changing world, we embrace adaptability and agility, responding proactively to challenges and opportunities.</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 tabMt1">
                    <div class="abtCard">
                        <i class="fa-brands fa-buromobelexperte iconAbt"></i>
                        <hr class="lineStyle" />
                        <p class=" p3" style="color: white">We are unwavering in our pursuit of excellence, setting high standards and consistently delivering quality outcomes for our clients and stakeholders.</p>

                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="container comPadding resNon">
        <div class="row gx-5" style="position: relative">
            <div class="col-6">
                <div>
                    <img src={{ asset('images/second.jpg') }} class="imgTes" alt="icon" />
                </div>
            </div>
            <div class="col-6">
                <div class="tesCont">
                    <div style="padding: 3rem">
                        <h2 class="heading2 pb-5">
                            What our <span class="clgp">Clients</span> <br> say
                        </h2>
                        <p class="py-2" style="font-size: 1.2rem; font-weight:100">Their commitment to excellence, innovative solutions, and client-centric approach have exceeded my expectations, 
                        ensuring a positive and rewarding experience throughout our collaboration.</p>

                        <h4 style="font-weight: 600">Bharat KC</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        @include('pages.section.info')
    </div>
@endsection

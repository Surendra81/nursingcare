@extends('layouts.app')
@section('content')
    <div class="abtBg"></div>
    <div class="abtCont1">
        <h2><span class="clgs">Aged </span> Care Jobs</h2>
        <p>Explore your options for a rewarding career in aged care Lorem ipsum dolor, sit amet consectetur adipisicing
            elit. Ipsam, dicta!</p>
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
                <p class="p2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem</p>
            </div>
            <div class="row cardAbtSec1 ">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="abtCard">
                        <i class="fa-brands fa-buromobelexperte iconAbt"></i>
                        <hr class="lineStyle" />
                        <p class=" p3" style="color: white">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Voluptate labore ut
                            earum, nobis libero
                            facilis!</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="abtCard">
                        <i class="fa-solid fa-fire iconAbt"></i>
                        <hr class="lineStyle" />
                        <p class=" p3" style="color: white">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Voluptate labore ut
                            earum, nobis libero
                            facilis!</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 tabMt1">
                    <div class="abtCard">
                        <i class="fa-solid fa-earth-americas iconAbt"></i>
                        <hr class="lineStyle" />

                        <p class=" p3" style="color: white">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Voluptate labore ut
                            earum, nobis libero
                            facilis!</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 tabMt1">
                    <div class="abtCard">
                        <i class="fa-brands fa-buromobelexperte iconAbt"></i>
                        <hr class="lineStyle" />
                        <p class=" p3" style="color: white">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Voluptate labore ut
                            earum, nobis libero
                            facilis!</p>

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
                        <p class="py-2" style="font-size: 1.2rem; font-weight:100">Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Eligendi et praesentium
                            aperiam esse,
                            quasi, deleniti aspernatur assumenda unde dignissimos officia velit libero est ipsum voluptate
                            iusto voluptas suscipit ratione sunt? Eaque recusandae, a dolores quasi quod architecto tempora
                            distinctio earum.</p>

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

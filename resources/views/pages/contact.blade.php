@extends('layouts.app')
@section('content')
    <div>
        <div style="background: linear-gradient(90deg, rgba(17,155,183,1) 22%, rgba(9,6,105,1) 70%, rgba(9,4,104,1) 100%);">
            <div class="container comPadding">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 contactBox" style="border-right: 1px solid">
                        <div>
                            <i class="fa-solid fa-phone iconBg"></i>
                        </div>
                        <h5 class="pb-1">Contact Number</h5>
                        <p style="font-weight: 200">98121213131</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 contactBox" style="border-right: 1px solid">
                        <div>
                            <i class="fa-solid fa-location-dot iconBg"></i>
                        </div>
                        <h5 class="pb-1">Address</h5>
                        <p style="font-weight: 200">39 East Esplanade, Manly,
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 contactBox tabMt1" style="border-right: 1px solid">
                        <div>
                            <i class="fa-solid fa-envelope iconBg"></i>
                        </div>
                        <h5 class="pb-1">E-mail</h5>
                        <p style="font-weight: 200">info@gmail.com</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 contactBox tabMt1">
                        <div>
                            <i class="fa-solid fa-thumbs-up iconBg"></i>
                        </div>
                        <h5 class="pb-1">Social Media</h5>
                        <div class="flex">
                            <i class="fa-brands fa-facebook" style="font-size: 1.5rem"></i>
                            <i class="fa-brands fa-square-instagram" style="padding-left: 1rem; font-size:1.5rem"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container comPadding">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 ContactForm">
                    <h2 class="pb-3 clgp" style="font-weight: 700">Get in touch</h2>
                    <form>
                        <div class="mb-4">
                            <input type="text" class="form-control formInput" placeholder="Enter full name"
                                id="firstname">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control formInput" placeholder="Enter email" id="email">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control formInput" placeholder="Enter phone number"
                                id="number">
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control" placeholder="Leave a message" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btnPrimary" style="width: 100%">Submit</button>
                        </div>

                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe class="mapSec"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.07956067039!2d85.29893987525291!3d27.68393577619602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19697c5b2565%3A0xb819ba24608c1237!2sDasmalab%20Technologies%20%3A%20Software%20%26%20Data%20computing%20company!5e0!3m2!1sen!2snp!4v1702916695223!5m2!1sen!2snp"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>
@endsection

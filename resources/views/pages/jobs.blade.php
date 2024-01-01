@extends('layouts.app')
@section('content')
    <div class="jobBg"></div>
    <div class="jobCont1">
        <h2 class="heading1"><span class="clgs heading1">Nursing </span> Jobs</h2>
        <p>Discover rewarding nursing jobs with us, where your skills and dedication contribute to the well-being of our community.</p>
        <a href="/register">
            <button class="btn btnPrimary btnAbt1 mt-2">Connect with us</button>
        </a>
    </div>
    <div class="jobCont2">
        <h2 class="heading1"><span class="clgp heading1">Aged </span> Care Jobs</h2>
        <p>Explore fulfilling opportunities in aged care jobs with us. Join our team to provide compassionate and dedicated care to elderly individuals, 
            making a positive impact on their well-being and quality of life.</p>
        <a href="/register">
            <button class="btn btnPrimary  btnAbt1 mt-2" style="background:#21295c">Register with us</button>
        </a>
    </div>
    <div>@include('pages.section.info')</div>
@endsection

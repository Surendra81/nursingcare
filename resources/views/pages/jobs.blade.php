@extends('layouts.app')
@section('content')
    <div class="jobBg"></div>
    <div class="jobCont1">
        <h2 class="heading1"><span class="clgs heading1">Nursing </span> Jobs</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio quas fuga magnam error voluptatem, voluptates
            blanditiis quos ullam maiores? Quisquam?</p>
        <a href="/register">
            <button class="btn btnPrimary btnAbt1 mt-2">Connect with us</button>
        </a>
    </div>
    <div class="jobCont2">
        <h2 class="heading1"><span class="clgp heading1">Aged </span> Care Jobs</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio quas fuga magnam error voluptatem, voluptates
            blanditiis quos </p>
        <a href="/register">
            <button class="btn btnPrimary  btnAbt1 mt-2" style="background:#21295c">Register with us</button>
        </a>
    </div>
    <div>@include('pages.section.info')</div>
@endsection

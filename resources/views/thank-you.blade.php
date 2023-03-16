@extends('layouts.master')
@section('meta_title','Thank You')
@section('meta_Description',' ')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Thank You</h1>
            <a href="{{ route('home') }}" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Thank You</a>
        </div>
    </div>
</div>

<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="bg-light p-4 text-center">
            <h2>Thank You</h2>
            <p>We have received your query. Our team will contact you soon.</p>
            <a class="btn btn-dark" href="{{ route('home') }}">Go To Home</a>
        </div>
    </div>
</div>

@include('common.about')
@include('common.vendor')
@endsection
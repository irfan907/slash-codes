@extends('layouts.master')
@section('meta_title','Pricing')
@section('meta_Description',' ')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Pricing</h1>
            <a href="{{ route('home') }}" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Pricing</a>
        </div>
    </div>
</div>  
@include('common.pricing')
@include('common.quote')
@include('common.vendor')
@endsection
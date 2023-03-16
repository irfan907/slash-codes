@extends('layouts.master')
@section('meta_title','Graphic Designing')
@section('meta_Description','')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Graphic Designing</h1>
            <a href="{{ route('home') }}" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="{{ route('services') }}" class="h5 text-white">Services</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Graphic Designing</a>
        </div>
    </div>
</div> 
@endsection
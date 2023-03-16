@extends('layouts.master')
@section('meta_title','Home')
@section('meta_Description',' ')

@section('content')
    @include('common.home-corousel')
    @include('common.facts')
    @include('common.about')
    @include('common.features')
    @include('common.services')
    @include('common.quote')
    @include('common.testimonial')
    @include('common.latest-blogs')
    @include('common.vendor')
    
@endsection
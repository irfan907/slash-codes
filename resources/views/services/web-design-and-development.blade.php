@extends('layouts.master')
@section('meta_title','Web Design & Development')
@section('meta_Description','')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Web Design & Development</h1>
            <a href="{{ route('home') }}" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="{{ route('services') }}" class="h5 text-white">Services</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Web Design & Development</a>
        </div>
    </div>
</div> 
<div class="container">
    <div class="content-box">
        <h2 class="text-center">Unleash the Power of Your Website with Slash Codes Development</h2>
        <p>
            Stand out in the digital world with Slash Codes' web design and development services. Our experts will work with you to create a custom website that reflects your unique brand and captivates your audience. Let's work together to leave a lasting impression with a website that's both visually stunning and highly functional.

        </p>

        <div class="bg-light my-5 p-4 rounded-2 row">
            <h2 class="text-center">
                Making Your Brand Shine on the Web
            </h2>
            <div class="col-md-6">
                <p>
                    As a business owner, you understand the importance of a strong online presence. With so much competition in the digital world, it can be tough to make your brand stand out. That's where Slash Codes comes in. We specialize in creating custom web solutions that help your brand shine. We’ve got the skills and experience needed to design a website that's both visually stunning and highly functional, ensuring that you connect with your target audience and drive more sales.
                    <br> <br>
                    We take the time to understand your business goals and target audience. We believe that every website should be as unique as the brand it represents, so we work closely with you to create a custom design that perfectly reflects your brand's personality and values.
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    Whether you're looking to launch a brand new website or revamp your existing one, we're here to help you make your brand shine.
                    <br>
                    Our team of experts is passionate about what they do, and they're always up-to-date with the latest web design and development trends and techniques. We're committed to delivering exceptional results that exceed your expectations. With our web design and development services, you can rest assured that your brand will stand out in the crowded online marketplace.
                    <br><br>
                    Don't settle for a generic website that blends in with the crowd. Let’s create a custom web solution together that makes your brand shine.
                </p>
            </div>
        </div>
        <div class="my-5"></div>


        <div class="row my-4">
            <div class="col-md-6">
                <h3>Impressive Portfolio
                </h3>
                <p>Experience the power of impressive web design and development with Slash Codes' extensive portfolio of successful projects.
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('theme/img/carousel-1.jpg') }}" style="height:150px; width: 100%; object-fit: contain;" alt="">
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-6">
                <img src="{{ asset('theme/img/carousel-1.jpg') }}" style="height:150px; width: 100%; object-fit: contain;" alt="">
            </div>
            <div class="col-md-6">
                <h3>Affordable Service
                </h3>
                <p>Discover the perfect balance between quality and affordability with Slash Codes' web solutions, designed to fit any budget.</p>
                </div>
        </div>
        <div class="row my-4">
            <div class="col-md-6">
                <h3>User-Oriented Development</h3>
                <p>At Slash Codes, we prioritize your users and their needs, delivering exceptional web solutions that put them at the forefront.
                </p>            
            </div>
            <div class="col-md-6">
                <img src="{{ asset('theme/img/carousel-1.jpg') }}" style="height:150px; width: 100%; object-fit: contain;" alt="">
            </div>
        </div>
        <div class="row my-5">
            <div class="bg-light col-12 p-3 rounded-2">
                <p>
                    <h2 class="text-center">                    Why Work With Slash Codes?
                    </h2>
                    <p>
                        At Slash Codes, we believe that your online presence should be as unique as your brand. That's why we offer customized web solutions designed to meet your specific business needs. Our team of experts is passionate about what they do, and we pride ourselves on delivering exceptional results that exceed your expectations.
                        <br>
                        With our affordable, user-oriented development approach, we'll create a website that's both visually astonishing and highly functional, helping you connect with your target audience and drive more sales. Whether you're looking to launch a brand new website or revamp your existing one, we're here to help you make your brand shine on the web.
                        <br>
                        Experience the power of impressive web design and development with Slash Codes. Contact us today to take your online presence to the next level!

                    </p>

                </p>
            </div>
        </div>
    </div>
</div>
@endsection
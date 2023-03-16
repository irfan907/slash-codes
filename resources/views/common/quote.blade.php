    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                        </div>
                    </div>
                    <p class="mb-4">Figuring out what our users genuinely need is something we love to assist with. Please let us know if you have any further questions about your issue or why choosing us is the best option for you. We'll be extremely delighted to assist you in providing the proper nourishment for your blossoming tree.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+92 3030 637781</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form action="{{ route('save_quote') }}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email"  value="{{ old('email') }}" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;" required>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <select name="service" class="form-select bg-light border-0" style="height: 55px;" required>
                                        <option value="" selected>Select A Service</option>
                                        <option >Web Development</option>
                                        <option >App Development</option>
                                        <option >Digital Marketing</option>
                                        <option >Graphic Designing</option>
                                        <option >360° Solutions</option>
                                    </select>
                                    @error('service')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <textarea name="message"  value="{{ old('message') }}" class="form-control bg-light border-0" rows="3" placeholder="Message" required></textarea>
                                    @error('message')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <input type="hidden" value="{{ url()->current() }}" name="page" id="">
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Request Free Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
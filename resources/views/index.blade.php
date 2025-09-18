@include('partial.header')

{{-- Hero Section --}}
<section class="container py-5 mt-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <h1 class="display-4 fw-bold lh-sm">
                Your Plug For Flawless <br>
                <span class="text-success">Skin</span>
            </h1>
            <p class="lead mt-3 text-muted">
                We're here to empower you with the tools and knowledge you need to achieve your
                skincare goals. Join us on the path to glowing, radiant skin – your journey starts now.
            </p>
            <a href="{{ route('signup') }}" 
               class="btn btn-success btn-lg mt-3 shadow-sm px-4 py-2 rounded-pill">
                Get Started
            </a>
        </div>
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/fair.jpg') }}" 
                 class="img-fluid rounded shadow-lg hover-zoom" 
                 alt="Skincare">
        </div>
    </div>
    <hr class="border-success mt-5">
</section>

{{-- Signature Section --}}
<section class="container py-5">
    <h2 class="text-center mb-5 fw-semibold">Rejuvenate your complexion with our signature</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm text-center h-100 p-4 hover-shadow rounded-3">
                <img src="{{ asset('images/Feature-1.jpg') }}" 
                     class="rounded-circle mx-auto mb-3 border border-3 border-success"
                     style="width: 130px; height: 130px; object-fit: cover;" alt="">
                <h4 class="fw-bold mb-3">Skin Analysis</h4>
                <p class="text-muted">There is no one-size-fits-all skincare regimen. Many factors play a role in proper care.</p>
                <a href="#" class="btn btn-outline-success mt-3 rounded-pill">Read More</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm text-center h-100 p-4 hover-shadow rounded-3">
                <img src="{{ asset('images/pedicure.jpeg') }}" 
                     class="rounded-circle mx-auto mb-3 border border-3 border-success"
                     style="width: 130px; height: 130px; object-fit: cover;" alt="">
                <h4 class="fw-bold mb-3">Spa Treatments</h4>
                <p class="text-muted">Pamper yourself from head to toe. Indulge in relaxing treatments for a luxurious experience.</p>
                <a href="#" class="btn btn-outline-success mt-3 rounded-pill">Read More</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm text-center h-100 p-4 hover-shadow rounded-3">
                <img src="{{ asset('images/choco 1.jpg') }}" 
                     class="rounded-circle mx-auto mb-3 border border-3 border-success"
                     style="width: 130px; height: 130px; object-fit: cover;" alt="">
                <h4 class="fw-bold mb-3">Custom Care</h4>
                <p class="text-muted">We design skincare tailored for you. Glow with confidence using a personalized regimen.</p>
                <a href="#" class="btn btn-outline-success mt-3 rounded-pill">Read More</a>
            </div>
        </div>
    </div>
</section>

{{-- Natural Section --}}
<section class="bg-pattern py-5 text-center">
   <div class="container position-relative" style="z-index: 1;">
       <h2 class="fw-semibold mb-4">We are Natural, Cruelty-Free Skincare</h2>
       <p class="fs-5 text-muted mx-auto" style="max-width: 800px;">
           At Natural, we believe true beauty comes from nature's bounty...
       </p>
   </div>
</section>


{{-- Products Section --}}
<section class="container py-5">
    <h2 class="text-center fw-semibold mb-5">Start Your Skincare Journey</h2>
    <div class="row g-4">
        
        <div class="col-md-4">
            <a href="your_link_here" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-card">
                    <div class="img-container">
                        <img src="{{ asset('images/jeedah 1.jpg') }}" 
                             class="card-img-top" alt="Body Cream">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="fw-bold text-dark">Body Cream</h5>
                        <small class="text-muted fw-semibold">Nourish & Glow</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="your_link_here" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-card">
                    <div class="img-container">
                        <img src="{{ asset('images/scrub.jpg') }}" 
                             class="card-img-top" alt="Body Scrub">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="fw-bold text-dark">Body Scrub</h5>
                        <small class="text-muted fw-semibold">Exfoliate & Renew</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="your_link_here" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-card">
                    <div class="img-container">
                        <img src="{{ asset('images/face.jpg') }}" 
                             class="card-img-top" alt="Face Cream">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="fw-bold text-dark">Face Cream</h5>
                        <small class="text-muted fw-semibold">Hydrate & Protect</small>
                    </div>
                </div>
            </a>
        </div>

    </div>
</section>

{{-- Why Choose Us Section --}}
<section class="container py-5">
    <h2 class="text-center fw-semibold mb-5">Why Choose Us?</h2>
    <div class="row g-4 text-center">
        <div class="col-md-3">
            <div class="p-4 border rounded-3 shadow-sm hover-shadow h-100">
                <i class="bi bi-leaf text-success display-5 mb-3"></i>
                <h5 class="fw-bold">Natural Ingredients</h5>
                <p class="text-muted">We use only natural and safe ingredients for your skin.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4 border rounded-3 shadow-sm hover-shadow h-100">
                <i class="bi bi-heart text-danger display-5 mb-3"></i>
                <h5 class="fw-bold">Cruelty-Free</h5>
                <p class="text-muted">Our products are never tested on animals – 100% ethical.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4 border rounded-3 shadow-sm hover-shadow h-100">
                <i class="bi bi-star text-warning display-5 mb-3"></i>
                <h5 class="fw-bold">Trusted Quality</h5>
                <p class="text-muted">Dermatologist-tested, safe, and trusted by thousands.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4 border rounded-3 shadow-sm hover-shadow h-100">
                <i class="bi bi-truck text-primary display-5 mb-3"></i>
                <h5 class="fw-bold">Fast Delivery</h5>
                <p class="text-muted">Quick and reliable delivery right to your doorstep.</p>
            </div>
        </div>
    </div>
</section>

{{-- Testimonials Section --}}
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center fw-semibold mb-5">What Our Customers Say</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <p class="text-muted">"These products changed my skincare routine completely! My skin is glowing."</p>
                    <div class="d-flex align-items-center mt-3">
                        <img src="{{ asset('images/testimonial1.jpg') }}" class="rounded-circle me-3" width="50" height="50" alt="">
                        <div>
                            <h6 class="fw-bold mb-0">Amina Bello</h6>
                            <small class="text-muted">Lagos, Nigeria</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <p class="text-muted">"The spa treatment was so relaxing, I felt like a new person afterwards."</p>
                    <div class="d-flex align-items-center mt-3">
                        <img src="{{ asset('images/testimonial2.jpg') }}" class="rounded-circle me-3" width="50" height="50" alt="">
                        <div>
                            <h6 class="fw-bold mb-0">Chinedu Okafor</h6>
                            <small class="text-muted">Abuja, Nigeria</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <p class="text-muted">"Finally found cruelty-free skincare that actually works. Highly recommend!"</p>
                    <div class="d-flex align-items-center mt-3">
                        <img src="{{ asset('images/testimonial3.jpg') }}" class="rounded-circle me-3" width="50" height="50" alt="">
                        <div>
                            <h6 class="fw-bold mb-0">Grace Adeyemi</h6>
                            <small class="text-muted">Ibadan, Nigeria</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Call to Action Section --}}
<section class="bg-dots py-5 text-center">
   <div class="container">
       <h2 class="fw-semibold mb-4">Glow Naturally, Shine Beautifully</h2>
       <p class="lead mb-4">Take the first step towards healthier skin today.</p>
       <a href="{{ route('signup') }}" class="btn btn-light btn-lg px-5 rounded-pill shadow-sm">Get Started</a>
   </div>
</section>


{{-- Newsletter Section --}}
<section class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 class="fw-semibold mb-3">Stay Updated</h2>
            <p class="text-muted mb-4">Subscribe to our newsletter and never miss skincare tips and exclusive offers.</p>
            <form class="d-flex flex-column flex-sm-row justify-content-center">
                <input type="email" class="form-control me-sm-2 mb-2 mb-sm-0 rounded-pill" placeholder="Enter your email">
                <button class="btn btn-success px-4 rounded-pill">Subscribe</button>
            </form>
        </div>
    </div>
</section>

@include('partial.footer')

{{-- Custom hover effects --}}
<style>
    .hover-zoom:hover {
        transform: scale(1.03);
        transition: transform 0.3s ease-in-out;
    }
    .hover-shadow:hover {
        box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
        transform: translateY(-5px);
        transition: all 0.3s ease-in-out;
        }
        /* Wavy Background */
    section.bg-pattern{
    background: linear-gradient(135deg, #f8f9fa 25%, #e9f7ef 100%);
    position: relative;
    overflow: hidden;
}

section.bg-pattern::before {
    content: "";
    position: absolute;
    top: -50px;
    left: 0;
    width: 200%;
    height: 200%;
    background: url("https://www.toptal.com/designers/subtlepatterns/patterns/wavecut.png");
    opacity: 0.08;
    z-index: 0;
}

    
    .img-container {
        height: 280px;
        overflow: hidden;
    }
    .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    .hover-card:hover img {
        transform: scale(1.05);
    }
    .hover-card {
        transition: all 0.3s ease-in-out;
    }
    .hover-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
    }
</style>

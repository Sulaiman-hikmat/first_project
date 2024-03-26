@include('partial.header')

{{-- section --}}
<div class="container">
    <section style="margin-top: 80px">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 style="font-size:50px" class="mt-4">Your Plug For Flawless <br> <span
                            class="text-success">Skin</span></h1>
                    <p class="ms-4">we're here to empower you with the tools and knowledge you need to achieve your
                        skincare goals.
                        Join us on the path to glowing, radiant skin your journey starts now.</p>
                    <button class="btn btn-success  animate__animated animate__bounce animate__delay-2s mb-3">View
                        now</button>
                    <a href="#"
                        class="btn btn-success animate__animated animate__bounce animate__delay-2s mb-3">Link</a>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('images/fair.jpg') }}" height="500">
                </div>
            </div>
        </div>
    </section>
    {{-- why --}}


    <section class="mt-5">
        <div class="row">
            <div class="col mb-5">

                <img src="{{ asset('images/cream 1.jpg') }}" alt="">
            </div>
            <div class="col">
                <h2 class="text-center text-success">Why Choose Us</h2>
                <p> Our skincare formulations are crafted using carefully selected natural ingredients
                    known for their efficacy and safety. We believe in harnessing the power of nature to
                    deliver real results, without compromising on quality or integrity.</p>
                <p>
                    our skincare products are formulated using cutting-edge scientific techniques and technologies.
                    Each product undergoes rigorous testing to ensure maximum effectiveness and safety for all skin
                    types.
                    Whether you're dealing with acne, aging, dryness, or sensitivity, we offer a comprehensive range of
                    skincare
                    solutions designed to address your specific concerns. From gentle cleansers to potent serums, we
                    have
                    everything
                    you need to achieve healthy, radiant skin.
                    You can trust that what you see on our labels is what you get – no hidden ingredients or misleading
                    claims.
                    We're here to empower you with the knowledge you need to make informed choices about your skincare.
                </p>
                <p>Your satisfaction is our top priority. Our dedicated customer service team is here to assist you
                    every
                    step
                    of the way, from product recommendations to skincare advice. We're committed to providing an
                    exceptional
                    shopping
                    experience that exceeds your expectations.
                </p>
            </div>
        </div>
        {{-- why choose us --}}

        {{-- natural --}}
        <div>
            <h1 class="text-center">We are Natural, cruelty free skincare </h1>
            <p class="text-center col-11 fs-5"> At Natural, we believe that true beauty comes from nature's own bounty,
                and we're committed to bringing you skincare products that harness the power
                of natural ingredients. We understand the importance of caring for your skin
                without compromising on ethics,
                which is why all our products are cruelty-free, never tested on animals.</p>
        </div>
        {{-- natural --}}
        <div class="bg-light">
            <h1 class="text-center text-success">Some Of Our product</h1>
            <div class="row">
                <div class="col"><img src="{{ asset('images/body 2.jpg') }}" alt=""></div>
                <div class="col"><img src="{{ asset('images/cre2.jpeg') }}" alt=""></div>
                <div class="col"><img src="{{ asset('images/serum.jpeg') }}" alt=""></div>
                <div class="col"><img src="{{ asset('images/face4.jpeg') }}" alt=""></div>

            </div>
            <div class="row mt-5">
                <div class="col"><img src="{{ asset('images/img2.jpeg') }}" alt=""></div>
                <div class="col"><img src="{{ asset('images/dove.jpeg') }}" alt=""></div>
                <div class="col"><img src="{{ asset('images/ser2.jpeg') }}" alt=""></div>
                <div class="col"><img src="{{ asset('images/img 2.jpeg') }}" alt=""></div>
            </div>
        </div>
    </section>
    {{-- why --}}
    {{-- signature --}}
    <h1 class="text-center">Rejuvenate your complexion with our signature</h1>
    <div class="row">
        <div class="col-sm-12 col-md-4 mb-3">
            <div class="col-content d-flex flex-column justify-content-center align-items-center">
                <img class="rounded-circle img-thumbnail border-success mb-3" src="{{ asset('images/Feature-1.jpg') }}" style="width: 150px; height: 130px;" alt="">
                <h2 class="change-color mb-3">Skin analysis</h2>
                <p class="mb-3">We believe that there is no universal, one size fits all skin care regimen that will leave everybody with glowing skin. There are many factors involved in determining proper skin care.</p>
                <a href="#" class="btn btn-success">Read more</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 mb-3">
            <div class="col-content d-flex flex-column justify-content-center align-items-center">
                <img class="rounded-circle img-thumbnail border-success mb-3" src="{{ asset('images/pedicure.jpeg') }}" style="width: 150px; height: 130px;" alt="">
                <h2 class="mb-3">Spa Treatments</h2>
                <p class="mb-3">Pamper yourself from head to toe. For a truly luxurious spa experience, indulge our relaxing body treatments as the perfect complement to our rejuvenating facials.</p>
                <a href="#" class="btn btn-success">Read more</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 mb-3">
            <div class="col-content d-flex flex-column justify-content-center align-items-center">
                <img class="rounded-circle img-thumbnail border-success mb-3" src="{{ asset('images/choco 1.jpg') }}" style="width: 150px; height: 130px;" alt="">
                <h2 class="mb-3">Skin analysis</h2>
                <p class="mb-3">We believe that there is no universal, one size fits all skin care regimen that will leave everybody with glowing skin. There are many factors involved in determining proper skin care.</p>
                <a href="#" class="btn btn-success">Read more</a>
            </div>
        </div>
    </div>
    
    
    
    {{-- signature --}}
</div>
{{-- footer --}}
@include('partial.footer')
{{-- footer --}}
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/65f190968d261e1b5f6d2ea7/1horppjcg';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>

</html>

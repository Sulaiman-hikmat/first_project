@include('partial.header')

  {{-- section --}}
  <section style="margin-top: 80px">
  <div class="container">
    <div class="row">
<div class="col">
<h1 style="font-size:50px" class="mt-4">Your Plug For Flawless <br> <span class="text-success">Skin</span></h1>
<p class="ms-4">we're here to empower you with the tools and knowledge you need to achieve your skincare goals. 
    Join us on the path to glowing, radiant skin your journey starts now.</p>
    <button class="btn btn-success  animate__animated animate__bounce animate__delay-2s mb-3">View now</button>
</div>
<div class="col-lg-5">
  <img src="{{ asset('images/jeedah 1.jpg') }}" height="500" >
  {{-- <div class="animate__animated animate__bounce animate__delay-2s">Example</div> --}}
</div>
    </div>
  </div>
</section>
{{-- why --}}
<section class="mt-5">
    <div class="row">
        <div class="col mb-5">

<img src="{{asset('images/cream 1.jpg')}}" alt="">
        </div>
        <div class="col">
            <h2 class="text-center text-success">Why Choose Us</h2>
<p> Our skincare formulations are crafted using carefully selected natural ingredients
     known for their efficacy and safety. We believe in harnessing the power of nature to
      deliver real results, without compromising on quality or integrity.</p>
     <p>
        our skincare products are formulated using cutting-edge scientific techniques and technologies. 
        Each product undergoes rigorous testing to ensure maximum effectiveness and safety for all skin types.
        Whether you're dealing with acne, aging, dryness, or sensitivity, we offer a comprehensive range of skincare
         solutions designed to address your specific concerns. From gentle cleansers to potent serums, we have everything
          you need to achieve healthy, radiant skin.
          You can trust that what you see on our labels is what you get – no hidden ingredients or misleading claims.
           We're here to empower you with the knowledge you need to make informed choices about your skincare.
     </p>
     <p>Your satisfaction is our top priority. Our dedicated customer service team is here to assist you every step
         of the way, from product recommendations to skincare advice. We're committed to providing an exceptional shopping 
         experience that exceeds your expectations.

     </p>


        </div>

    </div>
   
<div class="bg-light">
    <h1 class="text-center text-success">Some Of Our product</h1>
    <div class="row">
<div class="col"><img src="{{asset('images/body 2.jpg')}}" alt=""></div>
<div class="col"><img src="{{asset('images/cre2.jpeg')}}" alt=""></div>
<div class="col"><img src="{{asset('images/serum.jpeg')}}" alt=""></div>
<div class="col"><img src="{{asset('images/face4.jpeg')}}" alt=""></div>

    </div>
<div class="row mt-5">
    <div class="col"><img src="{{asset('images/img2.jpeg')}}" alt=""></div>
    <div class="col"><img src="{{asset('images/dove.jpeg')}}" alt=""></div>
    <div class="col"><img src="{{asset('images/ser2.jpeg')}}" alt=""></div>
    <div class="col"><img src="{{asset('images/img 2.jpeg')}}" alt=""></div>
</div>
</div>
</section>
{{-- why --}}

{{-- footer --}}
@include('partial.footer')
{{-- footer --}}

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
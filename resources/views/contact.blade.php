@include('partial.header')

<section>
<h2 class="text-center mt-5 text-success ">Contact Us</h2>
<h4 class="text-center">Ready to talk to us about your product. Contact us for consultation and  more</h4>
{{-- form --}}
<form>
    <div class="row mt-5">
      <div class="col">
        <input type="text" class="form-control" placeholder="Name">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Email Address">
      </div>
    </div>
    <div class="row mt-5">
      <div class="col">
        <input type="text" class="form-control" placeholder="Phone Number">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Email">
      </div>
    </div>
      <div class="form-group col">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    
  </form>
{{-- form --}}
</section>






@include('partial.footer')
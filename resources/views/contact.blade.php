@include('partial.header')

<section>
   <h1 class="text-center text-success">Contact Us</h1>
<h4 class="text-center">plugs for flawless skin</h4>
<div class="container">
<div class="row">
  {{-- form --}}
  <div class="col">
    <form id="contact_form" name="contact_form" method="post">
      <div class="mb-5 row">
          <div class="col">
              <label>First Name</label>
              <input type="text" required maxlength="50" class="form-control" id="first_name" name="first_name">
          </div>
          <div class="col">
              <label>Last Name</label>
              <input type="text" required maxlength="50" class="form-control" id="last_name" name="last_name">
          </div>
      </div>
      <div class="mb-5 row">
          <div class="col">
              <label for="email_addr">Email address</label>
              <input type="email" required maxlength="50" class="form-control" id="email_addr" name="email"
                  placeholder="name@example.com">
          </div>
          <div class="col">
              <label for="phone_input">Phone</label>
              <input type="tel" required maxlength="50" class="form-control" id="phone_input" name="Phone"
                  placeholder="Phone">
          </div>
      </div>
      <div class="mb-5">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5"></textarea>
      </div>
      <button type="submit" class="btn btn-success px-4 btn-lg">Post</button>
  </form>
  </div>
  {{-- form --}}
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-5">
      <!-- Links -->
      <h6 class="text-uppercase fw-bold mb-4 text-success">Contact</h6>
      <p><i class="bi bi-house-fill "></i> Wura Block Alao Farm Agbebiaka Road Ilorin</p>
      <p>
      <i class="bi bi-envelope-fill "></i>sulaimanmajidah@gmail.com
      </p>
      <p><i class="bi bi-telephone-fill "></i> 09028561459</p>
      <p><i class="bi bi-whatsapp"></i> 09064220405</p>
    </div>
    <!-- Grid column -->
  </div>
</div>


</section>
</div>


@include('partial.footer')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
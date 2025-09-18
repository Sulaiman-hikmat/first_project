@include('partial.header')

<section class="py-5">
  <div class="container">

    <!-- About Us -->
    <h1 class="text-success text-center mb-5">🌸 About Us 🌸</h1>

    <div class="row align-items-center g-4">
      <div class="col-12 col-md-6 text-center">
        <img src="{{ asset('images/choco 1.jpg') }}" class="img-fluid rounded shadow-lg about-img" alt="About Jeedah Essentials">
      </div>
      <div class="col-12 col-md-6">
        <p class="fw-semibold" style="font-size: 1.1rem;">
          Welcome to <strong>Jeedah Essentials</strong>, where beauty meets science and nature.  
          We're passionate about helping you achieve healthy, radiant skin through our innovative skincare solutions.
        </p>
      </div>
    </div>

    <div class="row g-4 mt-5">
      <div class="col-12 col-md-6">
        <p>
          At Jeedah Essentials, our journey began with a simple belief:  
          <em>skincare should be effective, safe, and accessible to all</em>.  
          Founded by <strong>Sulaiman Majidah</strong> in <strong>2019</strong>, we set out to revolutionize the beauty industry by combining cutting-edge science with the power of natural ingredients.
        </p>
        <p>
          Driven by research and development, we formulate our products using the latest advancements in skincare science.  
          Our experts create potent, results-driven formulas that deliver visible improvements in skin health and appearance.  
          We harness the best of nature's bounty — botanical extracts, antioxidants, and vitamins — to nourish and rejuvenate your skin.
        </p>
      </div>
      <div class="col-12 col-md-6">
        <p>
          At Jeedah Essentials, we're more than just a beauty company – we're your partners in skincare.  
          Whether you're struggling with acne, aging, or simply seeking to enhance your natural beauty, we're here to support and empower you.  
          From personalized product recommendations to expert skincare advice, we're committed to helping you achieve the glowing skin you deserve.
        </p>
        <p>
          Transparency is at the core of everything we do. From sourcing to manufacturing, honesty and integrity guide us.  
          No hidden fillers or harmful chemicals — what you see on our labels is exactly what you get.  
          With Jeedah Essentials, you can trust your skincare.
        </p>
      </div>
    </div>

    <!-- Why Choose Us -->
    <section class="mt-5">
      <div class="row align-items-center g-4">
        <div class="col-12 col-md-6 text-center">
          <img src="{{ asset('images/cream 1.jpg') }}" class="img-fluid rounded shadow-lg about-img" alt="Why Choose Us">
        </div>
        <div class="col-12 col-md-6">
          <h2 class="text-success text-center mb-3">Why Choose Us 💎</h2>
          <p>
            Our skincare formulations are crafted with carefully selected natural ingredients  
            known for their efficacy and safety. We harness the power of nature to deliver results, without compromising quality.
          </p>
          <p>
            Each product undergoes rigorous testing to ensure maximum effectiveness and safety for all skin types.  
            Whether you’re dealing with acne, aging, dryness, or sensitivity, our products are designed to meet your needs.
          </p>
          <p>
            We’re committed to transparency and integrity — no hidden ingredients, no misleading claims.  
            You deserve to know exactly what you’re putting on your skin.
          </p>
          <p>
            Your satisfaction is our top priority 💖. From product recommendations to skincare advice,  
            our customer service team is here to ensure your journey with us is exceptional.
          </p>
        </div>
      </div>
    </section>

  </div>
</section>

@include('partial.footer')

<!-- Custom CSS -->
<style>
  .about-img {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    cursor: pointer;
  }

  .about-img:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
  }
</style>

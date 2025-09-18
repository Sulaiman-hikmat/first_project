@include('partial.header')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>~products</title>

    <style>
        /* Hover effect for product images */
        .product-img {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            cursor: pointer;
        }

        .product-img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Hover effect for cards */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>
    <div class="container py-5">

        <!-- Product Gallery -->
        <div class="bg-light p-4 rounded shadow-sm">
            <h1 class="text-center text-success mb-4">✨ Some Of Our Products ✨</h1>
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <img src="{{ asset('images/body 2.jpg') }}" class="img-fluid rounded product-img" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <img src="{{ asset('images/cre2.jpeg') }}" class="img-fluid rounded product-img" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <img src="{{ asset('images/serum.jpeg') }}" class="img-fluid rounded product-img" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <img src="{{ asset('images/face4.jpeg') }}" class="img-fluid rounded product-img" alt="">
                </div>
            </div>
            <div class="row g-4 mt-2">
                <div class="col-6 col-md-3">
                    <img src="{{ asset('images/img2.jpeg') }}" class="img-fluid rounded product-img" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <img src="{{ asset('images/dove.jpeg') }}" class="img-fluid rounded product-img" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <img src="{{ asset('images/ser2.jpeg') }}" class="img-fluid rounded product-img" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <img src="{{ asset('images/img 2.jpeg') }}" class="img-fluid rounded product-img" alt="">
                </div>
            </div>
        </div>

        <!-- Start Your Skincare Journey -->
        <div class="text-center mt-5">
            <h1 class="fw-bold">🌿 Start Your Skincare Journey 🌿</h1>
            <p class="text-muted">Choose the perfect product for your skin type and glow naturally.</p>
        </div>

        <div class="row g-4 mt-3 justify-content-center">
            <!-- card-1 -->
            <div class="col-12 col-md-4">
                <a href="your_link_here" class="text-decoration-none">
                    <div class="card shadow border-0 h-100">
                        <img src="{{ asset('images/jeedah 1.jpg') }}" class="card-img-top" alt="Body Cream">
                        <div class="card-body text-center">
                            <small class="text-muted fw-bold">Body Cream <i class="bi bi-arrow-right"></i></small>
                        </div>
                    </div>
                </a>
            </div>
            <!-- card-2 -->
            <div class="col-12 col-md-4">
                <a href="your_link_here" class="text-decoration-none">
                    <div class="card shadow border-0 h-100">
                        <img src="{{ asset('images/scrub.jpg') }}" class="card-img-top" alt="Body Scrub">
                        <div class="card-body text-center">
                            <small class="text-muted fw-bold">Body Scrub <i class="bi bi-arrow-right"></i></small>
                        </div>
                    </div>
                </a>
            </div>
            <!-- card-3 -->
            <div class="col-12 col-md-4">
                <a href="your_link_here" class="text-decoration-none">
                    <div class="card shadow border-0 h-100">
                        <img src="{{ asset('images/face.jpg') }}" class="card-img-top" alt="Face Cream">
                        <div class="card-body text-center">
                            <small class="text-muted fw-bold">Face Cream <i class="bi bi-arrow-right"></i></small>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

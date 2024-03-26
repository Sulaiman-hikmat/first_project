@include('partial.header')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>~products</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Start Your Skincare Jounery </h1>
        {{-- open row --}}
        <div class="row">
            {{-- card-1 --}}
            <div class="col">
                <a href="your_link_here" class="card-link">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/jeedah 1.jpg') }}" class="card-img-top" alt="Sunset Over the Sea" />
                        <div class="card-body">
                            <small class="text-muted">Body Cream <i class="bi bi-arrow-right"></i></small>
                        </div>
                    </div>
                </a>
            </div>
            {{-- card-2 --}}
            <div class="col">
                <a href="your_link_here" class="card-link">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/scrub.jpg') }}" class="card-img-top" alt="Sunset Over the Sea" />
                        <div class="card-body">
                            <small class="text-muted">Body Scrub <i class="bi bi-arrow-right"></i></small>
                        </div>
                    </div>
                </a>
            </div>
            {{-- card-3 --}}
            <div class="col">
                <a href="your_link_here" class="card-link">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images\face.jpg') }}" class="card-img-top" alt="" />
                        <div class="card-body">
                            <small class="text-muted">Face Cream <i class="bi bi-arrow-right"></i></small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        {{-- card-4 --}}
        <div class="row mt-4">
            <div class="col">
                <a href="your_link_here" class="card-link">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/face kit.jpg') }}" class="card-img-top " alt="" />
                        <div class="card-body">
                            <small class="text-muted text-center">Face Kit <i class="bi bi-arrow-right"></i></small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
    </div>
</body>

</html>

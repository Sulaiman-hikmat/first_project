<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <form action="{{route('create.post') }}">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col-sm" style="padding-top: 150px;">
                    <div class="align-items-center ">
                        <div class="card" style="width: 30rem; height: 32rem;">
                            <div class="card-body">
                                <h2 class="card-title text-center">Post Page</h2>
                                <input type="text" placeholder="Title"class="form-control mt-4 mb-5" id="title" name="title">
                                <input type="file" class="form-control mb-5 mt-4" id="image" name="image">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="content"
                                    name="content"  style="height: 170px; margin-bottom: 30px; "></textarea>
                                    <label for="floatingTextarea2">Content</label>
                                </div>
                                <button class="btn btn-dark">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>

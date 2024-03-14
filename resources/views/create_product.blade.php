<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Generate Barcode Using Laravel</title>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center-md-center">
            <div class="col-md-9">
                <div class="card px-5 mt-3 shadow">
                    <h1 class="text-primary pt-4 text-center mb-4">Generate Barcode in Laravel</h1>
                    <form action="post" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">title:</label>
                            <input type="text"name="title" class="form-control" placeholder="Enter title">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Enter price">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control mb-3" placeholder="description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>




    </div>

</body>

</html>

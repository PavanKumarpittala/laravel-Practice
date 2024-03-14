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

    <div class="container">
        <div class="row justify-content-md-center">

            <h1 class="text-danger pt-4 text-center mb-4">list Of Products</h1>
            <hr>
            <div class="pb-2">
                <a href="/create" class="btn btn-success">New Post</a>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Barcode</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th>{{ $product->id }}</th>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->price }}</td>
                            {{-- <td>{{ $product->product_code}}</td> --}}
                            {{-- <td>{!!DNS2D::getBarcodeHtml("$product->product_code","QRCODE") !!}</td> --}}
                            <td>
                                @if (isset($product->product_code) && !empty($product->product_code))
                                    {{-- {!! DNS2D::getBarcodeHTML($product->product_code, 'DATAMATRIX') !!} --}}
                                    {{-- {!! DNS2D::getBarcodeHTML($product->product_code, 'QRCODE') !!} --}}
                                    {!! DNS1D::getBarcodeHTML($product->product_code, 'PHARMA', 2, 50,'red') !!}
                                    {{-- HERE 2,100 IS THE WIDTH AND HEIGHT AND WHE CAN GIVE  COLOR "RED"--}}
                                    {{-- {!! DNS1D::getBarcodeHTML($product->product_code, 'UPCA', 2, 50) !!} --}}
                                    P-{{ $product->product_code }}
                                @else
                                    No product code available
                                @endif
                            </td>
                            <td>{{ $product->description }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>

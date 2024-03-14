<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel 8 Barcode Demo - codeanddeploy.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-5">
            <div class="container mt-4">
           <div class="mb-3">{!! DNS2D::getBarcodeHtml("$productcode","QRCODE") !!}</div>
           <div class="mb-3">{!! DNS2D::getBarcodeHtml("$productcode",'DATAMATRIX') !!}</div>
           <div class="mb-3">{!! DNS1D::getBarcodeHtml("$productcode",'c39') !!}</div>
           <div class="mb-3">{!! DNS1D::getBarcodeHtml("$productcode",'c39+') !!}</div>
           <div class="mb-3">{!! DNS1D::getBarcodeHtml("$productcode",'c39E') !!}</div>
           <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productcode", 'C39E+') !!}</div>
           <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productcode", 'C93') !!}</div>
           <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productcode", 'S25') !!}</div>
           <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productcode", 'S25+') !!}</div>
           <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productcode", 'I25') !!}</div>
           <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productcode", 'I25+') !!}</div>
           <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productcode", 'C128') !!}</div>
           <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productcode", 'C128A') !!}</div>
           <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productcode", 'C128B') !!}</div>


        </div> 
        </div>
    </body>
</html>
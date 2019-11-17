!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Products Page</title>
</head>

<body>



    @if (!empty($search)) 
      <div class="row">
        <div class="col">
          <div class="alert alert-secondary" role="alert">
            You search for: <b>{{$search}}</b>, {{count($products) }} products found.
          </div>
        </div>
      </div>
    @endif

    @if (!empty($products))
      <div class="row">
        @foreach ($products as $product)
          <div class="col-md-6 mb-5">
            <div class="card">
              <div class="card-header">
                <h3>{{$product['title']}}</h3>
              </div>
              <div class="card-body border-top">
                <p>{{$product['body']}}</p>
                <p><b>Price: </b>{{$product['price']}}$</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endif

  </div>
</body>

</html>
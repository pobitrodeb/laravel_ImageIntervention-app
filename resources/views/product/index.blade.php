<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>image intervission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
     {{-- all product  --}}
   <section class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-header"> <a href="{{ route('create.product') }}" class="btn btn-primary"> Add Product </a></div>
            <h4 class="text-center text-white bg-danger">{{ Session('deleteMessage') }}</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name </th>
                    <th scope="col">Image </th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                   @forelse ($products as $product)
                   <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $product->name }}</td>
                        <td>
                            <img src="{{asset('image/product/'.$product->image)}}" alt="" height="100px" width="150px">
                        </td>
                        <td>
                            <a href="{{ route('edit.product', ['id' => $product->id]) }}" class="btn btn-warning"> Edit </a>
                            <a href="{{ route('delete.product',['id' =>$product->id]) }}" class="btn btn-danger"> Delete  </a>
                        </td>

                  </tr>
                   @empty
                           <div class="bg-danger">
                            <p> No Product </p>
                            <a href="{{ route('store.product') }}"> Add New </a>
                           </div>
                   @endforelse

                </tbody>
              </table>
        </div>

    </div>
   </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

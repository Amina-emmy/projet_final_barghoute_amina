<div>
    <table class="table">
        <thead class="table-info">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Desc</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Category</th>
                <th scope="col">Management</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr valign="middle">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src={{asset("storage/img/product/".$product->image)}} alt="" width="60"></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->desc}}</td>
                    <td>${{$product->price}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->category->category}}</td>
                    <td>
                        <div class="d-flex gap-3">
                            <div>@include("backend.partials.product.editModal")</div>
                            <div>
                                <form action={{route("backoffice.destroyProduct",$product->id)}} method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

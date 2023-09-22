<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editProduct{{ $product->id }}">
    Edit Product
</button>

<!-- Modal -->
<div class="modal fade" id="editProduct{{ $product->id }}" tabindex="-1"
    aria-labelledby="editProduct{{ $product->id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editProduct{{ $product->id }}Label">Edit Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action={{route("backoffice.updateProduct",$product->id)}} method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="image" class="label-form fw-bold my-2">Image:</label>
                        <input type="file" class="form-control" name="image" >
                    </div>
                    <div>
                        <label for="name" class="label-form fw-bold my-2">Name:</label>
                        <input type="text" class="form-control" name="name"
                            value="{{ old('name', $product->name) }}" >
                    </div>
                    <div>
                        <label for="desc" class="label-form fw-bold my-2">Description:</label>
                        <textarea class="form-control" name="desc" > {{ old('name', $product->name) }}</textarea>
                    </div>
                    <div>
                        <label for="price" class="label-form fw-bold my-2">Price:</label>
                        <input type="number" min="0" class="form-control"
                            value="{{ old('price', $product->price) }}" name="price" >
                    </div>
                    <div>
                        <label for="stock" class="label-form fw-bold my-2">Stock:</label>
                        <input type="number" min="0" class="form-control"
                            value="{{ old('stock', $product->stock) }}" name="stock" >
                    </div>
                    <div>
                        <label for="category_id" class="label-form fw-bold my-2">Category: {{ old('category', $product->category->category) }}</label>
                        <select name="category_id" class="form-control" >
                            <option disabled selected>Change Category</option>
                            @foreach ($categories as $category)
                                @if ($category->id != $product->category_id)
                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-warning my-3">Edit Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

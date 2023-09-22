<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addproduct">
    ADD Product
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="addproduct" tabindex="-1" aria-labelledby="addproductLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addproductLabel">ADD Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action={{route("backoffice.addProduct")}} method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="image" class="label-form fw-bold my-2">Image:</label>
                <input type="file" class="form-control" name="image" required>
            </div>
            <div>
                <label for="name" class="label-form fw-bold my-2">Name:</label>
                <input type="text" class="form-control" name="name" value="{{old("name")}}" required>
            </div>
            <div>
                <label for="desc" class="label-form fw-bold my-2">Description:</label>
                <textarea class="form-control" name="desc" value="{{old("desc")}}" required> </textarea>
            </div>
            <div>
                <label for="price" class="label-form fw-bold my-2">Price:</label>
                <input type="number" min="0" class="form-control" value="{{old("price")}}" name="price" required>
            </div>
            <div>
                <label for="stock" class="label-form fw-bold my-2">Stock:</label>
                <input type="number" min="0" class="form-control" value="{{old("stock")}}" name="stock" required>
            </div>
            <div>
                <label for="category_id" class="label-form fw-bold my-2">Category:</label>
                <select name="category_id" class="form-control" required>
                    <option disabled selected>Pick Category</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success my-3">ADD Product</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
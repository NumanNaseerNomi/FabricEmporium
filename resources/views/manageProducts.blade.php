@include('Components/header')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card" style="width:100% !important;">
                <h5 class="card-header text-center">Add New Product</h5>
                <div class="card-body overflow-auto">
                    <form class="row g-3" method="post" action="{{ url('/manageProducts') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title">
                        </div>
                        <div class="col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="1"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="brand" class="form-label">Brand</label>
                            <select class="form-select" name="brand" aria-label="Select Brand">
                                <option selected disabled>Select Brand</option>
                                <option value="Khaadi">Khaadi</option>
                                <option value="Gul Ahmed">Gul Ahmed</option>
                                <option value="Limelight">Limelight</option>
                                <option value="Sana Safinaz">Sana Safinaz</option>
                                <option value="Al Karam">Al Karam</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" name="category" aria-label="Select Category">
                                <option selected disabled>Select Category</option>
                                <option value="Stitched">Stitched</option>
                                <option value="Un-Stitched">Un-Stitched</option>
                                <option value="Ladies">Ladies</option>
                                <option value="Gents">Gents</option>
                                <option value="Kids">Kids</option>
                                <option value="Bride">Bride</option>
                                <option value="Summer Collection">Summer Collection</option>
                                <option value="Winter Collection">Winter Collection</option>
                                <option value="Casual">Casual</option>
                                <option value="Partywear">Partywear</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div>
                        <div class="col-md-6">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="price">PKR</span>
                                <input type="number" name="price" class="form-control" aria-describedby="price">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="discount" class="form-label">Discount</label>
                            <div class="input-group flex-nowrap">
                                <input type="number" name="discount" class="form-control" min="0" max="100" aria-describedby="discount">
                                <span class="input-group-text" id="discount">%</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" name="quantity" class="form-control" id="quantity">
                        </div>
                        <div class="col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" name="status" aria-label="Select status">
                                <option selected disabled>Select Status</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-12  mb-3">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-outline-primary">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8 mb-4">
            <div class="card" style="width:100% !important;">
                <h5 class="card-header text-center">Products in Stock</h5>
                <div class="card-body overflow-auto">
                    <table class="table table-bordered table-striped table-hover text-center align-middle table-responsive">
                        <thead>
                            <tr>
                                <!-- <th scope="col">#</th> -->
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Status</th>
                                <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td><img style="width:60px;" src="{{ asset('storage/images/products/' . $product->image) }}" class="img-thumbnail" /></td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->brand }}</td>
                                    <td>{{ $product->category }}</td>
                                    <td>
                                        @if($product->discount > 0)
                                            {{ ($product->price - (($product->price * $product->discount) / 100)) }}
                                            <br/>
                                        @endif
                                        {{ $product->price }}
                                    </td>
                                    <td>{{ $product->discount }}%</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->status }}</td>
                                    <td>
                                        <!-- <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="far fa-edit"></i></button> -->
                                        <form method="post" action="{{ url('/deleteProduct') }}">
                                            @csrf
                                            <input type="number" name="id" value="{{ $product->id }}" hidden required />
                                            <button type="submit" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('Components/footer')




<head>
    @include('Paks')
    <link rel="stylesheet" href="/css/profile.css">
</head>
<body>
    <div>
        <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.product')}}" class="button btn">Back</a><br><br>
                    <div class="card">
                        <div class="card-header">
                            <center><h4>Edit Product</h4></center>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->prod_id }}">
                                
                                <div class="form-group">
                                    <label for="prod_category" style="font-weight: bold">Product Category: </label>
                                    <select name="prod_category" required>
                                        <option value="NaN" selected disabled>Select Category</option>
                                        <option value="Baskets" {{ $product->prod_category == 'Baskets' ? 'selected' : '' }}>Baskets</option>
                                        <option value="Indoor Comfort" {{ $product->prod_category == 'Indoor Comfort' ? 'selected' : '' }}>Indoor Comfort</option>
                                        <option value="Mats" {{ $product->prod_category == 'Mats' ? 'selected' : '' }}>Mats</option>
                                        <option value="Outdoor Furniture" {{ $product->prod_category == 'Outdoor Furniture' ? 'selected' : '' }}>Outdoor Furniture</option>
                                        <option value="Racks" {{ $product->prod_category == 'Racks' ? 'selected' : '' }}>Racks</option>
                                        <option value="Surfaces" {{ $product->prod_category == 'Surfaces' ? 'selected' : '' }}>Surfaces</option>
                                        <option value="Tables" {{ $product->prod_category == 'Tables' ? 'selected' : '' }}>Tables</option>
                                        <option value="Others" {{ $product->prod_category == 'Others' ? 'selected' : '' }}>Others</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="prod_name" style="font-weight: bold">Product Name: </label>
                                    <input type="text" name="prod_name" value="{{ $product->prod_name }}" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="prod_desc" style="font-weight: bold">Product Description: </label>
                                    <textarea name="prod_desc" required>{{ $product->prod_desc }}</textarea>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="prod_price" style="font-weight: bold">Product Price: </label>
                                    <input type="text" name="prod_price" value="{{ $product->prod_price }}" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="prod_file" style="font-weight: bold">Product Image: </label>
                                    <input type="file" name="prod_file">
                                </div>
                                <br>
                                <button type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


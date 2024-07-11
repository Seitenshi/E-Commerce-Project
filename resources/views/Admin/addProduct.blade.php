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
                            <center><h4>Add Product</h4></center>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.store')}}" method="post">
                                <div class="form-group">
                                    <label for="prod_category" style="font-weight: bold">Product Category: </label>
                                    <select name="prod_category" id="" required>
                                        <option value="NaN" selected disabled>Select Category</option>
                                        <option value="Baskets">Baskets</option>
                                        <option value="Indoor Comfort">Indoor Comfort</option>
                                        <option value="Mats">Mats</option>
                                        <option value="Outdoor Furniture">Outdoor Furniture</option>
                                        <option value="Racks">Racks</option>
                                        <option value="Surfaces">Surfaces</option>
                                        <option value="Tables">Tables</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="prod_name" style="font-weight: bold">Product Name: </label>
                                    <input type="text" name="prod_name" id="" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="prod_desc" style="font-weight: bold">Product Description: </label>
                                    <input type="textarea" name="prod_desc" id="" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="prod_price" style="font-weight: bold">Product Price: </label>
                                    <input type="text" name="prod_price" id="" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="prod_file" style="font-weight: bold">Product Image: </label>
                                    <input type="file" name="prod_file" id="" required>
                                </div>
                                <br>
                                <button type="submit">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


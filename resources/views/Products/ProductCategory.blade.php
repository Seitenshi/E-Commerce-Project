<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <div class="container-fluid">
        <!-- Category 1 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Baskets</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Baskets">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

        <!-- Category 2 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Indoor Comfort</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Indoor Comfort">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

        <!-- Category 3 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Mats</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Mats">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

        <!-- Category 4 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Outdoor Furniture</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Outdoor Furniture">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

        <!-- Category 5 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Racks</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Racks">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

        <!-- Category 6 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Surfaces</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Surfaces">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

        <!-- Category 7 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Tables</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Tables">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

        <!-- Category 8 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Others</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Others">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

    </div>

</div>

<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca --> 

    <div class="container">
        <a href="{{ route('product.categories') }}" class="button btn">Back to Categories</a>
        <!-- Product Name --> 
        <div class="row">
            <div class="col-md-12">
                <span><h1>{{$product['prod_name']}}</h1></span>
            </div>
        </div>
        <hr>
        <br>
        <!-- Product Image & Buy Now / Add to Cart--> 
        <div class="row"><!-- gawin mo nalang inline dito para magpantay yung both div--> 
            <div class="col-md-6">
                {{-- <img src="{{asset('images/'.$product['prod_image'])}}" class="img-responsive"> --}}
                Image here
            </div>

            <div class="col-md-6">
                {{-- Buy Now --}}
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="prod_id" value="{{$product['prod_id']}}">
                    <button type="submit">Buy Now</button>
                </form>

                {{-- Add to Cart --}}
                <form action="{{ route('cart.productdetail') }}" method="post">
                    @csrf
                    <input type="hidden" name="prod_id" value="{{$product['prod_id']}}">
                    <button type="submit">Add to Cart</button>
                </form>

            </div>
        </div>
        <hr>
        <!-- Product Description --> 
        <div class="row">
            <div class="col-md-12">
                <span><h3>Description</h3></span>
                <p>{{$product['prod_desc']}}</p>
            </div>
        </div>
    </div>
</div>

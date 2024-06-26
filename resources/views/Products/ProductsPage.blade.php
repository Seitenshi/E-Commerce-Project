<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$prod_category}}</h1>
            </div>   
        </div>
        <br>
        @foreach ($products as $key=>$value )
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <table>
                            <tr>
                                <td colspan="2">Image</td>
                                <td colspan="2"> </td>
                                <td colspan="3">{{$value->prod_name}}</td>
                                <td>PHP {{$value->prod_price}}</td>
                                <td colspan="2"> </td>
                                <td colspan="2">
                                    <form action="{{ route('product.view') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="prod_id" value="{{$value->prod_id}}">
                                        <button type="submit">View</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <br><br>
        @endforeach
        <a href="{{ route('product.categories') }}" class="button btn">Back to Categories</a>
    </div>
</div>

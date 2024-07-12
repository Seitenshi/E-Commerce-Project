<head>
    @include('Paks')
    <link rel="stylesheet" href="/css/profile.css">
</head>
<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('admin')}}" class="button btn">Back</a><br><br>
                <div style="align-items: right">
                    <a href="{{route('admin.addproduct')}}" class="button btn">Add Product</a>
                </div>
                <center><h3>Product Management</h3></center>
                <table class="table" id="DataTable">
                    <thead>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Product Price</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @foreach($products as $key=>$value)
                        <tr>
                            <td>{{$value->prod_id}}</td>
                            <td>{{$value->prod_name}}</td>
                            <td>{{$value->prod_category}}</td>
                            <td>{{$value->prod_price}}</td>
                            <td>
                                <form action="{{route('admin.editproduct')}}" method="post" style="display: inline;">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$value->prod_id}}">
                                    <button type="submit">Edit</button>
                                </form>
                                <form action="{{route('admin.delete')}}" method="post" style="display: inline;">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$value->prod_id}}">
                                    <button type="submit">Delete</button>
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

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#DataTable').DataTable({
        });
    });
</script>

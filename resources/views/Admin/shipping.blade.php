@include('Paks')
<link rel="stylesheet" href="/css/profile.css">
<body style="background-color: #80917D">
    <div style="">
        <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin')}}" class="button btn">Back</a><br><br>

                    <center><h2>Shipping Management</h2></center>
                    <table class="table" id="DataTable">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Payment Method</th>
                                <th>Shipping Address</th>
                                <th>Order Date</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shipping as $key=>$value )
                                @php
                                    $payment_method;
                                    if($value->method === 'cash'){
                                        $payment_method = 'Cash on Delivery';
                                    }else if($value->method === 'card'){
                                        $payment_method = 'Credit/Debit Card';
                                    }else{
                                        $payment_method = 'Third-Party Payment Handler';
                                    }
                                @endphp
                                <tr>
                                    <td>{{$value->transac_id}}</td>
                                    <td>{{$payment_method}}</td>
                                    <td>{{$value->ship_addr}}</td>
                                    <td>{{$value->date_ordered}}</td>
                                    <td>P{{$value->total}}</td>
                                    <td>
                                        @php
                                            if($value->shipping === 'packing'){
                                                echo '<span style="color: Red">Packing Order</span>';
                                            }else if($value->shipping === 'shipped'){
                                                echo '<span style="color: rgb(255, 166, 0)">Order Shipped</span>';
                                            }else if($value->shipping === 'delivered'){
                                                echo '<span style="color: Green">Order Delivered</span>';
                                            }
                                        @endphp
                                    </td>
                                    <td>
                                        <form action="{{route('admin.shippingView')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$value->transac_id}}">
                                            <input type="hidden" name="user_id" value="{{$value->user_id}}">
                                            <input type="hidden" name="order_ids" value="{{$value->order_id}}">
                                            <button type="submit">View Order</button>
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
</body>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#DataTable').DataTable({
            "order": [[ 3, "asc" ]] // Order by the fourth column (Order Date) in ascending order
        });
    });
</script>

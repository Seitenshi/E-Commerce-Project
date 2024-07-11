<head>
    @include('Paks')
    <link rel="stylesheet" href="/css/profile.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->

    {{-- Shipping --}}
    <div>
        <a href="{{route('admin.shipping')}}" class="button btn">Shipping</a>
    </div>

    {{-- Product Management --}}
    <div>
        <a href="{{route('admin.product')}}" class="button btn">Product Management</a>
    </div>

    <a href="{{ route('Logout') }}" class="loginbutton">Log out</a>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- Total sales --}}
                <div>
                    Total Sales: 
                    {{$totalSales}}
                </div>
                {{-- Prescriptive analytics --}}
                <div>
                    recommendations go here
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                {{-- Total orders --}}
                <div>
                    Total Orders: 
                    {{$totalOrders}}
                </div>

                {{-- Prescriptive analytics --}}
                <div>
                    recommendations go here
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                {{-- Total add to carts --}}
                <div>
                    Total Add-to-Carts: 
                    {{$totalCart}}
                </div>

                {{-- Prescriptive analytics --}}
                <div>
                    recommendations go here
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                {{-- Site visits --}}
                <div>
                    Total Site Visits: 
                    {{$siteVisits}}
                </div>

                {{-- Prescriptive analytics --}}
                <div>
                    recommendations go here
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                {{-- Top Category --}}
                <div>
                    Top Category:
                    {{$topCategory}}
                </div>

                {{-- Popularity of Categories --}}
                <div style="height: 400px; width:600px">
                    <canvas id="categoryChart" ></canvas>
                </div>
            </div>
        </div>

    </div>

</div>

<script>
    const categoriesData = @json($categories); 

    const categoryLabels = [
        'Baskets',
        'Indoor Comfort',
        'Mats',
        'Others',
        'Outdoor Furniture',
        'Racks',
        'Surfaces',
        'Tables'
    ];

    const backgroundColors = [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(199, 199, 199, 0.2)',
        'rgba(83, 102, 255, 0.2)'
    ];

    const borderColors = [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(199, 199, 199, 1)',
        'rgba(83, 102, 255, 1)'
    ];

    // Chart.js code
    const ctx = document.getElementById('categoryChart').getContext('2d');
    const categoryChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: categoryLabels,
            datasets: [{
                label: 'Number of Visits',
                data: categoriesData,
                backgroundColor: backgroundColors,
                borderColor: borderColors,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1,
                        precision: 0
                    }
                }
            }
        }
    });
</script>


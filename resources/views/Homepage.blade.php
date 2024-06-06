
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Sticky Nav Bar -->
    <div>
        Nav
    </div>

    <br>
    
    <!-- Big ass search bar -->
    <div class="container">
        <div class="row align-items-center justify-content-center" >
            <center>
                <form action="">
                    <input type="text" placeholder="Search.." name="search" style="width:500px">
                    <button type="submit">Search</button>
                </form>
            </center>
        </div>
    </div>

    <br>
    <br>

    <!-- Product highlights -->
    <div class="container" style="padding: 2px">
        <div class="row align-items-center justify-content-center" >
            <div class="col-md-6">
                Wood work pics
            </div>

            <div class="col-md-6">
                <div class="row align-items-center justify-content-center" >
                    Description
                </div>
                <br>
                <div class="row align-items-center justify-content-center" >
                    <button>View products</button>
                </div>
            </div>
        </div>
    </div>

    <div>
        <?php
            if(DB::connection()->getPdo()) 
            { 
                echo "Successfully connected to the database => " 
                             .DB::connection()->getDatabaseName(); 
            } 
        ?> 
    </div>





</div>

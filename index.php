
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" type="text/css" href="style.css">
    


  <title>Basic Banking System</title>
  </head>

  <body>
     
      <nav class="navbar navbar-expand-md navbar-light"style="background-color: #8ab6d6;">
          
      <a class="navbar-brand" href="#">
           <strong><i class="fas fa-rupee-sign fa-2x"></i> SPARKS  BANK</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"data-bs-target="#collapsibleNavbar"aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar" role="navigation">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php"><i class="fas fa-laptop-code "></i><strong>Home</strong></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="customer.php"><i class="fas fa-user "></i><strong>Customer</strong></a>
              </li>
              <li class="nav-item">
            <a class="nav-link" href="transfer.php"><i class="fas fa-people-arrows "></i><strong>Transfer Money</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transhistory.php"><i class="fas fa-file-alt "></i> <strong> Transaction History</strong></a>
              </li>
            </ul>
          </div>
         </nav>
   
       <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h3><bold>Welcome to</bold></h3>
                  <h1><i class="fas fa-dollar-sign fa-2x"></i>PARKS  BANK</h1><br>
                  <h2><em>24/7 Services Available</em></h2>
                </div>
              </div>
              <div class="col-sm-12  text-center">
                  <img src="img/bank img.png" height="300"width="800"class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/cust.jpg" class="img-fluid">
                    <br>
                    <a href="customer.php"><button>Create a Customer</button></a>
                  </div>
                  <div class="col-md act">
                      <img src="img/tansaction.jpg" class="img-fluid">
                    <br>
                    <a href="transfer.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                      <img src="img/transaction-history.jpg"height="50"width="225" class="img-fluid">
                    <br>
                    <a href="transhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
       
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
      </html>

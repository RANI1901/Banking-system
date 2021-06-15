<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Customer</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="customer.css">
   
  
</head>

<body>
<?php
  
	
include 'common.php';

    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into customer(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! Customer created');
                               window.location='transfer.php';
                     </script>";
                    
    }
  }
?>


<!-- navbar --> 
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
      

<center>   
  <div class="background">
  <div class="container-fluid">
    <div class="screen">
      <div class="screen-header">
        <h2>Create a Customer</h2>
      </div>
      <div class="screen-body text-center">
        <div class="screen-body-item ">
          <img class="img" src="img/customer.jpg" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
              <center> 
            <div class="app-form-group">
                <i class="fas fa-user-edit"></i>
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
                <i class="fas fa-envelope"></i>
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
                <i class="fas fa-rupee-sign"></i>
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
              </center>    
            <br>
            <div class=" footer">
              <input class="button" type="submit" value="CREATE" name="submit"></input>
              
                  <input class=" button" type="reset" value="RESET" name="reset"></input>
              
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
    </center>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
    
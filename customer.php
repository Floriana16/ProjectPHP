<?php include "conectdb.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    
    <script src="sweetalert2.all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Meniu</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Meniu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Employees.php">Angajati</span></a>
        <li class="nav-item active">
        <a class="nav-link" href="customer.php">Clienti</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="offers.php">Oferte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php">Produse</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="suppliers.php">Furnizori</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="warranties.php">Garantii </a>
      </li>
    </ul>
  </div>
</nav>
<br>
    <div>
        <div class="container">
            <button class="btn btn-primary my-5 ">
                <a class="text-light" href="insertcustomers.php">Add User</a>
            </button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nume</th>
                        <th scope="col">Adresa</th>
                        
                    </tr>
                </thead>
                <tbody>

<?php
    $sql = "select * from `customers`";
    $result=mysqli_query($connection,$sql);
    if($result){
        while ($row = mysqli_fetch_assoc($result)) {
            $user_id = $row['customer_id'];
            $name = $row['customer_name'];
            $address = $row['address'];
         
            echo             '<tr>
            <th scope="row">' . $user_id . '</th>
            <td>' . $name . '</td>
            <td>' . $address . '</td>
           
            <td>
                <button class="btn btn-primary"><a href="UPDATE.php?updateId='.$user_id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="DELETECustomers.php?deleteId='.$user_id.'" class="text-light">Delete</a></button>
            </td>
           </tr>'
           ;
        }
    }
    
    ?>
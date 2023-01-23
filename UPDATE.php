<?php
include 'conectdb.php';
$id = $_GET['updateId'];

$query = "select * from `customers` where customer_id= $id";

    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_assoc($result);

    $name = $row['customer_name'];
    $address = $row['address'];
    
if(isset($_POST['submit'])){    
    $name = $_POST['customer_name'];
    $address = $_POST['address'];
    
    $sql = "update `customers` set customer_name='$name', address='$address' where customer_id=$id";

    $result=mysqli_query($connection,$sql);
    if($result){
        echo "Updated successfully!";
    }
}

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
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
<div class="container">
        <form method="post">
            <div class="form-group">
                <label>Nume</label>
                <input type="text" class="form-control" placeholder="Enter your customer_name" name="name"  required value=<?php echo $name;?>>
            </div>
            <div class="form-group">
                <label>Adresa</label>
                <input type="text" class="form-control" placeholder="Enter your address" name="address" required value=<?php echo $address;?>>
            </div>
            

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
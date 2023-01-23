<html>
<head>
<title>Livrare</title>
</head>

<body>


<?php include "conectdb.php";
?>


<h1>Livrare</h1>

<?php 
if (isset($_POST['submit'])) { 
  // form was submitted
  $conn = mysqli_connect("localhost","username","password","database");
  $products = $_POST['products'];
  $quantity = $_POST['quantity'];
  foreach ($products as $product) {
    $sql = "SELECT * FROM products WHERE id='$product'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo $row['name'].' ('.$row['price'].'$) x '.$quantity[$product].'<br />';
  }
}


<h2>Completeaza datele de livrare</h2>

<form action="<?php echo $_SERVER['PHP_SELF'];    ?>" method="post">
  <input type="text" name="name" placeholder="Nume" />
  <input type="text" name="address" placeholder="Adresa" />
  <input type="text" name="email" placeholder="Adresa email" />
  <input type="submit" name="submit" value="Trimite" />
</form>

</body>
</html>
?>  
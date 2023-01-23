<?php include "conectdb.php";
?>

<html>
<head>
<title>Cart</title>
</head>

<body>

<h1>Cart</h1>

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
?>

</body>
</html>
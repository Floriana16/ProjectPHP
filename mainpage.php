
<?php include "conectdb.php";
?>


<html>
<head>
<title>Main Page</title>
</head>

<body>

<ul>
  <li><a href="login.php">Login</a></li>
  <li><a href="signup.php">Sign Up</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <fieldset>
    <legend>Product List:</legend>
    <?php 
    $conn = mysqli_connect("localhost","username","password","database");
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
      echo '<input type="checkbox" name="products[]" value="'.$row['id'].'" /> '.$row['name'].' ('.$row['price'].'$)<br />';
asta nu este tot
      echo 'Quantity: <input type="text" name="quantity['.$row['id'].']" /><br />';
    }
    ?>
    <input type="submit" value="Add to Cart" name="submit" />
  </fieldset>
</form>

</body>
</html>
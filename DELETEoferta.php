<?php
include "conectdb.php";
if(isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];
    $sql = "delete from `customers` where customer_id=$id";
    $result = mysqli_query($connection, $sql);
    if($result){
        header('location:customer.php'); 
    }
}   
?>
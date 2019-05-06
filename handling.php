<?php
   require_once('./dbconnector.php');
   if (isset($_POST['them'])) {
        //them
    $name=$_POST['name'];
    $manufacturer=$_POST['manufacturer'];
    $added=$_POST['added'];
    $price=$_POST['price'];
    $sql="Insert Into toy (name, job, address,salary) values('".$name."','".$manufacturer."','".$added."','".$price."')";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');
    } elseif (isset($_POST['sua'])) {
    $id=$_GET['id'];
    $name=$_POST['name'];
    $job=$_POST['manufacturer'];
    $address=$_POST['added'];
    $salary=$_POST['price'];
    $sql = "UPDATE toy SET name = '".$name."', job = '".$manufacturer."', address = '".$added."', salary =  '".$price."' WHERE id = $id"; 
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');   
    }else{
    $id=$_GET['id'];
    $sql="DELETE FROM toy WHERE id = $id";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);    
    header('location:index.php'); 
    }
?>

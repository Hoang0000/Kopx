<?php
   require_once('./dbconnector.php');
   if (isset($_POST['them'])) {
        //them
    $ID=$_POST['ID'];
    $Name=$_POST['name'];
    $Age=$_POST['manufacturer'];
    $Phone=$_POST['added'];
    $Email=$_POST['price'];
    $sql="Insert Into customer values(".$ID.",'".$name."',".$manufacturer.",".$added.",'".$price."')";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    echo($return);
    header('location:index.php');
    }
    else{
    $ID=$_GET['ID'];
    $sql="DELETE FROM customer WHERE ID = $ID";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql); 
    echo($return);   
    header('location:index.php'); 
    }
?>
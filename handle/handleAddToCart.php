<?php
require_once'../inc/conn.php';


if(isset($_POST['submit'])){

    $quantity=trim(htmlspecialchars($_POST["quantity"]));
};


if(isset($_GET["action"])){
    if($_GET["action"]=="add"){
    $itemID=$_GET["itemID"];
    $userID=$_SESSION["user_id"];
    $selectStmt="select * from cart where itemID='$itemID' and userID='$userID'";
    $selectRes=mysqli_query($conn,$selectStmt);
    
    if(mysqli_num_rows($selectRes)==0){
      $insertCart="insert into cart (itemID,quantity,userID) values
      ('$itemID',$quantity,'$userID')";
    
      $res=mysqli_query($conn,$insertCart);
      header('location:'. $_SERVER['HTTP_REFERER']);
    }
    else{
    
      $updateStmt="update cart set quantity=quantity+$quantity  where itemID='$itemID' and userID='$userID'";
      $updateRes=mysqli_query($conn,$updateStmt);
        header('location:'. $_SERVER['HTTP_REFERER']);
      
    }
    
    
    }
    
    
    }
    
    ?>
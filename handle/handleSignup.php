<?php
require_once'../inc/conn.php';

if (isset($_POST['submit'])) {
    // استلام البيانات المدخلة من المستخدم
 
    $name=trim(htmlspecialchars( $_POST["name"]));
    $email=trim(htmlspecialchars($_POST["email"]));
    $phone=trim(htmlspecialchars($_POST["phone"]));
    $address=trim(htmlspecialchars($_POST["address"]));
    $password=trim(htmlspecialchars($_POST["pass"]));
    $confirmPass=$_POST["confirmPass"];
    $is_admin = isset($_POST['is_admin']) ? 1 : 0;

    
    if($password==$confirmPass){
        $PassHashed=password_hash($password,PASSWORD_DEFAULT);
        $selectStmt="select * from user where  email='$email'";
        $res=mysqli_query($conn,$selectStmt);


        if($res->num_rows==0){

            $insertQuery="insert into user (name,email,password,phone,address,admin)
            values ('$name','$email','$PassHashed','$phone','$address','$is_admin')";
            $insertRes=mysqli_query($conn,$insertQuery);
            header('location:../login.php');
    }else{

        $_SESSION['errors']=["this account already exists"];
        
        header('location:../signup.php');

    }
    }


  
}else{
    header('location:../signup.php');
}

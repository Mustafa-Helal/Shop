<?php
require_once'../inc/conn.php';

if(isset($_POST['submit'])){

        $email=trim(htmlspecialchars($_POST["email"]));
        $password=trim(htmlspecialchars($_POST["pass"]));

        $selectStmt="select * from user where email='$email' ";

        $res=mysqli_query($conn,$selectStmt);

        if(mysqli_num_rows($res)==1){
            $user=mysqli_fetch_assoc($res);
            $oldPass=$user['password'];
            $name=$user['name'];
            $id=$user['id'];
            $admin=$user['admin'];
            $verify=password_verify($password,$oldPass);

                    if($verify && $admin==0){

                        $_SESSION['user_id']=$id;
                        $_SESSION['name']=$name;
                        $_SESSION['is_admin']=$admin;
                        $_SESSION['success']=["Welcom $name"];
                        header('location:../index.php');

                    }elseif($verify && $admin==1){
                        $_SESSION['user_id']=$id;
                        $_SESSION['name']=$name;
                        $_SESSION['is_admin']=$admin;
                        $_SESSION['success']=["Welcom $name"];
                        header('location:../admin/view/layout.php');
                    }
                    else{
                        $_SESSION['errors']=["login error"];
                        header('location:../login.php');
                    }
                
        }else{

            $_SESSION['errors']=["this account not exist"];
            header('location:../login.php');
        }


}else{
    
    header('location:../login.php');
}
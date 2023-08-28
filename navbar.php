

<?php include 'header.php' ;?>



<html lang="<?php echo $lang ?>">
<section id="header">
<a href="index.php">
    <img src="img/logo.png" alt="homeLogo">
</a>

<div>
    <ul id="navbar">
        <li class="link">
            <a class="active " href="index.php"></a>
        </li>
      
        <li class="link">
            <a href="blog.php"><?php echo $msg['Blog'] ?></a>
        </li>
        <li class="link">
            <a href="about.php"><?php echo $msg['About'] ?></a>
        </li>
        <li class="link">
            <a href="contact.php"><?php echo $msg['Contact'] ?></a>
        </li>
      <?php 
      require_once'inc/conn.php';
      if(isset($_SESSION['lang'])&& $_SESSION['lang'] =="ar" ){
      
      ?>
        <li class="link">
            <a href="inc/ChangeLang.php?lang=en">En</a>
        </li>
        <?php }else{ ?> 
        <li class="link">
            <a href="inc/ChangeLang.php?lang=ar">Ar</a>
        </li>
        <?php } ?>
        <li class="link">
            <a href="shop.php"><?php echo $msg['Shop'] ?></a>
        </li>
    <?php
       require_once'inc/conn.php';
         if(isset($_SESSION['user_id'])){?>
            <li class="link">
            <a href="handle/logout.php"><?php echo $msg['Logout'] ?></a>
        </li>
     
        <li class="link">
            <a id="lg-cart" href="cart.php">
                <i class="fas fa-shopping-cart"></i> <?php echo $_SESSION['name'] ?>
            </a>
        </li>
      <?php   }else{ ?>
           <li class="link">
           <a href="login.php"><?php echo $msg['Login'] ?></a>
       </li>

    <?php  }
            ?>
 


 

      
        <a href="#" id="close"><i class="fas fa-times"></i> </a>

      
    </ul>

</div>

<div id="mobile">
    <a href="cart.php">
        <i class="fas fa-shopping-cart"></i>
    </a>
    <a href="#" id="bar"> <i class="fas fa-outdent"></i> </a>
</div>
</section>
</html>
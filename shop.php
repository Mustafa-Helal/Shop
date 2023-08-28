<?php require_once'inc/conn.php'; ?>
<?php

if(!isset($_SESSION['user_id'])) {
    header("Location:login.php");
    exit();
}
?>
<?php include 'header.php' ?>
<?php include 'navbar.php' ?>




<section id="product1" class="section-p1">
  <h2>Featured Products</h2>
  <p>Summer Collection New Modren Desgin</p>
  <div class="pro-container">
    
    <?php 
    if(isset($_GET['page'])){
      $page=$_GET['page'];
    }else{
      $page=1;
    }
    $limit=4;
    $offset=($page-1)*$limit;
    $query="select count(id) as total from item";
    $runquery=mysqli_query($conn,$query);
    if(mysqli_num_rows($runquery)==1){
      $total=mysqli_fetch_assoc($runquery)['total'];
    }
    $numOfPage= ceil($total/$limit);
    if($page<1){
      header('location:'.$_SERVER['PHP_SELF'].'?pgae=1' );
    }elseif($page>$numOfPage){
      header('location:'.$_SERVER['PHP_SELF'].'?pgae='.$numOfPage );
    }
    $query="select * from item order by id limit $limit offset $offset";
    $res=mysqli_query($conn,$query);
    $products=mysqli_fetch_all($res,MYSQLI_ASSOC);
    ?>
    
    <?php foreach($products as $product): ?>
      <div class="pro">
        <img src="img/products/<?php echo $product['imgPath'] ?>" >
          <dibv class="des">
              <h2><?php echo $product['name']; ?></h2>
              <h5><?php echo $product['desc']; ?></h5>
              <div class="star ">
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
              </div>
              <h4>Price: <?php echo $product['price']; ?> $ </h4>
              <form method="post" action="handle/handleAddToCart.php?action=add&itemID=<?php echo $product["id"]; ?>">
                <input style=" width: 50px; text-align: center;" type="number" name="quantity" value="1">
                <button style="margin-left: 165px;" name="submit" type="submit"><a style="right: 8px; bottom: 8px;" class="cart "><i class="fas fa-shopping-cart "></i></a></button>
              </form>   
          </dibv>
      </div>
    <?php endforeach ?>
    
    
  </div>
</section>
    


<section id="pagenation" class="section-p1 d-flex justify-content-center">
    <nav aria-label="Page navigation example" >
  <ul class="pagination">
    <li class="page-item <?php if($page ==1) echo "disabled";?>">
      <a class="page-link" href="<?php echo $_SERVER['PHP_SELF']."?page=".$page-1 ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#"><?php echo $page ?> of <?php echo$numOfPage ?></a></li>
 
    <li class="page-item <?php if($page ==$numOfPage) echo "disabled";?>">
      <a class="page-link" href="<?php echo $_SERVER['PHP_SELF']."?page=".$page+1 ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>

</section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext ">
            <h4>Sign Up For Newletters</h4>
            <p>Get E-mail Updates about our latest shop and <span class="text-warning ">Special Offers.</span></p>
        </div>
        <div class="form ">
            <input type="text " placeholder="Enter Your E-mail... ">
            <button class="normal ">Sign Up</button>
        </div>
    </section>


    <?php include 'footer.php' ?>
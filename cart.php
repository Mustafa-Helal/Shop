<?php require_once'inc/conn.php'; ?>
<?php

if(!isset($_SESSION['user_id'])) {
    header("Location:login.php");
    exit();
} 
if(isset($_SESSION['user_id'])){
    $userID=$_SESSION['user_id'];
}
if(isset($_GET['action']) && $_GET['action']=="delete"){

    $itemID=$_GET['itemID'];
    
    $deleteStmt="delete from cart where itemID='$itemID' and userID='$userID'";
    $deleteRes=mysqli_query($conn,$deleteStmt);
    
    }

    if(isset($_GET['action']) && $_GET['action']=="confirmOrder"){

        $insertInvoice="insert into invoice (userID) values ('$userID')";
        if($conn->query($insertInvoice)){
          $invoiceID=$conn->insert_id;
        }
        $selectStmt="select cart.itemID as i,cart.quantity as q,item.price as p from cart inner join item on 
        item.id=cart.itemID
        where userID='$userID'";
        $cartRes=mysqli_query($conn,$selectStmt);
        $orders=mysqli_fetch_all($cartRes,MYSQLI_ASSOC);

        foreach($orders as $order): 
       
          $item=$order["i"];
          $price=$order["p"];
          $quantity=$order["q"];
      
          $insertQuery="insert into orders(itemID,userID,price,quantity,invoiceID)
          values('$item','$userID','$price',' $quantity','$invoiceID')";
      
          $insertRes=mysqli_query($conn,$insertQuery);
         
        endforeach;
        
      
        $deleteCart="delete from cart where userID='$userID'";
      
        $deleteRes=mysqli_query($conn,$deleteCart);
      
        header('location:index.php');
      }
      
      
      


?>
<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

<section id="page-header" class="about-header"> 
        <h2>#Cart</h2>
        <p>Let's see what you have.</p>
    </section>
 
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Desc</td>
                    <td>Quantity</td>
                    <td>price</td>
                    <td>Subtotal</td>
                    <td></td>

                    <td>Remove</td>
                </tr>
            </thead>
   
            <tbody>
            <?php 

                $selectItems="select item.imgPath ,item.id as i,item.desc, item.name as name,item.price as price,cart.quantity as quantity 
                from cart inner join item 
                on item.id=cart.itemID
                where userID='$userID'";
                $selectRes=mysqli_query($conn,$selectItems);
                $products=mysqli_fetch_all($selectRes,MYSQLI_ASSOC);

                 foreach($products as $product): ?>
                <tr>
                    <td><img src="img/products/<?php echo $product['imgPath'] ?>" alt="product1"></td>
                    <td><?php echo $product['name'] ?></td>
                    <td><?php echo $product['desc'] ?></td>
                    <td><?php echo $product['quantity'] ?></td>
                    <td><?php echo $product['price'] ?></td>
                    <td><?php echo $product['price']*$product['quantity'] ?> </td>
                    <td> </td>
                   
                    <!-- Remove any cart item  -->
                    <td><a  class="btn btn-danger" href="cart.php?action=delete&itemID=<?php echo $product["i"]; ?>">Remove</a> </td>
            
                </tr>
                 <?php endforeach ?>

            </tbody>
            <!-- confirm order  -->
            <td><a class="btn btn-success" href="cart.php?action=confirmOrder">Confirm</a></td>
            
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Coupon</h3>
            <input type="text" placeholder="Enter coupon code">
            <button class="normal">Apply</button>
        </div>
        <div id="subTotal">
            <h3>Cart totals</h3>
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$118.25</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$118.25</strong></td>
                </tr>
            </table>
            <button class="normal">proceed to checkout</button>
        </div>
    </section>

    <?php include "footer.php" ?>


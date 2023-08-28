<?php
require_once'conn.php';
if(isset($_SESSION['success'])){
foreach($_SESSION['success'] as $success){ ?>

            <div class="alert alert-success"><?php echo $success?> </div>

<?php  }

unset($_SESSION['success']);

}?>
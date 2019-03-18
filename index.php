<?php require_once 'includes/header.php';
require_once 'bootstrap.php';
require_once 'includes/admin_nav.php';
?>
<div class="container">
<!--place for error message flashing-->
<div>
                <?php
                  //this will display any kind of error/success message
                  flash();
                ?>
                </div>
                <!--end flashing-->

</div>

<?php require_once 'includes/footer.php'?>

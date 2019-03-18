<?php
require_once 'includes/header.php';
LogInCheck();
require_once 'bootstrap.php';
require_once 'includes/admin_nav.php';
?>
<!--place for error message flashing-->
<div>
                <?php
                  //this will display any kind of error/success message
                  flash();
                ?>
                </div>
<?php require_once 'includes/footer.php'; ?>

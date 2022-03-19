<?php
include_once './init.php';

if(!isset($_SESSION['auth'])) {
    redirect('login.php');
}

?>


Welcome <?php echo $_SESSION['auth']['name']; ?>
<?php
include_once './init.php';

include app_path('middleware/auth.php');

?>

<?php include './header.php' ?>
<?php include './navbar.php' ?>

Welcome <?php echo $_SESSION['auth']['name']; ?>

<?php include './footer.php' ?>
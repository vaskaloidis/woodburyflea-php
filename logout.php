<?php $page = 'Home'; ?>
<?php include('head.php'); ?>
<?php session_destroy(); ?>
<?php if(isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
}
?>
<strong>You have successfully logged out!</strong>
<?php include('foot.php'); ?>
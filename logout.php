<?php ob_start(); ?>
<?php session_start(); ?>

<?php 

$_SESSION['client_id'] = null;

header("Location: index.php");

?>


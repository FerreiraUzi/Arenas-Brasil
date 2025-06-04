<?php
$page = $_GET['page'] ?? 'home';
$valid_pages = ['home', 'estadio1', 'estadio2', 'estadio3', 'estadio4', 'estadio5', 'estadio6'];
$content_path = in_array($page, $valid_pages) ? "pages/{$page}.php" : "pages/404.php";
?>

<?php include("includes/header.php"); ?>
<?php include($content_path); ?>
<?php include("includes/footer.php"); ?>
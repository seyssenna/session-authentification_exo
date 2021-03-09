<?php
require './config/fonction.php';
if(!is_connected()){
    header('Location: index.php?page=login');
    exit();
}
?>


<h1>Ceci est mon dashboard</h1>
<h2>bonjour <?php echo $_SESSION['admin']; ?></h2>

<?php var_dump($_SESSION);  ?>

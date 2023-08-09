<?php

 include 'app.php';
 $app = new app();

$id = $_GET['id'];
$app ->deleteHandler($id);
 

 


?>
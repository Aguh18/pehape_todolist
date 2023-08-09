<?php


 include 'app.php';
 $app = new app();

$id = $_GET['id'];
$result = mysqli_query($app->mysqli, "SELECT yn FROM list WHERE id=$id"); 
while($user_data = mysqli_fetch_array($result))
{    $yn = $user_data['yn'];}


$isChecked = $yn ? 'false': 'true';
$app ->checkHandler($id, $isChecked);

 

 


?>
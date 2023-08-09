
<?php
// Import
include_once("app.php");

$app = new app();
$result = $app ->getAllHandler();

// ambil semua data

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a class ="a" href="add.php">Add New User</a><br/><br/>
 
 <table width='80%' border=1  >

 <tr>
     <th>id</th> <th>task</th><th>Selesai/belum</th> <th>tanggal dibuat</th> <th>Tanggal selesai</th> <th>Update</th>
 </tr>
 <?php  
 
 while($user_data = mysqli_fetch_array($result)) {         
     echo "<tr>";
     echo "<td>".$user_data['id']."</td>";
     echo "<td>".$user_data['task']."</td>";
     $isChecked = $user_data['yn'] ? 'checked': '';
     echo "<td><input type='checkbox' . $isChecked . disabled></td>";
     echo "<td>".$user_data['waktu']."</td>";   
     echo "<td>".$user_data['selesai']."</td>";
      
     echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a> | <a href='centang.php?id=$user_data[id]'>Centang</a></td></tr>  ";        
 }
 ?>
 </table>
</body>
</html>

    

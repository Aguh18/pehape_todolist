<?php

include_once("app.php");
$app = new app();

?>
<?php
// edit handler
if(isset($_POST['update']))
{    $id = $_POST['id'];
    $task=$_POST['task'];

    $app->editHandler($task, $id);
}
// Mengambil data default
$id = $_GET['id'];
$result = mysqli_query($app->mysqli, "SELECT task FROM list WHERE id=$id"); 
while($user_data = mysqli_fetch_array($result))
{    $task = $user_data['task'];}
?>
<html>
<head>	
    <title>Edit task</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            
            <tr> 
                <td>task</td>
                <td><input  placeholder="masukan task" type="text" name="task" value=<?php echo $task; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>
<html>
<head>
    <title>Add Task</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>New task</td>
                <td><input type="text" name="task"></td>
            </tr>
            <tr> 
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
    include 'app.php';
    $app = new app();
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
                $task = $_POST['task'];
                $app ->addHandler($task);    }
    ?>
</body>
</html>
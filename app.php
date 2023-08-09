<?php
/**
 * using mysqli_connect for database connection
 */

class app{
    var $mysqli;
     function __construct() {
        $databaseHost = 'localhost';
        $databaseName = 'Todolist';
        $databaseUsername = 'root';
        $databasePassword = '';
        
       $this->mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
    //    if (!empty($this->mysqli)) {
    //        echo "Koneksi ke database berhasil";
    //      } else {
    //        echo "Koneksi ke database gagal";
    //      }
    }

    function getAllHandler() {
        $sql = "SELECT * FROM list";
        $result = $this->mysqli->query($sql);

        return $result;
        

        // $conn->close();
    }

    function editHandler($task, $id){
        $sql = "UPDATE list SET task='$task' WHERE id=$id";
        if ($this->mysqli->query($sql) === TRUE) {
            header("Location: index.php");
          } else {
            echo "Error updating record: " . $this->mysqli->error;
          }
         
    }

    function deleteHandler($id)  {
        $sql = "DELETE FROM list WHERE id=$id";

        if ($this->mysqli->query($sql) === TRUE) {
            header("Location:index.php");
        } else {
        echo "Error deleting record: " . $this->mysqli->error;
        }
    }

    function addHandler($task)  {
        $sql = "INSERT INTO list(task) VALUES('$task')";
        if ($this->mysqli->query($sql) === TRUE) {
            $message = "wrong answer";
        echo "<script type='text/javascript'>if (window.confirm('Really go to another page?'))
        {
            window.location = 'index.php';
        }</script>";
          } else {
            
          }
        
    }
    function checkHandler($id, $isChecked) {
        $sql = "UPDATE list SET yn= $isChecked WHERE id=$id";
        if ($this->mysqli->query($sql) === TRUE) {
            $sql = "UPDATE list SET selesai= CURRENT_TIMESTAMP WHERE id=$id";
            $this->mysqli->query($sql);
            header("Location: index.php");
          }
    }
    

    
    
}


?>
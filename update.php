<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
   $id = $_POST['id'];
 
   $sql = "SELECT * FROM sailors WHERE id='$id'";
   $result = $conn->query($sql);
 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
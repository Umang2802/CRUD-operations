<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
   $id = $_POST['id'];
 
   $sql = "DELETE FROM sailors WHERE id='$id'";

     if (mysqli_query($conn, $sql)) {
        echo "Details of sailor are deleted suceessfully !";
     } else {
        echo "No sailor found";
     }
     mysqli_close($conn);
}
?>
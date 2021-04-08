<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $id = $_POST['id'];
     $name = $_POST['name'];
     $rating= $_POST['rating'];
     $age = $_POST['age'];
 
     $sql = "INSERT INTO sailors (id,name,rating,age)
     VALUES ('$id','$name','$rating','$age')";
 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>

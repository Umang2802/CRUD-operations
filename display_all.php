<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $sql = "SELECT * FROM sailors";
     $result = $conn->query($sql);
      
     if ($result->num_rows > 0) {
        echo "<table border='1'>
              <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Rating</th>
              </th>Age</th>
              </tr>";
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row['id']. "</td>";
            echo "<td>" . $row['name']. "</td>";
            echo "<td>" . $row['rating']. "</td>";
            echo "<td>" . $row['age']."<td>";
        }
        echo "</table>";
     } 
     else {
        echo "No Sailor found";
     }
     mysqli_close($conn);
}
?>
<?php
    require_once('db_connection.php');
    // Connect to the database
    $conn = new mysqli(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
    
    if($conn->connect_error){
      die("Connection failed:" . $conn->connect_error);
    }
    
    $sql = "SELECT Name FROM Student_Organizations ORDER BY `Name` ASC"; 
    $result = $conn->query($sql);
    echo "<select name='organization' style='text-align-last:center';>";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      echo "<option value='" .$row['Name']. "'>" .$row['Name']. "</option>";
    }
    echo "</select>";
    
    mysqli_close($conn);
?>
    
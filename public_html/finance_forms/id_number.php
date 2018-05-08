<?php
    require_once('db_connection.php');
    // Connect to the database
    $conn = new mysqli(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
    
    if($conn->connect_error){
      die("Connection failed:" . $conn->connect_error);
    }
    $user = $_COOKIE['user'];
    $sql = "SELECT Student_ID FROM information_form_approved WHERE Email= '$user'"; 
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo "<input name='id_number' value='" .$row['Student_ID']. "'></input>";
    mysqli_close($conn);
?>
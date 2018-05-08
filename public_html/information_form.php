<html>
<body>
<p><a href="http://cs358.cis.valpo.edu/~ssenate/home.php">Go Back to Home Page</a></p>
<?php
    require_once('db_connection.php');
    // Connect to the database
    $conn = new mysqli(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
    
    //check connection
    
    if($conn->connect_error){
      die("Connection failed:" . $conn->connect_error);
      }
    
    $id_number = mysqli_real_escape_string($conn, $_POST['id_number']);
    $fName = mysqli_real_escape_string($conn, $_POST['fName']);
    $lName = mysqli_real_escape_string($conn, $_POST['lName']);
    $gEmail = mysqli_real_escape_string($conn, $_POST['gEmail']);
    $organization = mysqli_real_escape_string($conn, $_POST['organization']);
    $org_position = mysqli_real_escape_string($conn, $_POST['org_position']);  
    
    $dbc = ("INSERT INTO information_form_pending (Student_ID,First_Name,Last_Name,Email,Organization,Position) 
    VALUES ('$id_number','$fName','$lName','$gEmail','$organization','$org_position')");
    
    if($conn->query($dbc)===TRUE){
      echo "Thank you for filling out the information form."; 
       header("http://cs358.cis.valpo.edu/~ssenate/home");
       exit;
    }else{
      echo "I'm sorry, something went wrong.";
    }  
    
    mysqli_close($conn);
?>
</body>
</html>

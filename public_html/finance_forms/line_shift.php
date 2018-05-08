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
    
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $fName = mysqli_real_escape_string($conn, $_POST['fName']);
    $lName = mysqli_real_escape_string($conn, $_POST['lName']);
    $organization = mysqli_real_escape_string($conn, $_POST['organization']); 
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $InDescription1 = mysqli_real_escape_string($conn, $_POST['InDescription1']);
    $InAmount1 = mysqli_real_escape_string($conn, $_POST['InAmount1']);
    $OutDescription1 = mysqli_real_escape_string($conn, $_POST['OutDescription1']);
    $OutAmount1 = mysqli_real_escape_string($conn, $_POST['OutAmount1']);
    $InDescription2 = mysqli_real_escape_string($conn, $_POST['InDescription2']);
    $InAmount2 = mysqli_real_escape_string($conn, $_POST['InAmount2']);
    $OutDescription2 = mysqli_real_escape_string($conn, $_POST['OutDescription2']);
    $OutAmount2 = mysqli_real_escape_string($conn, $_POST['OutAmount2']);
    $InDescription3 = mysqli_real_escape_string($conn, $_POST['InDescription3']);
    $InAmount3 = mysqli_real_escape_string($conn, $_POST['InAmount3']);
    $OutDescription3 = mysqli_real_escape_string($conn, $_POST['OutDescription3']);
    $OutAmount3 = mysqli_real_escape_string($conn, $_POST['OutAmount3']);
    $InDescription4 = mysqli_real_escape_string($conn, $_POST['InDescription4']);
    $InAmount4 = mysqli_real_escape_string($conn, $_POST['InAmount4']);
    $OutDescription4 = mysqli_real_escape_string($conn, $_POST['OutDescription4']);
    $OutAmount4 = mysqli_real_escape_string($conn, $_POST['OutAmount4']);
    $InDescription5 = mysqli_real_escape_string($conn, $_POST['InDescription5']);
    $InAmount5 = mysqli_real_escape_string($conn, $_POST['InAmount5']);
    $OutDescription5 = mysqli_real_escape_string($conn, $_POST['OutDescription5']);
    $OutAmount5 = mysqli_real_escape_string($conn, $_POST['OutAmount5']);
    $InDescription6 = mysqli_real_escape_string($conn, $_POST['InDescription6']);
    $InAmount6 = mysqli_real_escape_string($conn, $_POST['InAmount6']);
    $OutDescription6 = mysqli_real_escape_string($conn, $_POST['OutDescription6']);
    $OutAmount6 = mysqli_real_escape_string($conn, $_POST['OutAmount6']);
    $totalin = mysqli_real_escape_string($conn, $_POST['totalin']);
    $totalout = mysqli_real_escape_string($conn, $_POST['totalout']);
    $description = mysqli_real_escape_string($conn, $_POST['Request_Description']);
    
    $dbc = ("INSERT INTO line_shift_pending(Date,First_Name,Last_Name,Organization,Email,Phone_Number,InDescription1,InAmount1,OutDescription1,OutAmount1,InDescription2,InAmount2,OutDescription2,OutAmount2,InDescription3,InAmount3,OutDescription3,OutAmount3,InDescription4,InAmount4,OutDescription4,OutAmount4,InDescription5,InAmount5,OutDescription5,OutAmount5,InDescription6,InAmount6,OutDescription6,OutAmount6,TotalShiftIn,TotalShiftOut,Description) 
    VALUES ('$date','$fName','$lName','$organization','$email','$phone','$InDescription1','$InAmount1','$OutDescription1','$OutAmount1','$InDescription2','$InAmount2','$OutDescription2','$OutAmount2','$InDescription3','$InAmount3','$OutDescription3','$OutAmount3','$InDescription4','$InAmount4','$OutDescription4','$OutAmount4','$InDescription5','$InAmount5','$OutDescription5','$OutAmount5','$InDescription6','$InAmount6','$OutDescription6','$OutAmount6','$totalin','$totalout','$description')");
    
    if($conn->query($dbc)===TRUE){
      echo "Thank you for filling out a line shift request."; 
       header("http://cs358.cis.valpo.edu/~ssenate/home");
       exit;
    }else{
      echo "I'm sorry, something went wrong.";
    }  
    
    mysqli_close($conn);
?>
</body>
</html>
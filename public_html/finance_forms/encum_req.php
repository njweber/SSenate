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
    $id_number = mysqli_real_escape_string($conn, $_POST['id_number']);
    $organization = mysqli_real_escape_string($conn, $_POST['organization']);
    $gEmail = mysqli_real_escape_string($conn, $_POST['gEmail']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $line = mysqli_real_escape_string($conn, $_POST['line']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $check_pay= mysqli_real_escape_string($conn, $_POST['check_pay']);
    $check_id = mysqli_real_escape_string($conn, $_POST['check_id']);
    $delivery = mysqli_real_escape_string($conn, $_POST['delivery']);
    $mail_to = mysqli_real_escape_string($conn, $_POST['mail_to']);
    $reqComments = mysqli_real_escape_string($conn, $_POST['reqComments']);
    
     
    
    $dbc = ("INSERT INTO encum_req_pending(Date,First_Name,Last_Name,Student_ID,Organization,Email,Phone_Number,Line_Category,Amount_Requested,Check_Payable,Check_ID,Payment_Delivery,Mail_To,Request_Comments) 
    VALUES ('$date','$fName','$lName','$id_number','$organization','$gEmail','$phone','$line','$amount','$check_pay','$check_id','$delivery','$mail_to','$reqComments')");
    
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

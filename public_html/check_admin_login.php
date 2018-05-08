<?php
session_start();
define(DOC_ROOT,dirname(__FILE__)); // To properly get the config.php file
$username = $_POST['username']; //Set UserName
$password = $_POST['password']; //Set Password
$msg ='';
if(isset($username, $password)) {
    ob_start();
    include(DOC_ROOT.'/admin_connection.php'); //Initiate the MySQL connection
    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($dbc, $myusername);
    $mypassword = mysqli_real_escape_string($dbc, $mypassword);
    $sql="SELECT * FROM login_admin WHERE username='$myusername' and password='$mypassword'";
    $result=mysqli_query($dbc, $sql);
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
        // Register $myusername, $mypassword and redirect to file "admin.php"
        $_SESSION['type']= 'A';
        $_SESSION['name']= $myusername;
        header("location:admin.php");
    }
    else {
        $msg = "Wrong Username or Password. Please retry";
        header("location:admin_login.php?msg=$msg");
    }
    ob_end_flush();
}
else {
    header("location:admin_login.php?msg=Please enter some username and password");
}
?>
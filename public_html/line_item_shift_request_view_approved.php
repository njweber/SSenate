<html>
<body> 
  <div id="page">
			<header id="header">
				<div id="header-inner">	
					<div id="logo">
						<a href="admin.php">
              <img href="admin" src="ValpoLogo" alt="Valparaiso University Logo" style="width:425px;height:65px;">
            </a>
            <p>Approved Line Item Shift Request ID: 
            <?php 
            $key = $_GET['key']; 
            echo $key 
            ?>
            </p>
					</div>
         </div>
				</div>
		  </header>   
			</div>
    </div>  
  </body>
</html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Valparaiso University Student Senate Home</title>
    <link rel="icon" href="ValpoIcon.png" type="image/ico" sizes="5x5">
		<style type="text/css">
			html, #page { padding:0; margin:0;}
			body {
        margin:0; 
        padding:0; 
        width:100%; 
        color:#381e0e; 
        font:normal 12px/2.0em Arial;
        overflow:auto;
      } 
			h1{
        color:black; 
        text-decoration: underline;
        font:bold 15px/2.0em Arial;
      }
      h2{
        color:black; 
        
        font:normal 13px/2.0em Arial;
      }
			#page { background:#fff;}
			#header, #footer, #top-nav, #content, #content #contentbar, #content #sidebar { margin:0; padding:0;}
						
       .select{
           text-align: center;
           padding-top: 5%;
       }             
       .doublecolumn {
          float: left;
          width: 50%;
        }
        .triplecolumn {
          float: left;
          width: 33.33%;
        }
        .data{
          text-align: center;
          padding-top: 5%;
          padding-left: 25%;
          padding-right: 25%;
        }
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        .data{
          text-align: center;
          padding-top: 5%;
          padding-left: 25%;
          padding-right: 25%;
          padding-bottom: 5%;
        }
        .links ul li a{
           color:#381e0e; 
           text-decoration:none;        
        }
        .links ul li a:hover{
          color:#f9ebdb; 
          font-weight:bold; 
          text-decoration:none;
        }
        .links ul{
          list-style: none;
          padding-left: 0;
        }
		    table{
        margin: 8px;
        }
        th{
        font-family: Arial, Helvetica, sans-serif;
        font-size: .7em;
        background: #381e0e;
        color: white;
        padding: 2px 6px;
        border-collapse: separate;
        border: 1px solid #000;
        }
        td{
        font-family: Arial, Helvetica, sans-serif;
        font-size: .7em;
        border: 1px solid #DDD;
        }
                        
			/* Logo */
			#logo { 
        text-decoration: bold;
        font:normal 20px/0.5em Arial;
        padding-top: 15px;
        padding-bottom: 15px;
        color: white;
        clear: left;
        background: #381e0e;
        text-align: center;
      }
			#logo h1 a, h1 a:hover { color:white; text-decoration:none;}

			/* Header */
			#header { background:#381e0e; width: 100%; }
			#header-inner{ margin: auto; padding:0; background:#381e0e; width:970px;}
			
			/* Feature */
			.featurei {background:orange; padding:0; width: 100%; float:left;}
			.feature-inner {margin: auto; width: auto;}
			.feature-inner h1 {padding-left: 160px; padding-right: 160px; color:#f9ebdb; font-size:32px;}
      .feature-inner h1 a{color:#f9ebdb; font-size:32px; text-decoration: none;}
      .feature-inner h1 a:hover{color: red; font-size:32px; text-decoration: none;}
			
			/* Menu */
			#top-nav {background: #e3dac8; width: 100%; margin:0 auto; padding:0px 5px 20px; height:50px; float:right;}
			#top-nav ul { list-style:none; padding-bottom: 0; height:40px; float:left;}
			#top-nav ul li { margin:0; padding:0 0 0 10px; float:left;}
			#top-nav ul li a { display:block; margin:0; padding:8px 20px; color:#381e0e; text-decoration:none;}
			#top-nav ul li.active a, #top-nav ul li a:hover { color:#f9ebdb; font-weight: bold;}
			
      .left{
        float: left;
      }
      .right{
        float: right;
      }
      
			/* Content */
			#content-inner { margin:0 auto; padding:10px 0; width:970px; background:#fff;}
			#content #contentbar { margin:0; padding:0; float:right; width:500px;}
			#content #contentbar .article { margin:0 50px 24px; padding:0 20px 0 15px; }
			#content #sidebar { padding:0; float:left; width:200px;}
			#content #sidebar .widget { margin:0 0 12px; padding:8px 8px 8px 13px;line-height:1.4em;}
			#content #sidebar .widget h3 a { text-decoration:none;}
			#content #sidebar .widget ul { margin:0; padding:0; list-style:none; color:#959595;}
			#content #sidebar .widget ul li { margin:0;}
			#content #sidebar .widget ul li { padding:4px 0; width:250px;}
			#content #sidebar .widget ul li a { color:#381e0e; text-decoration:none; margin-left:-16px; padding:4px 8px 4px 16px;}
			#content #sidebar .widget ul li a:hover { color:#f9ebdb; font-weight:bold; text-decoration:none;}
      
			#content #sidebarright { padding:0; float:right; width:200px;}
			#content #sidebarright .widget { margin:0 0 12px; padding:8px 8px 8px 13px;line-height:1.4em;}
			#content #sidebarright .widget h3 a { text-decoration:none;}
			#content #sidebarright .widget ul { margin:0; padding:0; list-style:none; color:#959595;}
			#content #sidebarright .widget ul li { margin:0;}
			#content #sidebarright .widget ul li { padding:4px 0; width:250px;}
			#content #sidebarright .widget ul li a { color:#381e0e; text-decoration:none; margin-left:-16px; padding:4px 8px 4px 16px;}
			#content #sidebarright .widget ul li a:hover { color:#f9ebdb; font-weight:bold; text-decoration:none;}
			
			/* Footer */
			#footer { background:#381e0e; text-align: center; bottom: 0; position: relative; width: 100%;}
			#footer-inner {margin:auto; text-align:center; padding:12px; width:922px; color: white;}
			#footer a {color: white;text-decoration:none;}
      #footer a:hover{color: #e3dac8; text-decoration:bold;}
      
			
			/* Clear both sides to assist with div alignment  */
			.clr { clear:both; padding:0; margin:0; width:100%; font-size:0px; line-height:0px;}
		</style>
</head>
<?php
define(DOC_ROOT,dirname(__FILE__));
include(DOC_ROOT.'/admin_connection.php');
session_start();
define(ADMIN,$_SESSION['name']);
if($_SESSION['type'] != 'A'){
header("location:admin_login.php");
}

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
or die('Error Connecting to MYSQL DataBase'); 

$sql = "SELECT * FROM line_shift_approved WHERE Form_ID='$key' ORDER BY Organization";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();

echo " 
<div class='data'>  
  <div class='row'>
          <div class='triplecolumn'>
              <h1>Date</h1>
              <h2>".$row["Date"]."</h2>
              <br>
              <h1>Organization</h1>
              <h2>".$row["Organization"]."</h2>
              <br>
          </div>
          <div class='triplecolumn'>
              <h1>First Name</h1>
              <h2>".$row["First_Name"]."</h2>
              <br>
              <h1>University Email</h1>
              <h2>".$row["Email"]."</h2>
              <br>
           </div> 
           <div class='triplecolumn'>
              <h1>Last Name</h1>
              <h2>".$row["Last_Name"]."</h2>
              <br>
              <h1>Phone Number</h1>
              <h2>".$row["Phone_Number"]."</h2>
              <br>
           </div>
    </div>
    <div class='row'>
        <div class='triplecolumn'>
            <table>
              <tr>
                <th>Line Item Description</th>
                <th>$ Amount</th>
              </tr>
              <tr>
                <td>
                  ".$row["InDescription1"]."<br>
                  ".$row["InDescription2"]."<br>
                  ".$row["InDescription3"]."<br>
                  ".$row["InDescription4"]."<br>
                  ".$row["InDescription5"]."<br>
                  ".$row["InDescription6"]."
                </td>
                <td>
                  ".$row["InAmount1"]."<br>
                  ".$row["InAmount2"]."<br>
                  ".$row["InAmount3"]."<br>
                  ".$row["InAmount4"]."<br>
                  ".$row["InAmount5"]."<br>
                  ".$row["InAmount6"]."
                </td>
              </tr>
            </table>
              <h1>Total Shifted Out</h1>
              <h2>".$row["TotalShiftOut"]."</h2>
          </div>
          <div class='triplecolumn'>
            <img src='Arrow' alt='Arrow' style='width:170px;height:80px;padding-top: 30px;'>
          </div>
            <div class='triplecolumn'>
              <table id='inTable'>
                <tr>
                  <th>Line Item Description</th>
                  <th>$ Amount</th>
                </tr>
                <tr>
                  <td>
                     ".$row["OutDescription1"]."<br>
                     ".$row["OutDescription2"]."<br>
                     ".$row["OutDescription3"]."<br>
                     ".$row["OutDescription4"]."<br>
                     ".$row["OutDescription5"]."<br>
                     ".$row["OutDescription6"]."
                  </td>
                  <td>
                    ".$row["OutAmount1"]."<br>
                    ".$row["OutAmount2"]."<br>
                    ".$row["OutAmount3"]."<br>
                    ".$row["OutAmount4"]."<br>
                    ".$row["OutAmount5"]."<br>
                    ".$row["OutAmount6"]."
                  </td>
                </tr>
              </table>
              <h1>Total Shifted In</h1>
              <h2>".$row["TotalShiftIn"]."</h2>
          </div>
        </div>
        
        <h1>Request Description</h1>
        <h2>".$row["Description"]."</h2>
        </div>
        <footer id='footer'>
	<div id='footer-inner'>
    <p>&copy; Valparaiso University 2018, Valparaiso, IN 46383-6493, 219.464.5000 &#124; <a href='https://www.valpo.edu/copyright/' target='_blank'>Privacy Policy</a></p>
	  <div class='clr'></div>
	  </div>
	</footer>
";

$conn->close();
?>
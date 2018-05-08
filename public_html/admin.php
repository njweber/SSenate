<?php
session_start(); //Start the session
define(ADMIN,$_SESSION['name']); //Get the user name from the previously registered super global variable
if($_SESSION['type'] != 'A'){ //If session not registered
header("location:admin_login.php"); // Redirect to login.php page
}
else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );
?>

<html>
<body> 
  <div id="page">
			<header id="header">
				<div id="header-inner">	
					<div id="logo">
						<img src="ValpoLogo" alt="Valparaiso University Crusader" style="width:425px;height:65px;">
            <p>Welcome to Admin Page <?php echo ADMIN /*Echo the username */ ?></p>
					</div>
         </div>
				</div>
		  </header>   
			</div>
    </div>  
  </body>
  <footer id="footer">
	<div id="footer-inner">
    <p>&copy; Valparaiso University 2018, Valparaiso, IN 46383-6493, 219.464.5000 &#124; <a href="https://www.valpo.edu/copyright/" target="_blank">Privacy Policy</a></p>
	  <div class="clr"></div>
	  </div>
	</footer>
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
      } 
			h1{
        color:white; 
        text-decoration: none;
      }
      h2, h3, h4, h5, h6 {color:381e0e;}
			#page { background:#fff;}
			#header, #footer, #top-nav, #content, #content #contentbar, #content #sidebar { margin:0; padding:0;}
						
                        
       .column {
          float: left;
          width: 33.33%;
        }
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        .links{
          text-align: center;
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
			#footer { background:#381e0e; text-align: center; bottom: 0; position: fixed; width: 100%;}
			#footer-inner {margin:auto; text-align:center; padding:12px; width:922px; color: white;}
			#footer a {color: white;text-decoration:none;}
      #footer a:hover{color: #e3dac8; text-decoration:bold;}
      
			
			/* Clear both sides to assist with div alignment  */
			.clr { clear:both; padding:0; margin:0; width:100%; font-size:0px; line-height:0px;}
		</style>
</head>



<html>

<body>
  <div class="links">
  <div class="column">
    <h3>Pending Forms</h3>
	  <ul>
	  <li><a href="stip_encum_request_pending.php">New Stipend Encumberance Request</a></li>
	  <li><a href="encum_request_pending.php">New Encumbrance Request</a></li>
	  <li><a href="cap_ex_request_pending.php">New Capital Expenditure Request</a></li>
    <li><a href="information_form_pending.php">New Information Forms</a></li>
    <li><a href="line_item_shift_request_pending.php">New Line Item Shift Request</a></li>
	  </ul>
   </div>
   <div class="column">
	  <h3>Approved Forms</h3>
	  <ul>
	  <li><a href="stip_encum_request_approved.php">New Stipend Encumberance Request</a></li>
	  <li><a href="encum_request_approved.php">New Encumbrance Request</a></li>
	  <li><a href="cap_ex_request_approved.php">New Capital Expenditure Request</a></li>
    <li><a href="information_form_approved.php">New Information Forms</a></li>
    <li><a href="line_item_shift_request_approved.php">New Line Item Shift Request</a></li>
	  </ul>
   </div>
   <div class="column">
    <ul><li><a href="admin_logout.php">Logout</a></li></ul><!-- A link for the logout page -->
    </div>
    </div>
</body>
</html>

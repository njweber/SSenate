
<!DOCTYPE html>
<!-- Template by html.am -->
<html>
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
   
    <script src="https://apis.google.com/js/platform.js" async defer
      onload="this.onload=function(){};handleClientLoad()"
      onreadystatechange="if (this.readyState === 'complete') this.onload()">
    </script>
   
	</head>
	<body>
    <script>
			var signInPage = "/~ssenate/index";

      function handleClientLoad() {
        // Loads the client library and the auth2 library together for efficiency.
        // Loading the auth2 library is optional here since `gapi.client.init` function will load
        // it if not already loaded. Loading it upfront can save one network request.
        gapi.load('client:auth2', initClient);
      }
      function initClient() {
        // Initialize the client with API key and People API, and initialize OAuth with an
        // OAuth 2.0 client ID and scopes (space delimited string) to request access.
        gapi.client.init({
            'apiKey': 'AIzaSyDgz5shX2XG_AhEYaE_OLZJWsO6kmAc7Kg',
            'discoveryDocs': ["https://people.googleapis.com/$discovery/rest?version=v1"],
            'clientId': '676043110632-4ijhn9f89cg53pos20cms3ojrst8ue58.apps.googleusercontent.com',
            'scope': 'profile'
        }).then(function () {
          // Listen for sign-in state changes.
          gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

          // Handle the initial sign-in state.
          updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
        });
      }
      function updateSigninStatus(isSignedIn) {
        // When signin status changes, this function is called.
        // If the signin status is changed to signedIn, we make an API call.
        if (isSignedIn) {
          makeApiCall();
				}
				else{
          window.location.href = signInPage;
        }
      }
      function makeApiCall() {
        gapi.client.load('plus','v1', function(){
          var request = gapi.client.plus.people.get({
            'userId': 'me'
            //'resourceName': 'people/me',
            //'requestMask.includeField': 'person.names'
          });
          request.execute(function(resp) {
           //console.log('Retrieved profile for: ' + resp.displayName);
           var primaryEmail;
           var domain;
           for (var i=0; i < resp.emails.length; i++) {
             if (resp.emails[i].type === 'account') {
             primaryEmail = resp.emails[i].value;
             domain = resp.emails[i].value.substring(resp.emails[i].value.length-10, resp.emails[i].value.length);
             }
           }
           if(domain != '@valpo.edu'){
             window.alert("Must use your Valparaiso University email to login!");
             gapi.auth2.getAuthInstance().signOut();
           }
           
           document.cookie = "user=" + primaryEmail; 
           //console.log(document.cookie);
           
           //console.log('Domain --> ' + domain);
           //console.log('Email --> ' + primaryEmail);
           
          });
        });
      }
    </script>
		<div id="page">
			<header id="header">
				<div id="header-inner">	
					<div id="logo">
						<img src="ValpoLogo" alt="Valparaiso University Crusader" style="width:425px;height:65px;">
            <p>Student Senate</p>
					</div>
       </div>
	     <div id="top-nav">
         <div class='left'> 
           <ul>
            <li><a href="about">About</a></li>
						<li><a href="contact">Contact</a></li>
						<li><a href="FAQ">FAQ</a></li>
           </ul>
        </div>
        <div class='right'> 
          <ul>
						<li><a href="admin_login.php">Admin Login</a></li>
            <li><a href="information_forms.php">Information Form</a></li>
            <li><a href="index" onclick="handleSignOutClick();">Sign out</a></li>
            <script>
              function handleSignOutClick(event) {
                  gapi.auth2.getAuthInstance().signOut();
              }
            </script>                            
					</ul>
         </div>
				</div>
			</header>
		
	
			<div id="content">
				<div class="links">
				  <div class="row">
            
            <div class="column">
                <h3>My Organizations</h3>
                <ul>
                <li>ORGANIZATION A</li>
                <li>ORGANIZATION B</li>
                <li>ORGANIZATION C</li>
                </ul>
              
            </div>
            
            <div class="column">
							    <h3>Financial Forms</h3>
							    <ul>
							    <li><a href="finance_forms/stip_encum_reqs.php">New Stipend Encumbrance Request</a></li>
							    <li><a href="finance_forms/encum_reqs.php">New Encumbrance Request</a></li>
                  <li><a href="finance_forms/cap_expend_props.php">New Capital Expenditure Proposal</a></li>
                  <li><a href="finance_forms/line_shifts.php">Line Item Shift Request</a></li>
                  <li><a href="finance_forms/budget_template">Budget Template</a></li>
							    </ul>
						    
            </div> 
            
            <div class="column">
                  <h3>Organization Forms</h3>
                  <ul>
                  <li><a href="org_forms/VUSS_SampleConstitution", target="_blank">Sample Constitution</a></li>
                  <li><a href="org_forms/StudentOrgApprovalForm", target="_blank">Organization Approval/Re-rec Form</a></li>
                  </ul>
                
            </div>
            
         </div>   <!-- row --> 
         </div> <!-- links -->    
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
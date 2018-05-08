<!DOCTYPE html>
<html>
<head>
<title>New Stipend Encumbrance Request</title>
<link rel="icon" href="../ValpoIcon.png" type="image/ico" sizes="5x5">
<style type="text/css">
    body{  
        background: #e3dac8;
        margin:0; 
        padding:0; 
        width:100%; 
        position:absolute;
        font:normal 12px/2.0em Arial;
    }
    #header{
        text-decoration: bold;
        font:normal 20px/0.5em Arial;
        padding-top: 15px;
        padding-bottom: 15px;
        color: white;
        clear: left;
        background: #381e0e;
        text-align: center;
    }
    .triplecolumn {
      float: left;
      width: 33.33%;
    }
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    #form{
        text-align: center;
        overflow: hidden;
        margin: 2em;
    }
    #form p{
      margin: 2em;
    }
    /* Footer */
			#footer { background:#381e0e; bottom: 0; position: fixed; width: 100%;}
			#footer-inner { margin:auto; text-align:center; padding:12px; width:922px; color: white;}
			#footer a {color: white;text-decoration:none;}
      #footer a:hover{color: #e3dac8; text-decoration:bold;}
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
            'userId': 'me',
            'resourceName': 'people/me',
            'requestMask.includeField': 'person.names'
          });
           request.execute(function(resp) {
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
             document.getElementById("fName").value = resp.name.givenName;
             document.getElementById("lName").value = resp.name.familyName;
           });
        });
      }
    </script>
    <div id="header">
      <a href="../home.php">
      <img src="../ValpoLogo" alt="Valparaiso University Logo" style="width:425px;height:65px;">
      </a>
      <p>New Stipend Encumbrance Request</p>
    </div>
    <div id="form">
      <form action= "stip_encum_req.php" method="post">
        <div class="row">
          <div class="triplecolumn">
            <p>Date<br>
            <input type="date" name="date" id="theDate"><br>
            <script>
              var date = new Date();
              var day = date.getDate();
              var month = date.getMonth() + 1;
              var year = date.getFullYear();
              if (month < 10) month = "0" + month;
              if (day < 10) day = "0" + day;
              var today = year + "-" + month + "-" + day;       
              document.getElementById("theDate").value = today;
            </script>
            </p>
            <p>ID Number<br>
              <?php include 'id_number.php'; ?>
            </p>
            </div>
            <div class="triplecolumn">
              <p>First Name<br>
                <input type="text" name="fName" id="fName"><br>
              </p>
              <p>Amount Requested<br>
                <input type="number" name="amount" value="$"><br>
              </p>
              <p>Organization<br>
                <?php include 'my_org_drop.php'; ?>
              </p>
            </div>
            <div class="triplecolumn">
              <p>Last Name<br>
                <input type="text" name="lName" id="lName"><br>
              </p>
              <p>Position in Organization<br>
                <input type="text" name="org_position" value="Pre-Fill This"><br>
              </p>
            </div>
          </div>
          <input type="submit" value="Submit">
        </form> 
      </div>
    </body>
  <footer id="footer">
		<div id="footer-inner">
		  <p>&copy; Valparaiso University 2018, Valparaiso, IN 46383-6493, 219.464.5000 &#124; <a href="https://www.valpo.edu/copyright/" target="_blank">Privacy Policy</a></p>
				<div class="clr"></div>
		</div>
  </footer>
</html>
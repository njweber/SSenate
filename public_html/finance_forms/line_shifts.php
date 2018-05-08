
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Last-Modified" content="19 January, 2013 14:05:00 GMT" />
<title>Line-Item Shift Request</title>
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
    .doublecolumn{
      float: left;
      width: 50%;
    }
    .lineBoxLeft{
        float: left;
        padding-left: 10%;
    }
    .lineBoxRight{
        float: right;
        padding-right: 10%;
    
    }
    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none; 
      margin: 0; 
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
             
             document.getElementById("gEmail").value = primaryEmail;  
             document.getElementById("fName").value = resp.name.givenName;
             document.getElementById("lName").value = resp.name.familyName;
           });
        });
      }
      function addInRow(tableID) {
        var table = document.getElementById(tableID);
			  var rowCount = table.rows.length;
			  if(rowCount!= 7){
          var row = table.insertRow(rowCount);
			    var cell1 = row.insertCell(0);
			    var element1 = document.createElement("input");
			    element1.type = "text";
			    element1.name = "InDescription" + rowCount;
          element1.value = element1.name;
			    cell1.appendChild(element1);
          var cell2 = row.insertCell(1);
			    var element2 = document.createElement("input");
			    element2.type = "text";
                            
			    element2.name = "InAmount" + rowCount;
          element2.value = element2.name;
			    cell2.appendChild(element2);
         }else{
           window.alert("Cannot add more than SIX rows... :(");
         }
		  }
      function addOutRow(tableID) {
        var table = document.getElementById(tableID);
			  var rowCount = table.rows.length;
        if(rowCount !=7){
			    var row = table.insertRow(rowCount);
			    var cell1 = row.insertCell(0);
			    var element1 = document.createElement("input");
			    element1.type = "text";
          element1.name = "OutDescription" + rowCount;
          element1.value = element1.name;
			    cell1.appendChild(element1);
          var cell2 = row.insertCell(1);
			    var element2 = document.createElement("input");
			    element2.type = "text";
			    element2.name = "OutAmount" + rowCount;
          element2.value = element2.name;
			    cell2.appendChild(element2);
         }else{
           window.alert("Cannot add more than SIX rows... :(");
         }
		  }

    function deleteRow(tableID) {
			try {
			  var table = document.getElementById(tableID);
			  var rowCount = table.rows.length;
        if(rowCount != 2){
          table.deleteRow(rowCount-1);
        }
			}catch(e) {
				alert(e);
			}
		}
    </script>
    <div id="header">
      <a href="../home.php">
      <img src="../ValpoLogo" alt="Valparaiso University Logo" style="width:425px;height:65px;">
      </a>
      <p>Line-Item Shift Request</p>
    </div>
    <div id="form">
      <form action= "line_shift.php" method="post">
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
            <p>Name of Organization<br>
              <?php include 'my_org_drop.php'; ?>
            </p>
          </div>
          <div class="triplecolumn">
            <p>First Name<br>
              <input type="text" name="fName" id="fName"><br>
            </p>
            <p>University Email<br>
              <input type="text" name="email" id="gEmail"><br>
            </p>
          </div>
          <div class="triplecolumn">
            <p>Last Name<br>
              <input type="text" name="lName" id="lName"><br>
            </p>
            <p>Phone Number<br>
              <input type="number" name="phone"><br>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="lineBoxRight">
          <div class="doublecolumn">
            <table id="outTable" class="table">
              <tr>
                <th>Line Item Description</th>
                <th>$ Amount</th>
              </tr>
              <tr class="unit-table">
                <td>
                  <input type="text" name="OutDescription1" value="OutDescription1">
                </td>
                <td>
                  <input type="text" name="OutAmount1" value="OutAmount1">
                </td>
              </tr>
            </table>
            <input type="button" value="Add Row" onclick="addOutRow('outTable')" />
            <input type="button" value="Delete Row" onclick="deleteRow('outTable')" />
            <p>Total Shifted Out<br>
              <input type="text" name="totalout" value="$"><br>
            </p>
          </div>
          </div>
            <img src="Arrow" alt="Arrow" style="width:175px;height:80px;padding-top: 30px;">
          <div class="lineBoxLeft">
            <div class="doublecolumn">
              <table id="inTable" class="table">
                <tr>
                  <th>Line Item Description</th>
                  <th>$ Amount</th>
                </tr>
                <tr class="unit-table">
                  <td>
                    <input type="text" name="InDescription1" value="InDescription1">
                  </td>
                  <td>
                    <input type="text" name="InAmount1" value="InAmount1">
                  </td>
                </tr>
              </table>
            <input type="button" value="Add Row" onclick="addInRow('inTable')" />
            <input type="button" value="Delete Row" onclick="deleteRow('inTable')" />
            <p>Total Shifted In<br>
              <input type="text" name="totalin" value="$"><br>
            </p>
          </div>
          </div>
        </div>
        <p>Request Description<br>
        <textarea rows="3" cols="50" name="Request_Description" ></textarea>
        </p>
        <br><br>
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
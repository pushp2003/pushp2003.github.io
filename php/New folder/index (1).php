<?php

    if($_SERVER["REQUEST_METHOD"]=="post"){
        include "dbconn.php";
        $username=$_POST['user'];
        $password=$_POST['pass'];

        $sql="Select * from register where username='$username' AND password='$password'";
       
    
    }   
?>



<!DOCTYPE html>
<html>

<head>
    <title>Student-Management</title>
    <link rel="stylesheet" href="./css/CA.css">

</head>

<body>
    <div class="bodyy">
        <h1>Student-Management</h1>
        <form action="index.php" method="post"></form>
        <div class="login">
            <div class="head">
                <h3>Log in to <br> Student-Management</h3>
            </div>
            <div class="mp">
                <input type="text" id="mail" name='user' placeholder="Email address or phone number" required><br><br>
                <input type="password" id="pass" name='pass' placeholder="Password" required>
            </div><br>
            <div class="btn">
                <button id="login">Log in</button>
            </div>
            <a class="fp" href="forgot.html">Forgot Password? </a>
            <p>or</p>
            <a href="Create_account.php">Create new account?</a><br><br>
        </div>
    </div>


<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>
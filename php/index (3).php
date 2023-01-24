<!DOCTYPE html>
<html>

<head>
    <title>Student-Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/create.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Charis+SIL:ital@1&family=Gentium+Plus:ital@1&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="bodyy">
        <h1>Student-Management</h1>
        <form action="create.php">
            <div class="create">
                <div class="header">
                    <h1>Create a new account</h1>
                    <p>It's quick and easy.</p>
                </div><br>
                <div class="name">
                    <input type="text" placeholder=" First name" required>
                    <input type="text" placeholder=" Surname"><br>
                </div><br>
                <div class="pass">
                    <input type="text" placeholder=" Mobile number or email address" required><br><br>
                    <input type="password" placeholder=" New password" required><br>
                </div>
                <div class="dob">
                    <p>Date of birth <i class="fa fa-question-circle"></i></p><br>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select>
                    <select>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                    </select>
                    <select>
                        <option>2010</option>
                        <option>2009</option>
                        <option>2008</option>
                        <option>2007</option>
                        <option>2006</option>
                        <option>2005</option>
                        <option>2004</option>
                        <option>2003</option>
                        <option>2002</option>
                        <option>2001</option>
                        <option>2000</option>
                        <option>1999</option>
                    </select>
                </div>
                <div class="gen">
                    <p>Gender <i class="fa fa-question-circle"></i></p>
                    <span class="gen1">
                        <label for="Male">Male</label>
                        <input type="radio" name="my gender">
                    </span>
                    <span class="gen1">
                        <label for="Female">Female</label>
                        <input type="radio" name="my gender">
                    </span>
                    <span class="gen1">
                        <label for="Other">Other</label>
                        <input type="radio" name="my gender">
                    </span>
                </div><br>
                <div class="term">
                    <p>People who use our service may have uploaded your contact information to <br> Facebook. <a
                            href="#">Learn
                            more.</a></p>
                    <p>By clicking Sign Up, you agree to our <a href="#">Terms, Data Policy</a> and <a href=""> Cookie
                            Policy.</a> You may receive SMS notifications from us and can opt out at any time.</p>
                </div>
                <input class="btn" type="submit" value="Sign Up"><br><br>
                <a class="all" href="index.html">Already have an account?</a><br><br>
        </form>
    </div>
    </div>


<!-- Code injected by live-server -->
<script type="text/javascript">
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
</script></body>

</html>
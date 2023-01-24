    <?php
    if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to this database failed due to". mysqli_connect());
    }
    // echo "success"; 

    $b1 = $_POST['d'];
    $b2 = $_POST['o'];
    $b3 = $_POST['b'];
    $birth = $b1.$b2.$b3;


    $name=$_POST['name'];
    $mobile=$_POST['user'];
    $pass=$_POST['pass'];
    $gender=$_POST['gender'];
    $dob=$birth;

    $sql=" INSERT INTO `register`.`regi` ( `Name`, `Mobile or email`, `pass`, `gender`, `DoB`, `date & time`) 
     VALUES ('$name', '$mobile', '$pass', '$gender', '$dob', current_timestamp());";

    // echo $sql;

    if($con->query($sql)==true){
        // echo "success";
    }
    else{
        echo "Error:$sql <br> $con->error";
    }
    $con->close();

}
    ?>








<!DOCTYPE html>
<html>

<head>
    <title>Student-Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="create.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Charis+SIL:ital@1&family=Gentium+Plus:ital@1&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="bodyy">
        <h1>Student-Management</h1>
        <form action="index.php" method="post">
            <div class="create">
                <div class="header">
                    <h1>Create a new account</h1>
                    <p>It's quick and easy.</p>
                </div><br>
                <div class="name">
                    <input type="text" name="name" id="name" placeholder=" Your full name" required>
                    <!-- <input type="text" name="sur" id="sur" placeholder=" Surname"><br> -->
                </div><br>
                <div class="pass">
                    <input type="text" name="user" id="user" placeholder=" Mobile number or email address" required><br><br>
                    <input type="password" name="pass" id="pass" placeholder=" New password" required><br>
                </div>
                <div class="dob" name="dob" id="dob">
                    <p>Date of birth <i class="fa fa-question-circle"></i></p><br>
                    <select name="d" id="d">
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
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
                    <select name="o" id="o">
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
                    <select name="b" id="b">
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
                <div class="gen" >
                    <p>Gender <i class="fa fa-question-circle"></i></p>
                    <span class="gen1">
                        <label for="Male">Male</label>
                        <input type="radio" name="gender" value="Male">
                    </span>
                    <span class="gen1">
                        <label for="Female">Female</label>
                        <input type="radio" name="gender" value="Female">
                    </span>
                    <span class="gen1">
                        <label for="Other">Other</label>
                        <input type="radio" name="gender" value="other">
                    </span>
                </div><br>
                <div class="term">
                    <p>People who use our service may have uploaded your contact information to <br> Student-Management. <a
                            href="#">Learn
                            more.</a></p>
                    <p>By clicking Sign Up, you agree to our <a href="#">Terms, Data Policy</a> and <a href="#"> Cookie
                            Policy.</a> You may receive SMS notifications from us and can opt out at any time.</p>
                </div>
                <a href="#"><input class="btn" type="submit" value="Sign Up"></a><br><br>
                <a class="all" href="#">Already have an account?</a><br><br>
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




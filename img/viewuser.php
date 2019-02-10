<?php
$server = "localhost";
$user = "root";
$dbname = "cricket";
$con = mysqli_connect($server,$user);
mysqli_select_db($con,$dbname);
$q= "select * from user";
$result=mysqli_query($con,$q);
$num= mysqli_num_rows($result);
mysqli_close($con);
?>

<html>
<head>
<title>cricket database</title>
<link rel = "stylesheet" href="./css/viewuser.css" />
</head>

<body>
<div class="black">
<h2>User details Available</h2>       
</div>
<table class="col">

    
<tr class ="header">
<th class="heading">Name</th>
<th class="heading">Email</th>
<th class="heading">Password</th>
<th class="heading">Username</th>
<th class="heading">Age</th>
<th class="heading">Mobile</th>
<th class="heading">team</th>
</tr>
<?php 
for($i=1;$i<=$num;$i++){
    $row=mysqli_fetch_array($result);

?>
<tr>
<td class="data grey"><strong><?php echo $row['name']; ?></strong></td>
<td class="data"><strong><?php echo $row['email']; ?></strong></td>
<td class="data"><strong><?php echo $row['password']; ?></strong></td>
<td class="data"><strong><?php echo $row['uname']; ?></strong></td>
<td class="data"><strong><?php echo $row['age']; ?></strong></td>
<td class="data"><strong><?php echo $row['MOBILE']; ?></strong></td>
<td class="data"><strong><?php echo $row['TEAM']; ?></strong></td>

</tr>   

<?php
}
?>
</table>

<div class="green">
<h3>Do you want to create more account</h3>
<a href="index.html" class="button" >HOME</a>
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
					head.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					head.appendChild(elem);
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
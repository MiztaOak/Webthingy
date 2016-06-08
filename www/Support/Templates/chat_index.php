<head>
	<meta charset="utf-8">
	<style>
		#txt{
			height:600px;
			width:400px;
			overflow-y:scroll;
		}
		table,th,td {
		  border : 1px solid black;
		  border-collapse: collapse;
		}
		th,td {
		  padding: 5px;
		}
	</style>
</head>

<body onload="setTimer()">

	<div id="txt"></div>

		<input id="msg" value="hej"> </input>
		<button name="customers" onClick="sendMsg()"> Skriv </button>

	<br>



	<script>
	function setTimer(){
		tid = setInterval(function(){ showMsg(); }, 100);
	}
	function sendMsg(){
		var xhttp = new XMLHttpRequest();
		xhttp.open("GET", "chat.php?msg="+document.getElementById('msg').value, true);
		xhttp.send();
		showMsg();
	}
	function showMsg(){
		var xhttp = new XMLHttpRequest();
		
		xhttp.onreadystatechange = function() {
	    if (xhttp.readyState == 4 && xhttp.status == 200) {
	      document.getElementById("txt").innerHTML = xhttp.responseText;
			}
		};
		
		xhttp.open("GET", "chat.php", true);
		xhttp.send();
	}
	</script>

</body>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Wish your friends in a new way!!!">
<title>New year greetings!</title>
<link rel="stylesheet"
	href="https://unpkg.com/purecss@1.0.0/build/pure-min.css">
<link href="https://fonts.googleapis.com/css?family=Special+Elite"
	rel="stylesheet">
<style type="text/css">
body {
	font-family: 'Special Elite', cursive;
	line-height: 1.7em;
	font-size: 25px;
	color: #d45151;
	background-size: cover;
	background-image:
		url(https://media.giphy.com/media/hZjz3XKyRXhv2/giphy.gif);
	font-weight: 500;
}

a {
	text-decoration: none;
	color: black;
	font-style: italic;
	font-size: larger;
}

input[type="text"] {
	display: inline-block;
	outline: none;
	border: 1px solid lightgray;
	border-radius: 3px;
	padding: 10px 10px 10px 10px;
	transition: all 0.1s ease-out;
}

.footer {
	position: fixed;
	bottom: 0;
	width: 100%;
}

div p {
	display: inline-block;
}

.glitter {
	box-sizing: content-box;
	padding: 20px;
	border: none;
	font: normal 50px/1 "Monoton", Helvetica, sans-serif;
	color: rgba(255, 255, 255, 1);
	text-align: center;
	text-overflow: ellipsis;
	text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0
		0 30px rgb(255, 255, 255), 0 0 40px rgb(255, 17, 119), 0 0 70px
		rgb(255, 17, 119), 0 0 80px rgb(255, 17, 119), 0 0 100px
		rgb(255, 17, 119), 0 0 150px rgb(255, 17, 119);
	transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
}

.glitter:hover {
	text-shadow: 0 0 5px rgb(255, 255, 255), 0 0 10px rgb(255, 255, 255), 0
		0 15px rgb(255, 255, 255), 0 0 20px rgb(255, 17, 119), 0 0 35px
		rgb(255, 17, 119), 0 0 40px rgb(255, 17, 119), 0 0 50px
		rgb(255, 17, 119), 0 0 75px rgb(255, 17, 119);
}

@media only screen and (max-width : 480px) {
	body {
		background: cover;
		background-image: url(bg-image.gif);
		font-size: 10px;
		background-size: auto !important;
	}
	#whatsappshare {
		background-color: #02dc1d;
		color: black;
		border-radius: 10px;
		padding: 5px;
		text-align: center;
		font-size: 15px;
		visibility: visible !important;
		margin: 15px;
	}
	form {
		margin-left: 15% !important;
		margin-top: 20%;
	}
	#demo {
		font: normal 20px/1 "Monoton" !important;
		color: rgba(255, 255, 255, 1);
		text-align: center;
	}
	input[type="text"] {
		width: 80% !important;
	}
	button {
		border-radius: 3px;
		width: 80%;
		margin-left: 4%;
	}
}

#demo {
	font: normal 50px/1 "Monoton";
	color: rgba(255, 255, 255, 1);
	text-align: center;
}

#whatsappshare {
	visibility: hidden;
}
</style>
<script type="text/javascript">
var countDownDate = new Date("Jan 01, 2018 00:00:00").getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("demo").innerHTML = days + "<i> Days,</i> " + hours + " <i>Hrs,</i> "
  + minutes + "<i> Min,</i> " + seconds + "<i> Sec</i> ";
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "";
  }
}, 1000);

function openwhatsapp(){
	var loca = "whatsapp://send?text="+window.location.href;
	document.getElementById("whatsapplink").setAttribute("href", loca);
}
</script>
</head>
<body>
<?php
$nameErr = $websiteErr = "";
$name = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty($_GET["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_GET["name"]);
        if (! preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_GET["website"])) {
        $website = "";
    } else {
        $website = test_input($_GET["website"]);
        if (! preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
	<div class="pure-g">
		<div class="pure-u-1">
			<div class="l-box">
				<div id="demo"></div>
				<form method="get"
					action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
					style="margin-left: 34%; margin-top: 15%;">
					<input type="text" name="name" value="<?php echo $name;?>"
						placeholder="Enter your name..." style="width: 35%;">
					<button type="submit" class="pure-button-primary">Go</button>
				</form>
				<div class="pure-u-1">
					<div class="glitter">
            			Wish you a happy new year <?php echo $name;?>
            		</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div id="whatsappshare" >
			<a id="whatsapplink" onclick="openwhatsapp()">Share on Whatsapp</a>
		</div>
		<!--<p style="margin-left: 2%;">
			<a href="">©Techsnob</a>
		</p>
		<p style="float: right; margin-right: 2%;">Made with &#10084;</p> -->
	</div>
</body>
</html>
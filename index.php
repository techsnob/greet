<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="New year greeting from Techsnob!!!">
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

input[type="text"]{
    display: inline-block;
    width: 500px;
    height: 40px;
    box-sizing: border-box;
    outline: none;
    border: 1px solid lightgray;
    border-radius: 3px;
    padding: 10px 10px 10px 100px;
    transition: all 0.1s ease-out;
  }
      
  input[type="text"]:focus{
    padding: 10px;
/*     transition: all 0.3s ease-out; */
/*     transition-delay: 0.2s; */
    width:800px;
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
	margin: 2%;
	height: 5rem;
	font-size: 5rem;
	font-size: 100px;
	font-family: impact;
	-webkit-text-fill-color: transparent;
	background: -webkit-linear-gradient(transparent, transparent),
		url(http://www.myspacehippo.com/files/glitterbacks/bg345.gif) repeat;
	background: -o-linear-gradient(transparent, transparent);
	-webkit-background-clip: text;
}
</style>
<!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6300888793339990",
    enable_page_level_ads: true
  });
</script> -->
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
		<div class="pure-u-1 form-box">
			<div class="l-box">
				<form method="get"
					action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<input type="text" name="name" value="<?php echo $name;?>"
						placeholder="Enter your name..." style="width: 35%;">
					<button type="submit" class="pure-button-primary">Submit</button>
					<div class="glitter">Happy new year <?php echo $name;?></div>
				</form>
			</div>
		</div>
	</div>
	<div class="footer">
		<p style="margin-left: 2%;">
			<a href="">©Techsnob</a>
		</p>
		<p style="float: right; margin-right: 2%;">Made with &#10084;</p>
	</div>
</body>
</html>
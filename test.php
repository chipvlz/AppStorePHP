<!DOCTYPE html>
<html >
	<head>
	</head>
	
	<body>
		<?php  $src = "images/app12.jpg"; ?>
		<h1>This is a test</h1>    
		<img src="<?php echo $src; ?>" alt="Smiley face" height="42" width="42"> 



		
		<p>
			An image as a link: 
			<a href="index.php">
				<img border="0" alt="W3Schools" src="<?php echo $src; ?>" width="100" height="100">
			</a>
		</p>

		<p>
			Download
			<a href = "Games/game1.apk">Clash of Clans</a>
			<?php 
				include_once "dbhelper.php";
				//$var = $db->getAppInfo();
				//echo $var[0][1] . " " . $var[4] . " " . $var[5];
				$db->getAppInfo();
			?>
		
		</p>
		
  	</body>


</html>

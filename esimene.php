<?php
	//muutujad
	$myName = "Konstantin";
	$myFamilyName = "Blinkov";
	//hindan päeva osa (Võrdamine   < > <=  >= == != )
	$hourNow = date("H");
	$partofDay = "";
	if ($hourNow < 8){
		$partofDay = "varajane hommik";
	}
	if ($hourNow >= 8 and $hourNow <16){
		$partofDay = "Koolipäev";
	}
	if ($hourNow > 16){
		$partofDay = "vabaaeg";
	}
	echo $partofDay
?>
<!DOCTYPE html>
<html>
<body bgcolor="#10DFFB">
<head>
	<meta charset="utf-8">
	<title>Konstantin Blinkov on informaatika õppilane</title>
</head>
<body>
	<h1><?php echo $myName ." " .$myFamilyName; ?>Konstantin Blinkov, TLÜ's</h1>
	<p>Oppin informaatika erialal</p>
	<p>Ja soovin edukalt loppetada korgkooli</p>
	<p>See vebileht on loodud õppetöö raames ning ei sisalda mingisugust tõsiseltvõetavat sisu!</p>
	<?php
		echo "<p>Algus PHP õppimine.<?p>";
		echo "<p> Täna on ";
		echo date("d.m.Y") .", kell oli lehe avamise hetkel " .date("H:i:s");
		echo ", hetkel on " .$partofDay .".</p>";
	?>
</body>
</html>
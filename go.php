<?php include 'inc/head.php'; ?>
<?php
	$go = substr($_SERVER["REQUEST_URI"], 1, 6);
	echo $go;
	// $confirm = "SELECT * FROM `short` WHERE query = '$go'";
	// $query = mysqli_query($conn,$confirm);
	// $gets = mysqli_fetch_array($query);

	// $exly = $gets["links"];
	// $url = strtolower($exly);
 //    $gox = '';		

	// if(($url[0] == "h") && ($url[1] == "t") && ($url[2] == "t")
	// 	&& ($url[3] == "p") && ($url[4] == ":") && ($url[5] == "/") 
	// 	&& ($url[6] == "/"))
	// 		{
 //                $exly = substr($exly, 7,(strlen($exly) - 7));
	// 		}
	// 	else if(($url[0] == "h") && ($url[1] == "t") && ($url[2] == "t")
	// 	&& ($url[3] == "p") && ($url[4] == "s") && ($url[5] == ":")
	// 	&& ($url[6] == "/") && ($url[7] == "/"))
	// 		{
 //                $exly = substr($exly, 8,(strlen($exly) - 8));
	// 		}
?>
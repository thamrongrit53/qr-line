<?php 
if(!empty($_POST['status']) && !empty($_POST['station']))
    {
		$myfile = fopen("log_data.txt", "w") or die("Unable to open file!");
		$txt = $_POST['status']." ".$_POST['station'];
		fwrite($myfile, $txt);
		fclose($myfile);
	}
	$myfile = fopen("log_data.txt", "r") or die("Unable to open file!");
	echo fgets($myfile);
	fclose($myfile);
    
?>

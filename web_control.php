<?php
$name_ch1=$_POST["name_ch1"];
$ch1=$_POST["ch1"];
$name_ch2=$_POST["name_ch2"];
$ch2=$_POST["ch2"];


$arr = array('id'=>1,'name_ch1' =>$name_ch1, 'ch1' => $ch1,'name_ch2'=>$name_ch2,'ch2'=>$ch2);
echo json_encode($arr);
?>
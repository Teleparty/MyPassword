<?php
$contents = file_get_contents('http://www.kenkenuae.com/register/print_performance.php?compitition_level=2&_reg_code='.$_GET['code']);
$stringed = strip_tags($contents);
$trimed = trim($stringed," ");
$explode1 = explode("Participant's Name", $trimed);
$final = explode("Your Score", $explode1[1]);
echo $final[0]; 
?>
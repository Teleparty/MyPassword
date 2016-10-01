<?php
for ($h = 1017; $h < 1044; $h++)
{
	$result = file_get_contents('http://mypassword.ueuo.com/kenken/index.php?code=DXB-RISB-16-06-'.$h);
	echo 'DXB-RISB-16-06-'.$h.'  '.$result.'<br><br>';
	ob_flush();
	flush();
}

for ($i = 1044; $i < 1072; $i++)
{
	$result = file_get_contents('http://mypassword.ueuo.com/kenken/index.php?code=DXB-RISB-16-07-'.$i);
	echo 'DXB-RISB-16-07-'.$i.'  '.$result.'<br><br>';
	ob_flush();
	flush();
}
?>
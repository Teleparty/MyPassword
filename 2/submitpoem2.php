<?php
$name = $_POST['name'];
$poem = $_POST['poem'];

$mypoem = fopen($name.'.html', 'w+') or die('could not create file '.$name.'.html');
fwrite($mypoem, $poem);
fclose($mypoem);
?>
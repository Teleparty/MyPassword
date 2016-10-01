<?php
//extract data from the post
//set POST variables
if (isset($_POST['submit'])) {
	$url = 'https://app.myimaths.com/studentRecords/saveDataOH2.asp';
	$fields = array(
		'sCode' => urlencode($_POST['sCode']),
		'q1score' => urlencode($_POST['q1score']),
		'q2score' => urlencode($_POST['q2score']),
		'taskID' => urlencode($_POST['taskID']),
	);
	//url-ify the data for the POST
	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	rtrim($fields_string, '&');
	//open connection
	$ch = curl_init();
	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
	//excute the connection
	curl_exec($ch);
	//get the information about the connection
	$result = curl_getinfo($ch);
	//prints 1 if the login is successful
	if ($result['http_code'] == 200)
	{
		echo 'Your task is finished!';
	}
	else
	{
		echo 'Failed to finish your task. Try it <a href="myimaths.php">here</a>';
	}
	//close connection
	curl_close($ch);
}
?>

<html>
<head>
<title>MyiMaths Cheater</title>
</head>
<body>
<form action="" method="POST">
<input type="text" name="sCode" placeholder="sCode">
<input type="text" name="q1score" placeholder="q1score">
<input type="text" name="q2score" placeholder="q2score">
<input type="text" name="taskID" placeholder="taskID">
<input type="submit" name="submit" value="Finish my task!!">
</form>
<br>
<h1></h1>
</body>
</html>
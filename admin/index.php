<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
 
<html> 
<head> 
	    <link rel=stylesheet type="text/css" href="/scripts/common.css" title="common"> 
	<title>Welcome to the Infant Botulism Treatment and Prevention Program</title> 
</head> 
 
<body style="margin: 5px; padding: 0px 0px 0px 0px;"> 

<?php
$myFile = "../contact/emergency";
$fh = fopen($myFile, 'w');

if ($_REQUEST['submit'] == 1)
{
	$info = str_replace ("\n", "<br />", $_REQUEST['info']);
	
	fwrite($fh, $info);
	fclose($fh);
	echo "<div style='font-weight: bold; color: #990000'>Emergency Info Updated To:</div>" . $info;
}
else if ($_REQUEST['clear'] == 1)
{
	fwrite($fh, "");
	fclose($fh);
	echo "<div style='font-weight: bold; color: #990000'>Emergency Info Cleared.</div>";
}
?>

<h2>Emergency Info Update Form</h2>
You can enter any information below and hit the "Update Emergency Info" button to have the text show up on the front page.
<br /><br />
To clear the emergency info from the front page, hit the "Clear Emergency Info" button.

<br /><br />
<b>Emergency Info:</b><br />
<form action ="index.php" method="POST">
<textarea id="info" name="info" style="width: 400px; height: 200px;"><?php

$myFile = "../contact/emergency";
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);

if (strlen($theData) > 3)
{
	$theData  = str_replace ("<br />", "\n", $theData);
	echo $theData;
}
?></textarea>
<br />
<input type="hidden" name="submit" id="submit" value="1" />
<input type="submit" value="Update Emergency Info" />
<hr />
<input type="button" value="Clear Emergency Info" onClick="document.location='index.php?clear=1'" />
</form>

</body></html>
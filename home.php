<?php require("scripts/template-start.php"); ?>


<?php

$myFile = "contact/emergency";
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);

if (strlen($theData) > 3)
{
	echo <<<EOT
	<tr><td colspan="3" style="color: #ffffff; background-color: #cc0000; font-size: 18px; padding: 10px; text-align: center;">
{$theData}
</td></tr>
EOT;
}
?>


<tr>
   <td rowspan=2 style="width: 178px; " valign=top>
	<img src="images/lindseyk2.jpg" style="margin: 0px 0px 2px 0px;">
	<!-- <img src="images/callingcardbaby.jpg" style="margin: 0px 2px 2px 0px;" align="right">	-->	
   </td>
   <td style="background: #A8BFE6;" align="center">
	<img src="images/template-mission.gif"><br>
   </td>
   <td rowspan=2 style="width: 186px; text-align: center; font-size: 12px;" valign=top>
     <img src="images/frontpage1.png" style="margin: 0px 0px 0px 0px;" width=186><br />
     Avi T., now a healthy and happy child, was treated for infant botulism in 2006
     <img src="images/frontpage2.png" style="margin: 0px 0px 0px 0px;" width=186 border=0><br />
     Brandon M. holding a memento of his treatment with BabyBIG<sup>&reg;</sup>
   </td>
</tr>
   <td valign=top>

<!--
<table style="background-color: #ccc; padding: 4px; margin: 4px;">
	<tr><td>
<iframe src="http://rarediseaseday.us/files/countdown/badge.php" scrolling="no" frameborder="0" width="160" height="250"  allowtransparency="true"></iframe>
	</td><td style="font-family: garamond; font-size: 19px; padding-left: 5px;">
	The National Organization for Rare Disorders (NORD) is currently organizing a Rare Disease Day on February 29, 2012. To visit the Rare Disease Day website, <a href="http://rarediseaseday.us/" target="_blank">click here</a>.
	</td></tr>
</table>
-->


<p style="margin: 10px 25px 20px 25px; font-family: garamond; font-size: 19px; text-align: left;">
Infant botulism is an orphan (&quot;rare&quot;) disease that affects infants primarily under 1 year of age. First recognized in 1976, infant botulism occurs globally and is the most common form of human botulism in the United States. 
<br /><br />
Infant botulism is a novel form of human botulism in which ingested spores of the bacterium <i>Clostridium botulinum</i> colonize and grow in the infant's large intestine and produce botulinum neurotoxin in it. The action of the toxin in the body produces constipation, weakness (notably of gag, cry, suck and swallow), loss of muscle tone, and ultimately, flaccid (&quot;limp&quot;) paralysis. Affected infants have difficulty feeding and often, breathing. However, in the absence of complications, patients recover completely from the disease.
</p>

<ul>
<li style="font-family: garamond; font-size: 20px;">For more information about how to obtain BabyBIG<sup>&reg;</sup>, please <a style="font-family: garamond; font-size: 20px;" href="http://www.infantbotulism.org/physician/obtain.php">click here</a></li>
<li style="font-family: garamond; font-size: 20px;">For more information on infant botulism diagnostic testing, please <a style="font-family: garamond; font-size: 20px;" href="http://www.infantbotulism.org/laboratorian/laboratory.php">click here</a></li>
<li style="font-family: garamond; font-size: 20px;">See links at the top of the page for additional resources and information</li>
</ul>
   </td>

<?php require("scripts/template-end.php"); ?>

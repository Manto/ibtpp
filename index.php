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


   <td valign=top>

<div style="font-size: 18px; width: 800px; margin: auto; padding: 25px;">

If your child or patient has not received ByHeart infant formula, please click on the
yellow header above for information about infant botulism and BabyBIG.

<br /><br />

<b>Health Care Providers</b> seeking information regarding a patient who drank ByHeart infant formula, <a href="byheart-for-provider.php" style="font-size: 18px;">click here</a>.

<h3 style="color: #369;">
Outbreak of infant botulism linked to ByHeart infant formula.
</h3>

US federal and state public health officials in several states are investigating a
nationwide outbreak of infant botulism linked to ByHeart infant formula.
Infant botulism happens when a baby swallows bacteria that then grow in the gut and
make botulinum toxin. Infant botulism often starts with constipation but is usually first
noticed as difficulty feeding (sucking and swallowing), a weak and altered cry, and loss
of head control.

<br /><br />

<h3 style="color: #369;">
New Infant Botulism Hotline for Parents and Caregivers
</h3>

<div style="text-align: center; font-size: 32px; background-color: #369; color: #ffffff; -webkit-text-size-adjust: 300%; -webkit-text-fill-color: #fff; padding: 10px 25px 10px 25px; margin: 10px;">
1-833-398-2022
</div>

Available toll-free 7 days a week, 7AM – 8PM (pacific time)
<br />
Trained staff can help with:
<br />

<ul>
<li>Understanding signs of infant botulism</li>
<li>What to do if your baby consumed ByHeart formula</li>
<li>How to safely handle recalled products</li>
<li>Where to find updates and resources, including treatment, if needed</li>
</ul>

⚠️ If your baby is experiencing a medical emergency or showing signs of infant botulism, such as poor feeding, loss of head control or muscle weakness - call 9-1-1 or go to the nearest emergency room immediately.

<h3 style="color: #369;">
What should parents do?
</h3>

Warning: <b>If you feel that your baby is experiencing a medical emergency, please
call 911 or go to the nearest emergency room.</b>

<ul>
<li>If this is not an emergency, please contact your child’s primary care provider
about your child’s health.</li>
<li>Our program does not provide medical advice directly to patients or families.</li>
</ul>

<b>Do not use ByHeart Whole Nutrition infant formula</b>
<br />

<ul>
<li>Infant botulism is still a very rare disease, most infants who have been fed
ByHeart formula will NOT experience infant botulism.</li>
<li>If you have leftover ByHeart powdered formula that your infant was fed, keep it
stored for at least a month. If your infant develops symptoms of infant botulism,
your state health department may want to collect it for testing. If no symptoms
appear after a month, throw the leftover formula away.</li>
<li>Wash items and surfaces that may have touched the formula using soapy water
or a dishwasher.</li>
<li><b>Seek immediate medical attention</b> if your baby drank ByHeart infant formula in
the past 30 days and has any of these symptoms:
  <ul>
  <li>Poor feeding</li>
  <li>Difficulty swallowing</li>
  <li>Weaker facial expressions</li>
  <li>Loss of head control</li>
  </ul>
</li>

<li>Watch closely for these symptoms for 30 days after your baby last drank ByHeart
formula.</li>
<li>Constipation is a very common sign in healthy infants. It is also a common early
sign of infant botulism.</li>
</ul>

<h3 style="color: #369;">
My baby is not sick today. Does my baby need to be tested?
</h3>

<ul>
<li>No. Testing for infant botulism is not recommended for healthy babies.</li>
<li>Testing for infant botulism is complicated, not rapid, and only performed by a few,
specialized laboratories in the US.</li>
<li>State public health departments need to approve requests for testing.</li>
</ul>


</div>
  </td>

<?php require("scripts/template-end.php"); ?>

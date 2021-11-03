<?php if ($_GET["printable"]==1)
	require("../scripts/template-start-printable.php");
	else require("../scripts/template-start.php"); ?>
	
  <td class="title" valign=top>
		&nbsp;How to obtain BabyBIG<sup>&reg;</sup>
   </td>
	<td class="title" align=right>

	<?php if ($_GET["printable"]!=1) { ?>
	<a style="text-decoration: underline" target="_blank" href="IPA-2021-10.pdf"><img src="/images/file.gif" border=0>Invoice and Purchase Agreement (IPA) in PDF File</a> <span style="font-size: 16px;"></span><br>
<!--	<a style="text-decoration: underline" target="_blank" href="checklist.pdf"><img src="/images/file.gif" border=0>Checklist in PDF File</a><br>	-->
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="/images/file.gif" border=0>Printable Version of this Page</a><br>
	</td>
	<?php } ?>
</tr>
<tr>
	<td class="main" colspan=2>

For clinical consultation for a patient under 15 months of age with suspected infant botulism, the patient's 
physician should contact the Infant Botulism Treatment and Prevention Program 
(IBTPP) on-call physician at (510) 231-7600 (24/7/365). To obtain BabyBIG<sup>&reg;</sup> for a 
patient with suspect infant botulism, the physician must contact the IBTPP on-call 
physicians.

<br /><br />

If your patient is older than 15 months, please see <a href="https://www.cdph.ca.gov/Programs/CID/DCDC/Pages/BotulismHealthProfessionals.aspx">CDPH Botulism Information for Health Professionals</a> for instructions on requesting antitoxin.

<br><br>

<u>The decision to treat with BabyBIG<sup>&reg;</sup> should be based on clinical presentation and findings and should <b>not</b> be delayed by waiting for results of laboratory confirmatory testing.</u>

Prompt treatment of infant botulism patients immediately 
ends their toxemia and enables motor nerve regeneration to begin.

<br><br>

For instructions on submission of appropriate diagnostic specimens (e.g., stool/enema or rectal wash) please click <a href="/laboratorian/laboratory.php">here</a>.

<br /><br />

Although infants with suspected infant botulism may be constipated, it is prudent to collect a stool or enema specimen without delay and submit it to your state’s botulism diagnostic laboratory (which may be the CDC for some states.)

<br/><br />

Title 17, California Code of Regulations (CCR) §2500, §2593, §2641.5-2643.20, and §2800-2812
requires that healthcare providers report known or suspected cases of infant botulism to the
jurisdiction in which the patient resides. <i>Please report any suspect infant botulism case to your local
health jurisdiction through appropriate channels.</i>

<!--
California health care providers <a style="text-decoration:underline" href="/physician/physician_instruction.pdf" target="_blank">click here</a> to download the printable
lab send-out instructions sheet to forward with the stool specimen to
your hospital laboratory.
-->

<br><br>
For more detailed information on Infant Botulism, please visit the <a href="/readings/medical.php">Medical Literature</a> page.
<br><br>

<?php if ($_GET["printable"]!=1) { ?>
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="/ibtpp/images/file.gif" border=0>Printable Version of this Page</a>
<?php } ?>
<?php if ($_GET["printable"]==1)

	require("../scripts/template-end-printable.php");
	else require("../scripts/template-end.php"); ?>

<?php if ($_GET["printable"]==1)
	require("../scripts/template-start-printable.php");
	else require("../scripts/template-start.php"); ?>
	
  <td class="title" valign=top>
		&nbsp;How to obtain BabyBIG<sup>&reg;</sup>
   </td>
	<td class="title" align=right>

	<?php if ($_GET["printable"]!=1) { ?>
	<a style="text-decoration: underline" target="_blank" href="IPA-Spr2016.pdf"><img src="http://www.infantbotulism.org/images/file.gif" border=0>Invoice and Purchase Agreement (IPA) in PDF File</a> <span style="font-size: 16px;">(Updated Apr 2016)</span><br>
<!--	<a style="text-decoration: underline" target="_blank" href="checklist.pdf"><img src="http://www.infantbotulism.org/images/file.gif" border=0>Checklist in PDF File</a><br>	-->
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="http://www.infantbotulism.org/images/file.gif" border=0>Printable Version of this Page</a><br>
	</td>
	<?php } ?>
</tr>
<tr>
	<td class="main" colspan=2>

For clinical consultation for a patient with suspected infant botulism, the patient's 
physician should contact the Infant Botulism Treatment and Prevention Program 
(IBTPP) on-call physician at (510) 231-7600 (24/7/365). To obtain BabyBIG<sup>&reg;</sup> for a 
patient with suspect infant botulism, the physician must contact the IBTPP on-call 
physicians.

<!--
To obtain BabyBIG<sup>&reg;</sup> for a patient with suspected infant botulism, the
patient's physician must first contact the Infant Botulism Treatment and
Prevention Program (IBTPP) on-call physician at (510) 231-7600 to review
the indications for such treatment.
-->
<br><br>

<!--
Click <a style="text-decoration: underline" target="_blank" href="checklist.pdf">here</a> to download the <b style="color: #336699;">REFERENCE ONLY</b> checklist
<br><br>
-->

The decision to treat with BabyBIG<sup>&reg;</sup> should be based on clinical presentation and 
findings and should <u>not</u> be delayed by waiting for results of laboratory 
confirmatory testing.  Prompt treatment of infant botulism patients immediately 
ends their toxemia and enables motor nerve regeneration to begin.

<!--
Stool, enema or rectal wash specimens for diagnostic testing (serum not needed) from California in-patients and out-patients with suspected infant botulism may be submitted to the IBTPP laboratory only after consulting with IBTPP physician-on-call.  California physicians seeking such testing for their patient should contact the IBTPP at (510) 231-7600.  For non-California physicians, please contact your State public health department for instructions.
-->

<br><br>

For instructions on submission of appropriate diagnostic specimens (e.g., stool/enema or rectal wash) please click <a href="http://www.infantbotulism.org/laboratorian/laboratory.php">here</a>.

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
<!--	<a style="text-decoration: underline" target="_blank" href="checklist.pdf"><img src="http://www.infantbotulism.org/images/file.gif" border=0>Checklist in PDF File</a> <b style="color: #336699;">(REFERENCE ONLY)</b>-->
<!--	<a style="text-decoration: underline" target="_blank" href="IPA.pdf"><img src="http://www.infantbotulism.org/images/file.gif" border=0>Invoice and Purchase Agreement (IPA) in PDF File</a>  <span style="font-size: 16px;">(Updated September 2007)</span>-->
<?php } ?>
<?php if ($_GET["printable"]==1)

	require("../scripts/template-end-printable.php");
	else require("../scripts/template-end.php"); ?>

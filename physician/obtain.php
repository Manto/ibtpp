<?php if ($_GET["printable"]==1)
	require("../scripts/template-start-printable.php");
	else require("../scripts/template-start.php"); ?>
	
  <td class="title" valign=top>
		&nbsp;How to Obtain Clinical Consultation and Order BabyBIG<sup>&reg;</sup>
   </td>
	<td class="title" align=right>

	<?php if ($_GET["printable"]!=1) { ?>
	<a style="text-decoration: underline" target="_blank" href="IPA-2025-06.pdf"><img src="/images/file.gif" border=0>Invoice and Purchase Agreement (IPA) in PDF File</a> <span style="font-size: 16px;"></span><br>
<!--	<a style="text-decoration: underline" target="_blank" href="checklist.pdf"><img src="/images/file.gif" border=0>Checklist in PDF File</a><br>	-->
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="/images/file.gif" border=0>Printable Version of this Page</a><br>
	</td>
	<?php } ?>
</tr>
<tr>
	<td class="main" colspan=2>

For no-cost clinical consultation for a patient under 15 months of age with suspected infant botulism, the patient's 
physician should contact the Infant Botulism Treatment and Prevention Program 
(IBTPP) on-call physician at (510) 231-7600 (24/7/365). The IBTPP physicians will provide consultation without obligation to order BabyBIG<sup>&reg;</sup>. To obtain BabyBIG<sup>&reg;</sup> for a 
patient with suspect infant botulism, the treating physician must first contact the IBTPP on-call physicians for a clinical consultation.

<br /><br />

If your patient is older than 15 months, please see <a href="https://www.cdc.gov/botulism/hcp/clinical-overview/infant-botulism.html?CDC_AAref_Val=https://www.cdc.gov/botulism/infant-botulism.html">CDC Botulism Information for Health Professionals</a> for instructions on requesting antitoxin.

<br><br>

<u>The decision to treat with BabyBIG</u><sup>&reg;</sup> <u>should be based on clinical presentation and findings and should <b>not</b> be delayed by waiting for results of laboratory confirmatory testing.</u>

Prompt treatment of infant botulism patients immediately 
ends their toxemia and enables motor nerve regeneration to begin.

<br><br>

For instructions on submission of appropriate diagnostic specimens (e.g., stool/enema or rectal wash) please click <a href="/laboratorian/laboratory.php">here</a>.

<br /><br />

Although infants with suspected infant botulism may be constipated, it is prudent to collect a stool or enema specimen without delay and <b>promptly</b> submit it to your state’s botulism diagnostic laboratory (which may be the CDC for some states.)

<br /><br />

Please note that the CDC has updated and added stringent specimen acceptance criteria for botulism diagnostic specimens. Please see their <a href="https://www.cdc.gov/botulism/botulism-specimen.html" target="_blank">specimen submission page</a> for more information.

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


<div style="width: 60%; max-width: 900px;  margin: 10 auto 10 auto;">
<h3 style="text-align: center;">Checklist for Clinicians/Hospitals Ordering BabyBIG®*</h3>

<ul>
<li style="margin-bottom: 15px;">Provide case information to IBTPP on-call clinical consultant via phone (referral process takes ~15-20 minutes). You will be asked to provide demographic and clinical information including medical history, feeding history and environmental exposures, history of present illness, review of systems, physical exam findings with particular attention to neurologic exam and cranial nerve findings, any relevant diagnostic findings.</li>

<li style="margin-bottom: 15px;">Securely fax patient’s medical records and facesheet to IBTPP at 916-636-6242. Medical records must include documentation of the patient’s current weight in kilograms. Please also include on fax cover sheet the best 24/7 phone and fax numbers for both the patient’s ward and the hospital pharmacy.</li>

<li style="margin-bottom: 15px;">Coordinate with hospital pharmacy to complete the Invoice and Purchase Agreement (IPA) (document link in upper right hand corner above) - invoice number and instructions to be provided by the IBTPP on-call clinical consultant.</li>

<li style="margin-bottom: 15px;">
Promptly obtain and send fecal specimen for diagnostic testing to the appropriate diagnostic laboratory:

<ul style="margin-bottom: 15px;">
<li style="margin-bottom: 15px; margin-top: 15px;">For California hospitals only, diagnostic specimens should be sent directly to the Infant Botulism Laboratory. Instructions may be found on the <a href="/laboratorian/submission.php">Specimen Submission page</a>.</li>

<li style="margin-bottom: 15px;">For all other states, coordinate with your <a href="https://cdn.ymaws.com/www.cste.org/resource/resmgr/poc/epioncall_update1622.pdf" target="_blank">state health department</a> on submitting specimens. Diagnostic testing will be performed either at your state’s public health laboratory or at CDC. Do not delay specimen collection and shipment to your state's botulism diagnostic laboratory. </li>
</li>
</ul>

<li style="margin-bottom: 15px;">Promptly notify hospital infection control staff and/or local public health authorities about this case, as botulism is an immediately reportable disease</li>

<div style="text-align: center; font-weight: bold;">
*Note: This checklist is for reference only. There is no requirement to fill this out.
</div>
</div>


<?php if ($_GET["printable"]!=1) { ?>
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="/ibtpp/images/file.gif" border=0>Printable Version of this Page</a>
<?php } ?>
<?php if ($_GET["printable"]==1)

	require("../scripts/template-end-printable.php");
	else require("../scripts/template-end.php"); ?>

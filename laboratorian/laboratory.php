<?php if (isset($_GET["printable"]))
	require("../scripts/template-start-printable.php");
	else require("../scripts/template-start.php"); ?>
	
   <td class="title" valign=top>
		&nbsp;Laboratory Diagnosis
   </td>

	<td class="title" align=right>
	<?php if (!isset($_GET["printable"])) { ?>
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="/images/file.gif" border=0>Printable Version of this Page</a>
	<?php } ?>
	</td>

</tr>
<tr>
	<td class="main" colspan=2>
The disease infant botulism is first suspected based on clinical features of the infant patient (12 months of age or younger). Symptoms such as poor feeding, droopy eyelids, constipation and lethargy, together with hypotonia and loss of head control, prompt physicians to consider botulinum toxin as the causative agent. Accordingly, it is necessary for laboratory analysis to be performed without delay to establish the diagnosis. Prompt laboratory diagnosis of infant botulism is helpful for patient management and rules out the possibility of fatal degenerative neuromuscular diseases.
<br /><br /> 
The laboratory diagnosis of infant botulism is a two-part process. The first component is to perform a direct toxin analysis. This requires the extraction of toxin directly from the fecal specimen and the use of specialized techniques to identify and type the toxin. The second part is to culture the feces using specialized media and techniques in order to isolate <i>Clostridium botulinum</i>.
<br /><br />

<ul>
<li><a href="collection.php">[Specimen Collection]</a></li>
<li><a href="storage.php">[Specimen Storage]</a></li>
<li><a href="submission.php">[Specimen Submission]</a></li>
</ul>

<br />
<div class="header-small red-text">Specimen submission form for California patients only:</div>

California hospital laboratories and health care providers <a style="text-decoration:underline" href="IBTPP Diagnostic Testing Submittal Form_June2017.pdf" target="_blank">click here</a> to access the Infant Botulism Diagnostic Testing Specimen Submission Form (PDF-fillable).  Please be sure to fill in every box on the form.<br />
<br>
	<?php if (!isset($_GET["printable"])) { ?>
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="/images/file.gif" border=0>Printable Version of this Page</a>
	<?php } ?>
		</td>


<?php if (isset($_GET["printable"]))
	require("../scripts/template-end-printable.php");
	else require("../scripts/template-end.php"); ?>

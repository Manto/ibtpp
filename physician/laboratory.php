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
<!--
The disease infant botulism is first suspected based on clinical features of the infant patient (12 months of age or younger).  Symptoms such as poor feeding, droopy eyelids, constipation and lethargy, together with hypotonia and loss of head control, prompt physicians to consider botulinum toxin as the causative agent. Accordingly, it is necessary for laboratory analysis to be performed without delay to establish the diagnosis. Prompt laboratory diagnosis of infant botulism is helpful for patient management and rules out the possibility of fatal degenerative neuromuscular diseases.
<br><br>
The laboratory diagnosis of infant botulism is a two-step process.  The first step is to perform a direct toxin analysis.  This requires the extraction of toxin directly from the fecal specimen and the use of specialized techniques to identify and type the toxin.  The second step is to culture the feces using specialized media and techniques in order to isolate <i>Clostridium botulinum</i>.
<br><br>
-->
The disease infant botulism is first suspected based on clinical features of the 

infant patient (12 months of age or younger). Symptoms such as poor feeding, 

droopy eyelids, constipation and lethargy, together with hypotonia and loss of 

head control, should prompt physicians to consider botulinum toxin as the 

causative agent. Accordingly, laboratory testing needs to be performed without 

delay to establish the diagnosis. Prompt laboratory diagnosis of infant botulism is 

helpful for patient management and excludes the possibility of fatal degenerative 

neuromuscular diseases.

<br /><br />

The laboratory diagnosis of infant botulism is a two-step process. The first step is

to perform a direct toxin analysis. This requires the extraction of toxin directly 

from the fecal specimen and the use of specialized techniques to identify and 

type the toxin. The second step varies between laboratories, some laboratories 

use PCR techniques to identify <i>Clostridium botulinum</i> in the feces, while others 

culture the feces using specialized media and techniques in order to isolate <i>C. 

botulinum</i>.

<br /><br />

Stool, enema or rectal wash specimens for diagnostic testing (serum not needed) 

from California in-patients and out-patients with suspected infant botulism may 

be submitted to the IBTPP laboratory only after consulting with the IBTPP 

physician-on-call. California physicians seeking such testing for their patients 

should contact the IBTPP at (510) 231-7600. For non-California physicians, 

please contact your State public health department for instructions.  All state 

health departments now have 24/7 telephone numbers.

<br /><br />

California health care providers <a href="/laboratorian/submission.php">click here</a> for current lab send out instructions.

<br /><br />

For more information on specimen collection, please visit our specimen collection page for laboratory scientists at <a href="/laboratorian/collection.php">/laboratorian/collection.php</a>.
<br><br>
	<?php if (!isset($_GET["printable"])) { ?>
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="/images/file.gif" border=0>Printable Version of this Page</a>
	<?php } ?>
		</td>


<?php if (isset($_GET["printable"]))
	require("../scripts/template-end-printable.php");
	else require("../scripts/template-end.php"); ?>

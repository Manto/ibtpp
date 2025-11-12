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

Also see our standard web pages above For Physicians.

<h3 style="color: #369;">
Clinical Scenarios
</h3>

<h4>
Patient was exposed to ByHeart infant formula and has no infant botulism clinical signs
(or only has constipation.)
</h4>
<ul>
  <li>Infant botulism is very rare even if baby drank ByHeart formula</li>
  <li>Testing, in the absence of symptoms, is not recommended.</li>
  <li>Stool testing is at the discretion of your state’s public health department.</li>
  <li>Infant botulism is not expected to develop 30 days after last formula ingestion.</li>
  <li>Recommend educating the family about clinical signs of infant botulism.</li>
</ul>

<h4>
Patient was exposed to ByHeart infant formula and has clinical signs of infant botulism
other than constipation.
</h4>
<ul>
  <li>Give special attention to:
  <ul>
    <li>signs of weakness especially in the face, eyes, mouth, and throat</li>
    <li>poor feeding especially if weakness related</li>
    <li>level of alertness</li>
    <li>apnea or respiratory failure</li>
    <li>absence of common infectious syndromes</li>
  </ul>
  </li>
  <li>Testing should not delay treatment if infant botulism is suspected.
  <ul>
    <li>Testing is at the discretion of state departments of health.</li>
  </ul>
  </li>
  <li>You may always call IBTPP for a free clinical consultation: 510-231-7600</li>
</ul>

<h4>
Patient with an underlying medical condition was exposed to ByHeart formula
</h4>
<ul>
<li>We currently do not know of any medical condition that places an infant at
greater risk for developing infant botulism following ingestion of C. botulinum
spores.</li>
</ul>

<h3 style="color: #369;">
Clinical signs commonly seen on presentation of infant botulism:
</h3>
<ul>
<li>Constipation (not specific to IB)
<li>Cranial nerve dysfunction:
  <ul>
    <li>Decreased facial expressiveness</li>
    <li>Pupillary light reaction that <u>fatigues over repeated exposure</u></li>
    <li><u>ptosis</u></li>
    <li>History of poor feeding and/or Weak suck/swallow (evaluated by gloved
digital exam)</li>
    <li>Weaker vocalizations/cry</li>
  </ul>
</li>
<li>Generalized weakness, especially head/neck control as the typical progression is
from head to toe.
  <ul>
    <li>Respiratory failure</li>
  </ul>
</li>
<li>
  Autonomic instability
  <ul>
    <li>Apnea</li>
  </ul>
</li>
<li>Usually, an absence of fever or other typical respiratory or gastrointestinal
infectious symptoms</li
<li>More serious cases can mimic sepsis (without fever or lab signs suggestive of
sepsis) due to toxin induced muscular weakness and autonomic instability.</li>
</ul>

<h3 style="color: #369;">
Pathophysiology
</h3>

<ul>
<li>Infant botulism differs from foodborne botulism.
  <ul>
    <li>There is no toxin ingestion in infant botulism (as there is with foodborne)</li>
  </ul>
</li>
<li><i>C. botulinum</i> spores are ubiquitous in different types of soils around the world.</li>
<li>Some infants are uniquely susceptible to colonic colonization from ingested <i>C.
botulinum</i> spores.
  <ul>
    <li>Likely related to infant GI microbiome (perhaps analogous to the common
colonization by <i>C. difficile</i> in neonates)</li>
    <li>Honey frequently contains <i>C. botulinum</i> spores which, in general, are
harmless when ingested by non-infants.</li>
    <li><i>C. botulinum</i> spores were recently detected in ByHeart powdered formula
ingested by an infant botulism patient.</li>
  </ul>
</li>
<li><i>C. botulinum</i> in an infant’s colon produces toxin which enters the circulation and
then enters cholinergic neurons.</li>
<li>Clinical signs are progressive as ongoing toxin production affects more neurons.</li>
<li>BabyBIG is an IVIG product that will neutralize botulinum neurotoxin A or B in
circulation. It will not neutralize or reverse the effects of toxin which has entered
neurons prior to BabyBIG administration. This explains the gradual recovery
following treatment.</li>
</ul>

</div>
  </td>

<?php require("scripts/template-end.php"); ?>

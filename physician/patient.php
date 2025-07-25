<?php if ($_GET["printable"]==1)
	require("../scripts/template-start-printable.php");
	else require("../scripts/template-start.php"); ?>
	
   <td class="title" valign=top>
	   <a style="position: absolute; top: 0;" name="top"></a>
		&nbsp;Patient Management
   </td>

	<td class="title" align=right>
	<?php if ($_GET["printable"]!=1) { ?>
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="/images/file.gif" border=0>Printable Version of this Page</a>
	<?php } ?>
	</td>

</tr>
<tr>
	<td class="main" colspan=2>
<script type="text/javascript">
var ie5= (document.getElementById && document.all);
var ns6= (document.getElementById && !document.all);

lastDIV = "content1";

function showDIV (DIV) {
  document.getElementById(lastDIV).style.visibility="hidden";
  document.getElementById(lastDIV).style.position="absolute";
  document.getElementById(DIV).style.visibility="visible";
  document.getElementById(DIV).style.position="relative";
  lastDIV = DIV;
}
</script>
<a href="patient.php#content1">Course of Infant Botulism</a> |
<a href="patient.php#content2">Airway/Respiration</a> |
<a href="patient.php#content3">Nutrition</a> |
<a href="patient.php#content4">Bowel and Bladder Management </a> |
<a href="patient.php#content5">Antibiotics</a> |
<a href="patient.php#content6">If The Patient Isn't Improving... </a> |
<a href="patient.php#content7">Observed Complications of Infant Botulism</a> |
<a href="patient.php#content8">Developmental Reminder</a> |
<a href="patient.php#content9">Infection Control Issues</a> |
<a href="patient.php#content10">Vaccine Deferrals After Infant Botulism </a> | 
<a href="patient.php#content11">The Parents </a>

<div id="content1" class="contentblock">
<a name="content1" class="anchor"></a>
<p>
<center><img src="images/figure1.jpg"></center>
<p>
<span class="emphasis1">Course of Infant Botulism</span></p>
Just as infant botulism has a characteristic presentation, so too the course of the disease has some generally predictable features. Hospitalized patients usually have acute to subacute onset of symptoms over several days, with progression of weakness (usually manifesting as feeding or breathing difficulties) that finally necessitates hospital admission. In patients not treated with BabyBIG<sup>&reg;</sup> whose weakness continues to advance, the low point is generally reached within 1-2 weeks after admission. Patients may remain at this stage for as long as 2-3 weeks before showing improvement. Once improvement begins, it continues, albeit slowly, over the subsequent weeks. Average hospital stay for non-BabyBIG<sup>&reg;</sup>-treated patients is approximately 5.7 weeks.  In contrast, patients treated with BabyBIG<sup>&reg;</sup> have an average hospital stay of approximately 2.3 weeks, and their recovery of strength, tone and movement occurs more rapidly.<br><br>
Infant botulism does not usually have a relapsing course, and regression in a patient who has been gradually improving should immediately alert the physician to suspect additional complications or inadequate nutritional or respiratory support. The patient may be discharged when the patient has shown steady recovery and is able to feed p.o. (or when the parents are comfortable with gavage feeding). Although head-lag and constipation may still be pronounced at this point, the parents may be reassured that these are expected and that over time, full recovery will occur.
<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>


<div id="content2" class="contentblock">
<a name="content2" class="anchor"></a>
<p><span class="emphasis1">Airway/Respiration</span></p>
The descending paralysis of infant botulism compromises the pharyngeal musculature that maintains the patency of the airway. For this reason, all hospitalized patients with suspected infant botulism should be placed on a cardiorespiratory monitor and carefully observed for signs of airway obstruction. In addition, the gag reflex should be assessed (if the patient has not recently eaten), as a decreased gag reflex combined with dysphagia increases the risk of aspiration. Transcutaneous oxygen (O<sub>2</sub>) monitoring is desirable, but <b>transcutaneous carbon dioxide (pCO<sub>2</sub>) monitoring may provide the single-most sensitive index of clinical deterioration early in the illness</b>.  A steadily rising pCO<sub>2</sub> signals that the patient may soon need intubation, and usually also mechanical ventilation, because of weakening respiratory tract musculature.<br><br>
Two simple positioning measures are helpful and are recommended for reducing the risk of aspiration and for improving the respiratory function of infant botulism patients: 1) a neck support (described below) and 2) a crib which does not bend the mattress to elevate the head of the bed. The crib, illustrated in <a target="_blank" href="images/figure1.jpg">Figure 1</a>, maintains the patient's body in one plane while elevating the head at a 30&deg; angle to the feet. Positioning the infant in this way facilitates good chest excursion and improves respiratory mechanics because gravity pulls the abdominal contents downward. Placing a small cloth roll behind the infant's neck (do not include the occiput or shoulders) also helps maintain the normal curvature of the neck, thus promoting airway patency by avoiding neck flexion onto the chest and by preventing pooling of secretions in the pharynx. These positioning measures are urged for all recipients of BabyBIG<sup>&reg;</sup> as part of standardizing supportive care. Their additional virtues are that they are immediately available and cost nothing.
<br><br>
A cloth harness which passes between the legs of the infant and is anchored to the mattress on either side of the patient at waist level may be used to prevent the patient from sliding downward on the bed. Alternatively, a cloth bumper placed below the buttocks may provide the same support.<br><br>

For non-intubated patients, extra care and preparedness should be taken if
placing the infant in a curved, lateral decubitus position for lumbar puncture,
as some infants have experienced respiratory compromise in such positions
and required emergent intubation.
<br /><br />

Approximately one-half of all patients with infant botulism, whether or not they are treated with BabyBIG<sup>&reg;</sup>, will require mechanical ventilatory support because of inability to protect their airway and/or respiratory insufficiency. Although some non-BabyBIG<sup>&reg;</sup>-treated infant botulism patients may require prolonged intubation that lasts several weeks, tracheostomy is rarely necessary <sup>3</sup> (less than 1% of California's non-BabyBIG<sup>&reg;</sup>-treated cases ever needed one<sup>4</sup>).

<br /><br />
<b><u>When weaning an infant with infant botulism from ventilatory support,
special consideration should be given to several issues:</b></u>

<ul>
<li>BabyBIG does not reverse the effects of botulinum neurotoxin that has
already bound at the neuromuscular junction (does NOT reverse existing
paralysis); recovery requires regeneration of nerve endings to re-innervate
affected muscles in order to regain muscle strength and tone. Therefore, it
should not be considered immediately curative and affected patients with
infant botulism are highly unlikely to meet criteria for immediate/rapid
extubation or withdrawal of ventilatory support shortly after the infant has
received BabyBIG. While infants that do not receive BabyBIG<sup>&reg;</sup> require on
average 4.4 weeks of mechanical ventilation, those that <u>are</u> treated still
require on average 1.8 weeks of mechanical ventilation <sup>5</sup>. We encourage
a careful, thoughtful weaning of ventilatory support for all infants with infant
botulism, even if treated with BabyBIG<sup>&reg;</sup>.</li>
<li>A hallmark feature of infant botulism is fatigability. Extra care should be
given to ensure that an infant's respiratory effort can be sustained as
support is weaned slowly. Consideration should be given to gradually
offering longer "sprints" for infants that have required ventilatory support in
order to assess the patient's tolerance of prolonged respiratory effort and
readiness for weaning.</li>
<li>A gag reflex should be checked prior to considering extubation as airway
protection is likely to be suboptimal if a gag reflex is not present.</li>
<li>Treatment with aminoglycoside antibiotics may potentiate the effect of
botulinum neurotoxin at the neuromuscular junction, even in infants that
have been treated with BabyBIG<sup>&reg;</sup>. Therefore, extra caution should be
exercised when weaning ventilatory support from infants who have infant
botulism and have received aminoglycoside antibiotics.</li>
<li>Broad spectrum, clostridiocidal antibiotics administered before BabyBIG<sup>&reg;</sup>
antitoxin is administered may worsen the patient’s clinical status due to an
increase in the amount of free toxin for absorption in lumen of large
intestine<sup>6</sup>.</li>
<li>Extra caution should be exercised when weaning ventilatory support in
infants with concomitant respiratory infections.</li>
<li>When considering extubation of an infant with infant botulism, every effort
should be made to ensure adequate staffing, expertise and resources
should the extubation attempt fail and the infant require reintubation.</ul>

<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>
 

<div id="content3" class="contentblock">
<a name="content3" class="anchor"></a>
<p><span class="emphasis1">Nutrition</span><br></p>
Adequate nutrition is of great importance. Although gut motility is slow in these patients, enteral feedings are generally well-tolerated and well-absorbed and should be instituted as soon as possible. (There seems to be a relative sparing of the small intestine from the paralytic effects of the botulinum toxin.) In addition, enteral feedings may have the added benefit of helping restore bowel movements. Resumption of defecation is desirable because it helps eliminate botulinum toxin and botulism organisms from the large bowel. Finally, enteral feeding obviates the need for a long-term, in-dwelling intravenous line with its attendant risk of infection. Expressed breast milk given by NG or NJ feeding tubes constitutes optimal nutrition, and breastfeeding mothers should be encouraged and supported in this effort.
<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>
 

<div id="content4" class="contentblock">
<a name="content4" class="anchor"></a>
<p><span class="emphasis1">Bowel and Bladder Management </span></p>
1. Bowel<br>

Botulinum toxin has a profound effect on the large intestine. The constipation that results from it is generally an early and persistent symptom. Enteral feeding is the best and most straightforward means of promoting gut motility. The use of cathartics is not recommended, but the use of stool softeners like docusate may be beneficial in tandem with occasional rectal stimulation or glycerin suppository. Infrequently, a small inspissated fecal plug is present in the rectal vault and needs to be checked for and removed manually before regular defecation can resume.  Any feces so removed should be immediately sent for confirmatory diagnostic testing
<br><br>
Patients with infant botulism may be at increased risk of <i>Clostridioides difficile</i> colitis<sup>1,2</sup>.  In 2004 an Iowa patient with type F infant botulism died from <i>C. difficile</i> pseudomembranous colitis with bowel perforation and septic shock.  Medical staff should be constantly vigilant for signs of possible secondary infection with <i>C. difficile</i>, such as diarrhea, change in stool color, abdominal tenseness or distention, etc., and monitor and treat the patient accordingly.  
<br><br>
2. Bladder<br>

Bladder atony may be present in infant botulism patients with severe disease (usually ventilator dependent) and increases the risk of urinary tract infection, especially in females. In patients with urinary retention, gentle manual pressure on the bladder (the Cred&eacute; method) will usually suffice to empty it. This is best accomplished as a two-person maneuver, in which one person sits the infant up and supports his/her head, while the other person uses two hands (one over the sacrum) to compress the bladder. In-dwelling catheters or frequent intermittent catheterizations are not recommended because of the risk of infection.
<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>
 

<div id="content5" class="contentblock">
<a name="content5" class="anchor"></a>
<p><span class="emphasis1">Antibiotics </span></p>
Antibiotics are not efficacious in the treatment of infant botulism. Furthermore, there is concern that in non-BabyBIG<sup>&reg;</sup>-treated patients, administration of antibiotics with clostridiocidal activity may increase the amount of free toxin in the large bowel and actually worsen the patient's clinical status. Antibiotic use in infant botulism patients is indicated only for the treatment of secondary infections. In these instances, in non-BabyBIG<sup>&reg;</sup>-treated patients, the use of a non-clostridiocidal antibiotic is preferred. If possible, aminoglycosides should be avoided because they appear to potentiate the action of botulinum toxin at the neuromuscular junction. However, once a patient has been treated with BabyBIG<sup>&reg;</sup>, any (non-aminoglycoside) antibiotic may be used to treat a secondary infection because BabyBIG<sup>&reg;</sup> will neutralize any toxemia that might result from its use.
<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>
 

<div id="content6" class="contentblock">
<a name="content6" class="anchor"></a>
<p><span class="emphasis1">If The Patient Isn't Improving... </span></p>
As discussed earlier, the pattern of recovery in infant botulism is that of gradual improvement in muscle function. This gradual recovery may be difficult to discern during daily observation. However, a patient who has made gains and then falters should prompt the physician to reverse premature weaning of respiratory and nutritional support and to search for possible complications. Infection is the most frequent complication (see Table 2), affecting in descending order of frequency the middle ears, lungs, urinary tract and intestinal tract. Bacteremia may also occur from in-dwelling venous lines. Other potential causes of clinical deterioration include anemia, hyponatremia (iatrogenic or akin to inappropriate ADH secretion), pneumothorax and inadvertent intubation of a mainstem bronchus. Medication orders should be reviewed regularly. Sedatives or other drugs that may cause CNS depression as a side effect, such as metoclopramide, are relatively contraindicated, and alternatives to their use should be sought when possible.
<br><br>
Finally, it should be asked whether or not the patient is truly deteriorating. The hallmark of infant botulism is fatigability with repetitive muscle activity, so that an infant examined at the end of the day or after sustained activity (a physical therapy session, for example) may appear to have deteriorated. In such instances, reassessing the patient after a rest period may help clarify the situation.
<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>
 

<div id="content7" class="contentblock">
<a name="content7" class="anchor"></a>
<p><span class="emphasis1">Table 2. OBSERVED COMPLICATIONS OF INFANT BOTULISM</span></p>

<ul>
<li>Acute respiratory distress syndrome </li>
<li>Anemia </li>
<li>Aspiration </li>
<li>Bacteremia </li>
<li>Blood pressure instability</li>
<li><i>C. difficile</i> colitis, including toxic megacolon </li>
<li>Fracture of the femur (nosocomial) </li>
<li>Inappropriate ADH secretion </li>
<li>Misplaced or plugged endotracheal tube </li>
<li>Otitis media </li>
<li>Pneumonia </li>
<li>Recurrent atelectasis </li>
<li>Respiratory arrest</li>
<li>Seizures secondary to hyponatremia </li>
<li>Sepsis </li>
<li>Subglottic stenosis</li>
<li>Pneumothorax, including tension pneumothorax </li>
<li>Tracheal stenosis </li>
<li>Tracheal granuloma </li>
<li>Tracheitis </li>
<li>Tracheomalacia </li>
<li>Transfusion reaction </li>
<li>Urinary tract infection </li>
</ul>
<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>
 

<div id="content8" class="contentblock">
<a name="content8" class="anchor"></a>
<p><span class="emphasis1">A Developmental Reminder </span></p>
It is important to remember that botulinum toxin is not known to affect the CNS of infant botulism patients. Sensation remains intact. Patients are able to hear and to feel normally; thus, staff and family who provide auditory, tactile and even visual stimuli remain important to normal development. Although infant botulism causes a "time-out" period in the motor development of affected patients, parents may be reassured that in uncomplicated cases, a full "catch-up" in motor milestones will occur over time. Botulinum toxin does not penetrate into the brain, and so infant botulism patients retain all the intelligence, athletic ability, musical ability, sense of humor and orneriness with which they were born.
<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>
 

<div id="content9" class="contentblock">
<a name="content9" class="anchor"></a>
<p><span class="emphasis1">Infection Control Issues </span></p>

Title 17, California Code of Regulations (CCR) §2500, §2593, §2641.5-2643.20, and §2800-2812
requires that healthcare providers report known or suspected cases of infant botulism to the
jurisdiction in which the patient resides. <i>Please report any suspect infant botulism case to your local
health jurisdiction through appropriate channels.</i>

<br /><br/>

Patients with infant botulism excrete both <i>Clostridium botulinum (C. botulinum)</i> toxin and organisms

in their stools. Accordingly, diapers from these infants should be placed in biohazard containers.

Scrupulous attention to hand washing should be observed by all hospital personnel who have

contact with the infant, as much to prevent secondary infections from other pathogens as to prevent 

transmission of <i>C. botulinum</i> to other patients. Persons with open lesions on their hands should wear 

gloves when handling soiled diapers from these patients. Excretion of organisms in feces may continue 

for as long as three months in infant botulism patients (and even longer in rare instances); hence, close 

contact between these babies and other infants (e.g., sharing crib and toys) should be avoided while 

such excretion may be continuing.

<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>

<div id="content10" class="contentblock">
<a name="content10" class="anchor"></a>
<p><span class="emphasis1">Vaccine Deferrals After Infant Botulism</span></p>

<p>
Regardless of whether or not the patient has received anti-toxin, the infant should have good to full recovery of muscle strength and tone before immunizations resume. This delay is advised to avoid any confusion surrounding what might be a vaccine-related reaction versus clinical worsening of the infant botulism disease process.
</p>
<p>
In addition, most live-virus vaccines (i.e., measles, mumps, rubella and varicella) will need to be delayed until 6 months after BabyBIG<sup>&reg;</sup> treatment because the antibodies in BabyBIG<sup>&reg;</sup> may interfere with the effectiveness of the vaccine. <a href="https://infantbotulism.org/BabyBIG%20Package%20Insert%202021%20June.pdf">Please refer to section 7 of the package insert for BabyBIG<sup>&reg;</sup>.</a>
</p>
<p>
The live-virus vaccine for rotavirus, RotaTeq<sup>&reg;</sup> and Rotatrix<sup>&reg;</sup> should also be delayed until sustained return of normal bowel function after BabyBIG<sup>&reg;</sup> treatment. Although current data suggest that administration of intravenous immunoglobulin products such as BabyBIG<sup>&reg;</sup> will not interfere with the efficacy of oral rotavirus vaccines, patients with infant botulism should receive the rotavirus vaccine later than planned because of the slowed intestinal motility that results from infant botulism. The vast majority of infant botulism patients have profoundly slowed intestinal motility after infant botulism.
</p>
<p>
Accordingly, any of the recommended doses of the rotavirus vaccine (RotaTeq<sup>&reg;</sup> or Rotarix<sup>&reg;</sup>) that were not given to the infant before treatment with BabyBIG<sup>&reg;</sup> should be delayed. Because the other live-virus vaccines (i.e., measles, mumps, rubella and varicella) are normally first given at one year of age, only those infant botulism patients who were 6 months of age or older when they were treated with BabyBIG<sup>&reg;</sup> will need delayed immunization with these vaccines.
</p>

<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>

<div id="content11" class="contentblock">
<a name="content11" class="anchor"></a>
<p><span class="emphasis1">The Parents </span></p>
Infant botulism can be a very frustrating illness for parents---difficult to understand and with daily improvement almost imperceptible. Accordingly, it is important to reassure the parents that in the absence of complications, full and complete recovery is the expected outcome. Some parents find that keeping a daily journal is helpful, so that improvement not apparent from one day to the next may become evident when looking back over a week or more. If the parents wish, the Infant Botulism Treatment and Prevention Program (IBTPP) will provide them with the names and telephone numbers of other parents whose children suffered this disease, in order to provide the parents with peer support both during and after the hospitalization.  Please ask the parents if they would like this service and promptly let the IBTPP know if they do.
<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>

<br><br><br>
<span class="emphasis2">References:</span>
<br><br>
1) <a href="../readings/c-difficile.pdf">Schechter R, Peterson B, McGee J, Idowu O, Bradley J.: Clostridium difficile colitis associated with infant botulism: near-fatal case analogous to Hirschsprung's enterocolitis. Clinical Infectious Diseases. 29:367-74, 1999</a>.  
<br>
2) <a href="../readings/clostridium-butyricum.pdf">Fenicia L, Da Dalt L, Anniballi F, Franciosa G, Zanconato S, Aureli P.:  A Case of infant botulism due to neurotoxigenic Clostridium butyricum type E associated with Clostridium difficile colitis.  Eur J Clin Microbiol Infect Dis. 21:736-738, 2002</a>.
<br>
<span style="font-family: arial; font-size: 15px;">3) Wohl, D.L., Tucker, J.A. Infant botulism: considerations for airway management. Laryngoscope. 1992
102(11): 1251-1254.</span>
<br />
<span style="font-family: arial; font-size: 15px;">4) Anderson TD, Shah UK, Schreiner MS, et al. Airway complications of infant botulism: ten-year experience with 60 cases.  Otolaryngol Head Neck Surg. 2002;126(3):234-239.</span>
<br />
5) <a href="/readings/nejm-big.pdf">Stephen S. Arnon, M.D., Robert Schechter, M.D., Susan E. Maslanka, Ph.D., Nicholas P. Jewell, Ph.D., and
Charles L. Hatheway, Ph.D. Human Botulism Immune Globulin for the Treatment of Infant Botulism N Engl J Med
2006;354:462-71.</a>
<br />
6) <a href="/readings/Barash_2018_Antimicrobial_susceptibility_of_260_C%20bot_strains_isolated%20from_CA_IB_pt.pdf">Barash JR, Castles JB, III, Arnon SS, 2018. Antimicrobial susceptibility of 260 <i>Clostridium botulinum</i> type A,
B, Ba and Bf strains and a neurotoxigenic <i>Clostridium baratii</i> type f strains isolated in California infant botulism
patients. Antimicrob Agents and Chemother 62:e01594-18.</a>
<br /><br />

	<?php if ($_GET["printable"]!=1) { ?>
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="/images/file.gif" border=0>Printable Version of this Page</a>
	<?php } ?>
		</td>


<?php if ($_GET["printable"]==1)
	require("../scripts/template-end-printable.php");
	else require("../scripts/template-end.php"); ?>

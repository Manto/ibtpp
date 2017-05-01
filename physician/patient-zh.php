<?php if ($_GET["printable"]==1)
	require("../scripts/template-start-printable.php");
	else require("../scripts/template-start.php"); ?>
	
   <td class="title" valign=top>
		&nbsp;Patient Management
   </td>

	<td class="title" align=right>
	<?php if ($_GET["printable"]!=1) { ?>
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="/images/file.gif" border=0>打印页面</a>
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

<a name="top"></a>
<a href="#content1">婴儿肉毒症期间</a> |
<a href="#content2">气管与呼吸</a> |
<a href="#content3">营养</a> |
<a href="#content4">肠道和膀胱管理</a> |
<a href="#content5">抗生素</a> |
<a href="#content6">若病人的病情没有好转...</a> |
<a href="#content7">婴儿肉毒症的并发症</a> |
<a href="#content8">婴儿发展提醒</a> |
<a href="#content9">感染控制措施</a> |
<a href="#content10">婴儿肉毒症后的疫苗延期</a> | 
<a href="#content11">患者家属</a>

<div id="content1" class="contentblock">
<a name="content1"></a>
<p>
<center><img src="images/figure1.jpg"></center>
<p>
<span class="emphasis1">婴儿肉毒症期间</span></p>
就如婴儿肉毒症患者都有一些相同的典型症状，染病期间的症状改变也是有规律的。住院病人通常在数天之间随着病情加深，症状会变得更加明显并且病人会越来越虚弱（尤其表现为吸允吞咽困难和呼吸困难）。没有接受BabyBIG<sup>&reg;</sup> 药物治疗的患者将会表现的更加虚弱，且当住院后1-2周病情最恶劣的时候，患者可能需要2-3周以后才会开始好转。病情开始好转后，则会需要数周的时间缓慢恢复。没有使用BabyBIG<sup>&reg;</sup> 的患者住院平均时长为5.7周，而使用BabyBIG<sup>&reg;</sup> 的患者住院平均时长为2.3周，且整体的力量、肢体动作等都会恢复的更迅速。
<br /><br />
婴儿肉毒症极少有复发的情况，但是若复发，需要立即提醒医生提供额外营养和呼吸帮助，并检查有没有出现并发症。当患者基本康复并且已经可以通过嘴巴正常喂食（或当家长允许灌胃喂养）时，病人可以选择出院。此阶段，虽然婴儿可能还无法完全控制头部且可能还有便秘，家长可以放心这些都属于正常状况且婴儿不久后就能完全康复。
<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>


<div id="content2" class="contentblock">
<a name="content2"></a>
<p><span class="emphasis1">气管与呼吸
</span></p>
婴儿肉毒症会使保持气道通畅的咽部肌肉麻痹。因此，所有怀疑感染婴儿肉毒症的病人应做心肺功能监测来仔细观察是否有气道阻塞的迹象。此外，若病人没有进食，应做咽反射评估，因为同时出现咽反射低下和吞咽困难会增加误吸的风险。最后，经皮二氧化碳（pCO<sub>2</sub>）也必须监测，因为这是患病初期可以最有效判断病情是否恶化的指标。稳步上升的二氧化碳分压说明病人的呼吸道肌肉弱化，可能很快就需要插管和机械通气。经皮氧（O<sub>2</sub>）监测同样也建议做。
<br /><br />
以下两种姿势调整有助于降低患者误吸的风险并改善患者的呼吸状况：1) 脖子支撑（详见下文）2) 没有通过弯曲床垫来枕高婴儿头部的婴儿床。如<a target="_blank" href="images/figure1.jpg">图例一</a>所示，婴儿所躺的床面应与地板成30°角。这可以借助重力帮助婴儿的更顺畅的呼吸。在婴儿的脖子处（不包括后头部或肩部）放置一个小的布卷在也有助于保持颈部正常弯曲，避免颈部屈曲到胸部并防止分泌物聚集在咽部，从而促进气管通畅。这些措施是规范的BabyBIG<sup>&reg;</sup> 治疗的一部分，并且没有成本可以立即执行。

<br><br>
用布束从婴儿的腿之间穿过，固定在与病人的腰部水平的床垫上，防止病人在床上滑动。在臀部下面放置一个坐垫作为阻碍物也有相同的作用。
<br><br>
大约一半的婴儿肉毒症患者，不管是否接受BabyBIG<sup>&reg;</sup> 治疗，都因为无法保护气管或呼吸功能不全需要机械通气来帮助呼吸。尽管一些没有使用BabyBIG<sup>&reg;</sup> 治疗的婴儿肉毒症患者可能连续数周都要用气管插管，但是极少数患者需要接受气管改造（加利福尼亚州超过700例没有使用BabyBIG® 的病例中，只有1%的患者需要）。
<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>
 

<div id="content3" class="contentblock">
<a name="content3"></a>
<p><span class="emphasis1">营养</span><br></p>
充足的营养是十分重要的。虽然婴儿肉毒症患者肠道蠕动缓慢，应尽早提供肠内喂养这种耐受性良好、吸收良好的替代法。（似乎小肠受肉毒杆菌毒素的麻痹效果影响相对较小。）此外，肠内喂养有助于肠道蠕动的恢复。排便恢复有助于消除大肠内的肉毒杆菌毒素和肉毒杆菌细菌生物。最后，肠内喂养可以避免因为长期静脉注射感染的风险。通过鼻胃或空肠营养管输送挤出的母乳含有最丰富的营养，所以鼓励母乳喂养的母亲对此的支持。
<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>
 

<div id="content4" class="contentblock">
<a name="content4"></a>
<p><span class="emphasis1">肠道和膀胱管理</span></p>
1. 肠道<br>

肉毒杆菌毒素对大肠的影响十分巨大。疾病初期就会出现的典型症状便秘就是因此造成的。肠道喂养是改善肠道蠕动的最佳也是最直接的办法。泻药的使用不被建议，但是偶尔结合使用直肠刺激或甘油栓以及多库酯这样的大便软化剂可能有些许帮助。偶尔可能会有小的浓缩粪堵塞在直肠的拱顶，需要医生检查和手动去除以恢复排便。婴儿的所有排泄物都应立即送去做验证性诊断测试。

<br><br>
婴儿肉毒症患者更有可能感染艰难梭菌伪膜性结肠炎<sup>1,2</sup>。2004年美国爱荷华州的一名感染F型婴儿肉毒症的患者因为又感染了艰难梭菌伪膜性结肠炎导致肠穿孔和感染性休克，最后不幸病逝。医生与护士应对艰难梭菌伪膜性结肠炎的二次感染保持时刻警惕，并针对症状进行检测与治疗。其中的一些症状有：腹泻，大便颜色改变，腹部紧绷或膨胀等。

<br><br>
2. 膀胱<br>

严重的婴儿肉毒症患者（多数是使用呼吸机的患者）可能出现膀胱收缩乏力的症状并且会有更大的风险出现尿路感染（尤其是女性患者）。尿潴留患者，通常可是轻轻按压膀胱就可以将其排空。这最好由两人同时完成：其中一人扶住婴儿并帮助支撑他的头部，另一人用双手（一只手扶住骶骨）按压膀胱。因为感染的风险，不推荐使用导尿管或经常间歇性插管介入。

<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>
 

<div id="content5" class="contentblock">
<a name="content5"></a>
<p><span class="emphasis1">抗生素</span></p>
抗生素对婴儿肉毒症的治疗没有效果。此外，值得关注的是，没有使用BabyBIG<sup>&reg;</sup> 治疗的患者中，有抗梭菌类抗生素反而可能会增加大肠中的游离毒素量，导致病情恶化。抗生素只用于婴儿肉毒症患者继发感染的治疗。在这些情况下，对于没有使用BabyBIG<sup>&reg;</sup> 治疗的患者，建议使用不含有抗梭菌的抗生素，如甲氧苄啶或磺胺甲恶唑（如复方新诺明）。如果可能，应避免使用氨基糖苷类，因为它会增强A型肉毒杆菌毒素与神经肌肉连接处的结合。然而，由于BabyBIG® 能够中和任何抗生素造成的有害物质，使用BabyBIG<sup>&reg;</sup> 治疗的患者则可以随意使用任何（非氨基糖苷类）抗生素来治疗继发感染。

<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>
 

<div id="content6" class="contentblock">
<a name="content6"></a>
<p><span class="emphasis1">若病人的病情没有好转... </span></p>
之前提到过，肌肉功能的逐渐恢复是婴儿肉毒症患者正在康复的标志。由于这个过程较为缓慢短时间内很难看出患者病情转好。然而，若病人开始有所好转后却又有第二次恶化的趋势，应促使医生为病人提供呼吸及营养支持并且检查可能的并发症。并发症中最经常出现的是感染（见表格2）：从最常见的中耳，肺，尿路到最不常见的肠道。静脉输血管道也可能造成菌血症。临床恶化的其他原因包括贫血、低钠血症（医源性或源于抗利尿激素分泌失调），气胸和主支气管插管意外。定期复查用药医嘱。请尽量不要使用可能引起中枢神经系统抑制的镇静药或其他药物（如胃复安），并在允许的情况下使用其他替代品。

<br><br>
最后，病人是否真的病情恶化是最重要的。婴儿肉毒症的特点是无法做出重复的肌肉活动，所以一个婴儿在一天的检查结束后或持续的活动后（例如物理治疗）可能看上去像病情出现恶化。在这种情况下，给病人提供一段休息时间后再检查有助于确认情况。

<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>
 

<div id="content7" class="contentblock">
<a name="content7"></a>
<p><span class="emphasis1">表格2：婴儿肉毒症的并发症
</span></p>

<ul>
<li>急性呼吸窘迫综合征</li>
<li>贫血症</li>
<li>肺吸入</li>
<li>菌血症</li>
<li>艰难梭菌结肠炎，包括中毒性巨结肠</li>
<li>股骨骨折（医院内）</li>
<li>抗利尿激素分泌失调</li>
<li>气管内管错位或堵塞</li>
<li>中耳炎</li>
<li>肺炎</li>
<li>反复性肺不张</li>
<li>继发性低钠血症</li>
<li>败血症</li>
<li>气胸，包括张力性气胸</li>
<li>气管狭窄</li>
<li>气管肉芽肿</li>
<li>气管炎</li>
<li>气管软化</li>
<li>输血反应</li>
<li>尿路感染</li>
</ul>
<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>
 

<div id="content8" class="contentblock">
<a name="content8"></a>
<p><span class="emphasis1">婴儿发展提醒</span></p>
肉毒杆菌毒素是不会影响婴儿肉毒症患者的中枢神经系统。患者的感官仍然完整，听觉和触觉等都是完好的。因此，工作人员和家庭成员的陪伴来提供听觉，触觉，甚至视觉的刺激对婴儿的发展仍然十分重要。尽管婴儿肉毒症会导致病人的知觉动作发展“暂停”，家长可以放心，在无并发症的情况下，婴儿康复后会随着时间的推移，彻底追赶上健康婴儿的水准。肉毒杆菌毒素是不会影响到大脑的，所以婴儿肉毒症患者的智力、运动能力、音乐能力、幽默感和脾性等都不会受到影响。

<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>
 

<div id="content9" class="contentblock">
<a name="content9"></a>
<p><span class="emphasis1">感染控制措施</span></p>

婴儿肉毒症患者的大便中有肉毒杆菌毒素和肉毒杆菌生物。因此，患病婴儿的尿布应放在隔离的容器中。所有与婴儿有接触的医护人员都应勤洗手，以此防止其他病原菌造成的继发感染和肉毒杆菌的传播。手上有划伤之类的开口的人与处理患者的脏尿布时应佩戴手套。生物混在大便中被排出的状况可能持续长达三个月（罕见的情况下，甚至更长）；因此，在这段时间内应尽量避免患者与其他的婴儿的接触（如共享婴儿床和玩具）。

<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>

<div id="content10" class="contentblock">
<a name="content10"></a>
<p><span class="emphasis1">婴儿肉毒症后的疫苗延期</span></p>

<p>
无论患者治疗期间有没有接受抗毒素，婴儿应在肌肉强度和张力完全恢复后再接受疫苗。延迟的目的是避免将疫苗造成的反应与婴儿肉毒症的临床恶化症状产生混淆。

</p>
<p>
此外，大多数的活病毒疫苗（麻疹、腮腺炎、风疹和水痘等）需要在BabyBIG<sup>&reg;</sup> 治疗完成后再等待5个月才能注射，因为BabyBIG<sup>&reg;</sup> 中的抗体会影响疫苗的有效性。

</p>
<p>
轮转病毒的活性病毒疫苗（RotaTeq<sup>&reg;</sup> 和Rotatrix<sup>&reg;</sup>）需推迟到BabyBIG® 治疗后婴儿的肠道功能完全恢复之后。尽管现有数据并未证明BabyBIG<sup>&reg;</sup> 会影响口服轮转病毒疫苗的功效，但是因为婴儿肉毒症会造成一段时间肠道蠕动过缓，得过婴儿肉毒症的患者请不要立刻接受轮转病毒的疫苗。

</p>
<p>
同理，任何在用BabyBIG<sup>&reg;</sup> 治疗之前尚未给婴儿使用的轮转病毒疫苗（RotaTeq<sup>&reg;</sup>  和Rotatrix<sup>&reg;</sup>）需延迟给药。其他活性病毒疫苗（如麻疹、腮腺炎、风疹和水痘等）通常都是在一岁时首次注射，所以只有年龄在七个月或以上的婴儿肉毒症患者在接受BabyBIG<sup>&reg;</sup> 治疗时才需要延迟接种此类疫苗。

</p>

<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>

<div id="content11" class="contentblock">
<a name="content11"></a>
<p><span class="emphasis1">患者家属</span></p>
婴儿肉毒症的患者父母通常会非常焦虑，因为疾病的很多方面都难以理解并且孩子日常的改善几乎察觉不到。因此，很重要的一点是提醒父母，孩子在没有并发症的情况下，是可以保证完全康复的。有些家长认为将病情记入一个日记是很有帮助的，因为当对比一个星期前后孩子的症状，病情的改善会变得明显很多。如果父母希望，不管是孩子住院期间或康复之后，婴儿肉毒症防治中心（IBTPP）可以提供其他康复的患病婴儿父母的名字与联系方式，以便互相交流提供鼓励与安慰。请向父母询问是否希望得到这项服务，并及时联系婴儿肉毒症防治中心。

<p><a href="#top"><img src="/images/backtotop.gif" border="0" align="right" /></a></p>
</div>

<br><br><br>
<span class="emphasis2">参考:</span>
<br><br>
1) <a href="../readings/c-difficile.pdf">Schechter R, Peterson B, McGee J, Idowu O, Bradley J.: Clostridium difficile colitis associated with infant botulism: near-fatal case analogous to Hirschsprung’s enterocolitis. Clinical Infectious Diseases. 29:367-74, 1999</a>.  
<br>
2) <a href="../readings/clostridium-butyricum.pdf">Fenicia L, Da Dalt L, Anniballi F, Franciosa G, Zanconato S, Aureli P.:  A Case of infant botulism due to neurotoxigenic Clostridium butyricum type E associated with Clostridium difficile colitis.  Eur J Clin Microbiol Infect Dis. 21:736-738, 2002</a>.
<br><br>


	<?php if ($_GET["printable"]!=1) { ?>
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="/images/file.gif" border=0>打印页面</a>
	<?php } ?>
		</td>


<?php if ($_GET["printable"]==1)
	require("../scripts/template-end-printable.php");
	else require("../scripts/template-end.php"); ?>

<?php if ($_GET["printable"]==1)
	require("../scripts/template-start-printable.php");
	else require("../scripts/template-start.php"); ?>
	
  <td class="title" valign=top>
		&nbsp;如何获得BabyBIG<sup>&reg;</sup>
   </td>
	<td class="title" align=right>

	<?php if ($_GET["printable"]!=1) { ?>
	<a style="text-decoration: underline" target="_blank" href="IPA-Spr2016.pdf"><img src="/images/file.gif" border=0>发票和购买协议 (IPA) PDF模式</a> <span style="font-size: 16px;">(更新于2016年4月)</span><br>
<!--	<a style="text-decoration: underline" target="_blank" href="checklist.pdf"><img src="/images/file.gif" border=0>Checklist in PDF File</a><br>	-->
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="/images/file.gif" border=0>打印页面</a><br>
	</td>
	<?php } ?>
</tr>
<tr>
	<td class="main" colspan=2>

当患者疑似感染婴儿肉毒症，病人的主治医生应立即通过电话510-231-7600联系婴儿肉毒症防治中心（IBTPP）的值班医生（24小时在线）。获得药物BabyBIG<sup>&reg;</sup> 前，主治医生必须与婴儿肉毒症防治中心的医生联系。

<br><br>

决定使用药物BabyBIG<sup>&reg;</sup> 治疗应由病人的症状决定。请不要等待实验室结果确认后再申请BabyBIG® 。尽早的治疗可以立即制止毒血症，并促进运动神经再生。

<br><br>

有关标准的诊断标本（如大便/灌肠或直肠洗标本）的应用指南请点击<a href="/laboratorian/laboratory.php">这里</a>。

<br><br>
若需要进一步了解婴儿肉毒症，请点击<a href="/readings/medical.php">这里</a>。
<br><br>

<?php if ($_GET["printable"]!=1) { ?>
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="/ibtpp/images/file.gif" border=0>打印页面</a>
<!--	<a style="text-decoration: underline" target="_blank" href="checklist.pdf"><img src="/images/file.gif" border=0>Checklist in PDF File</a> <b style="color: #336699;">(REFERENCE ONLY)</b>-->
<!--	<a style="text-decoration: underline" target="_blank" href="IPA.pdf"><img src="/images/file.gif" border=0>Invoice and Purchase Agreement (IPA) in PDF File</a>  <span style="font-size: 16px;">(Updated September 2007)</span>-->
<?php } ?>
<?php if ($_GET["printable"]==1)

	require("../scripts/template-end-printable.php");
	else require("../scripts/template-end.php"); ?>

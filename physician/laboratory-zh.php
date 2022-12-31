<?php if ($_GET["printable"]==1)
	require("../scripts/template-start-printable.php");
	else require("../scripts/template-start.php"); ?>
	
   <td class="title" valign=top>
		&nbsp;实验室诊断
   </td>

	<td class="title" align=right>
	<?php if ($_GET["printable"]!=1) { ?>
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="/images/file.gif" border=0>打印页面</a>
	<?php } ?>
	</td>

</tr>
<tr>
	<td class="main" colspan=2>

感染婴儿肉毒症的根据是婴儿患者（12个月或以下）的临床特征。出现如拒食、眼睑下垂、便秘、嗜睡、肌张力低下、丧失头部控制等症状，医生应考虑肉毒杆菌毒素是否为病原。同时，需及时进行实验室诊断。尽早的做实验室诊断有助于婴儿肉毒症的病人管理并且可以防止致命的退行性神经肌肉疾病。

<br /><br />

婴儿肉毒症的实验室诊断分为两步。第一步是直接毒素分析。这需要从患者的大便样本中直接提取毒素，并使用专门的技术来识别毒素。第二个步骤取决于实验室：一些实验室使用PCR技术，以确定大便中的肉毒芽孢状梭菌，而其他则使用特殊介质和技术培植大便，以分离肉毒芽孢状梭菌。

<br /><br />

所有加利福尼亚州的住院或门诊部中疑似感染婴儿肉毒症的病人，请在咨询婴儿肉毒症防治中心的在线医生后再将大便、灌肠或直肠冲洗的诊断测试标本（不需要血清）提交给婴儿肉毒症防治中心的实验室。加州医生可以拨打510-231-7600联系婴儿肉毒症防治中心。对于美国其他州的医生，请联系您的州公共卫生部门。所有州卫生部门现在都24小时接听电话。 

<br /><br />

加利福尼亚的卫生保健提供者，点击<a href="/laboratorian/submission.php">这里</a>这里下载打印实验室寄送操作指南，并将其与大便样本一同运送至医院的实验室。

<br /><br />

有关标本采集的详细信息，请参考我们的网页中给实验室科学家的标本采集页面: <a href="/laboratorian/collection.php">/laboratorian/collection.php</a>.
<br><br>
	<?php if ($_GET["printable"]!=1) { ?>
	<a style="text-decoration: underline" href="#" onClick='window.open("<?php echo $_SERVER['PHP_SELF']."?printable=1";?>" ,"IBTPP","toolbar=yes, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=800, height=600")'><img src="/images/file.gif" border=0>打印页面</a>
	<?php } ?>
		</td>


<?php if ($_GET["printable"]==1)
	require("../scripts/template-end-printable.php");
	else require("../scripts/template-end.php"); ?>

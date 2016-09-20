<?php

$start = <<<ZZZ
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel=stylesheet type="text/css" href="/ibtpp/scripts/common.css" title="common">
	<title>Welcome to the Infant Botulism Treatment and Prevention Program</title>
</head>

<body>

<table cellpadding=0 cellspacing=0 border=0 style="width: 780px;">
<tr>
   <td style="background-image: url('/ibtpp/images/template-top.gif'); height: 79px; width: 780px;"></td>
</tr>
<tr><td style="height: 22px;">
</td></tr>

</table>

<table cellpadding=0 cellspacing=0 border=0 style="width: 780px;">
<tr>
ZZZ;



$end = <<<EOT
	</tr>

</table>

<table cellpadding=0 cellspacing=0 border=0 style="width: 780px;">
<tr>
<td style="font-family: tahoms; font-size: 12px; color: #FFFFFF; text-align: center; background: #5278B6; height: 34px;">For non-urgent questions and comments, please email <a href="mailto:ibtpp@infantbotulism.org">ibtpp@infantbotulism.org</a></td>
</tr>
</table>

<script type="text/javascript" src="/ibtpp/scripts/menu.js"></script>
<script type="text/javascript" src="/ibtpp/scripts/menu_items.js"></script>
<script type="text/javascript" src="/ibtpp/scripts/menu_tpl2.js?a="></script>
<script type="text/javascript" >
	<!--//
	// each menu gets two parameters (see demo files)
	// 1. items structure
	// 2. geometry structure
	new menu (MENU_ITEMS, MENU_POS);
	// also take a look at stylesheets loaded in header in order to set styles
	//-->
</script>

</body>
</html>
EOT;

function displayStart() {
	echo $end;
}

function displayEnd() [

}

?>

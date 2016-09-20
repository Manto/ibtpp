//##############################################################################
//# post.js                                                                    #
//##############################################################################
//# YaBB: Yet another Bulletin Board                                           #
//# Open-Source Community Software for Webmasters                              #
//# Version:        YaBB 2.2.3                                                 #
//# Packaged:       July 12, 2008                                              #
//# Distributed by: http://www.yabbforum.com                                   #
//# ===========================================================================#
//# Copyright (c) 2000-2008 YaBB (www.yabbforum.com) - All Rights Reserved.    #
//# Software by:  The YaBB Development Team                                    #
//#               with assistance from the YaBB community.                     #
//# Sponsored by: Xnull Internet Media, Inc. - http://www.ximinc.com           #
//#               Your source for web hosting, web design, and domains.        #
//##############################################################################

//YaBB 2.2.3 $Revision: 1.4.2.3 $

function checkMailaddr(theMailField) {
var str=theMailField
var re=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
	if (re.test(str)) return true 
	else return false
}

function selectNewattach() {
	document.getElementById("w_file").options[1].selected = true;
}

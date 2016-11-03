




/*
     FILE ARCHIVED ON 4:38:59 Apr 3, 2016 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 17:04:12 Sep 19, 2016.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
  --- menu items --- 
  note that this structure has changed its format since previous version.
  additional third parameter is added for item scope settings.
  Now this structure is compatible with Tigra Menu GOLD.
  Format description can be found in product documentation.
*/

var SITE_ROOT = 'http://www.infantbotulism.org/';
var MENU_ITEMS = [
	['General Info', null, null,
		['What is BabyBIG<sup>&reg;</sup>?',SITE_ROOT + 'general/babybig.php'],
		['FAQs',SITE_ROOT + 'general/faq.php'],
	],
	['For Physicians', null, null,
		['How to obtain BabyBIG<sup>&reg;</sup>',SITE_ROOT + 'physician/obtain.php'],
		['Clinical Diagnosis',SITE_ROOT + 'physician/clinical.php'],
		['Patient Management',SITE_ROOT + 'physician/patient.php'],
		['Laboratory Diagnosis',SITE_ROOT + 'physician/laboratory.php'],
		['FAQs',SITE_ROOT + 'general/faq.php'],
		['Medical Literature',SITE_ROOT + 'readings/medical.php'],
	],
	['For Pharmacists',null, null,
		['Instructions for use of BabyBIG<sup>&reg;</sup>',SITE_ROOT + 'pharmacist/instruction.php'],
		['Dosage and Administration',SITE_ROOT + 'pharmacist/dosage.php'],
		['FAQs',SITE_ROOT + 'general/faq.php'],
	],
	['Lab Testing Info',null, null,
		['Microbiology of <i>C. botulinum</i>',SITE_ROOT + 'laboratorian/microbiology.php'],
		['Laboratory Diagnosis',SITE_ROOT + 'laboratorian/laboratory.php'],
		['Specimen Collection',SITE_ROOT + 'laboratorian/collection.php'],
		['Specimen Storage',SITE_ROOT + 'laboratorian/storage.php'],
		['Specimen Submission',SITE_ROOT + 'laboratorian/submission.php'],
		['Lab Scientist FAQs',SITE_ROOT + 'laboratorian/faq.php'],
		['CLIA Certificate',SITE_ROOT + 'CLIA_certificate.pdf'],
	],
	['For Parents',null, null,
		['Prevention',SITE_ROOT + 'parent/prevention.php'],
		['When to Avoid Honey',SITE_ROOT + 'parent/honey.php'],
		['Parent Support Group',SITE_ROOT + 'general/parent.php'],
		['FAQs',SITE_ROOT + 'general/faq.php'],
	],
	['In Depth Information',null, null,
		['Medical Literature',SITE_ROOT + 'readings/medical.php'],
		['General FAQs',SITE_ROOT + 'general/faq.php'],
		['Lab Scientist FAQs',SITE_ROOT + 'laboratorian/faq.php'],
	],
	['En Español',null, null,
		['¿Qué es BabyBIG®?',SITE_ROOT + 'general/babybig-espanol.php'],
		['Prevención',SITE_ROOT + 'parent/prevention-espanol.php'],
		['Cuándo Evitar la Miel',SITE_ROOT + 'parent/honey-espanol.php'],
		['Diagnosis de laboratorio',SITE_ROOT + 'physician/laboratory-espanol.php'],
		['Preguntas Frecuentes',SITE_ROOT + 'general/faq-espanol.php'],
	],
	['International Inquiries',SITE_ROOT + 'contact/international.php', null],
	['Contact Us',SITE_ROOT + 'contact/index.php', null],
];

function getUrlVars() {
  var vars = {};
  var parts = top.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
    vars[key] = value;
  });
  return vars;
}

if (getUrlVars().hasOwnProperty('cn')) {
  var new_menu = ['中文', null, null,
    ['BabyBIG®是什么？', SITE_ROOT + 'general/babybig-zh.php'],
    ['医生信息-如何获得BabyBIG®', SITE_ROOT + 'physician/obtain-zh.php'],
    ['医生信息-临床诊断', SITE_ROOT + 'physician/clinical-zh.php'],
    ['医生信息-病人管理', SITE_ROOT + 'physician/patient-zh.php'],
    ['医生信息-实验室诊断', SITE_ROOT + 'physician/laboratory-zh.php'],
    ['肉毒梭状芽孢杆菌的微生物学', SITE_ROOT + 'laboratorian/microbiology-zh.php'],
    ['药师信息- BabyBIG® 使用指南', SITE_ROOT + 'pharmacist/instruction-zh.php'],
    ['家长信息-预防措施', SITE_ROOT + 'parent/prevention-zh.php'],
    ['家长信息-何时避免食用蜂蜜 ', SITE_ROOT + 'parent/honey-zh.php'],
    ['家长信息-家长交流群', SITE_ROOT + 'general/parent-zh.php'],
    ['国际求助', SITE_ROOT + 'contact/international-zh.php'],
    ['常见问题解答', SITE_ROOT + 'general/faq-zh.php'],
    ['联系我们', SITE_ROOT + 'contact/index-zh.php']
  ];
  MENU_ITEMS.splice(6, 0, new_menu);
}

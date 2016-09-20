<?php require("includes/header.php"); ?>
<?php
$db = mysql_connect("localhost", "infantbo", "big506");
mysql_select_db("ibrcc_abstract");

if(isset($_REQUEST["commit"]) && $_REQUEST["commit"] == "1") {
?>
<div class="main">
	<div class="header">Instructions for Abstract Submission</div>
	

<?php
	foreach($_REQUEST as $key=>$val) {
		$_REQUEST[$key] = addslashes($val);
	}
	$sql = <<<EOT
INSERT INTO abstracts (title, author, affiliation, category, abstract, email, presentation, c_Stamp) 
VALUES (
'{$_REQUEST["title"]}', '{$_REQUEST["authors"]}', '{$_REQUEST["affiliation"]}', '{$_REQUEST["category"]}', '{$_REQUEST["abstract"]}', '{$_REQUEST["email"]}',
'{$_REQUEST["presentation"]}', NOW()
);
EOT;
	$result = mysql_query($sql);
	if(!$result) {
		echo $sql . "<br />".mysql_error();
	}
	else
		echo "Your abstract has been submitted successfully.  Thank you.";
?>

</div>

<?php
}
else {
?>

<script src="jsincludes/prototype.js" type="text/javascript"></script>
<script src="jsincludes/scriptaculous.js" type="text/javascript"></script>
<script type="text/javascript">
function _get(v) { return(document.getElementById(v)); }
function _getS(v) { return(_get(v).style); }
function agent(v) { return(Math.max(navigator.userAgent.toLowerCase().indexOf(v),0)); }
function isset(v) { return((typeof(v)=='undefined' || v.length==0)?false:true); }
function XYwin(v) { var z=agent('msie')?Array(document.body.clientHeight,document.body.clientWidth):Array(window.innerHeight,window.innerWidth); return(isset(v)?z[v]:z); }

function sexyBOX(v,b) { _getS('sexyBG').height=XYwin(0)+'px'; _getS('sexyBG').display='block'; _get('sexyBOX').innerHTML=v; _getS('sexyBOX').left=Math.round((XYwin(1)-b)/2)+'px'; _getS('sexyBOX').width=b+'px'; _getS('sexyBOX').display='block'; }

function addName() {
	if(_get('a_last').value == "") {
		alert("You must enter the last name of the author.");
		return;
	}
	if(_get('a_first').value == "") {
		alert("You must enter the first name of the author.");
		return;
	}

	newname = _get('a_first').value.substring(0,1).toUpperCase()+' '+_get('a_last').value;
	if(_get('a_pres').checked) {
		newname = "*"+newname;
	}

	authornames.push(newname);

	_getS('sexyBG').display='none';
	_getS('sexyBOX').display='none';
	renderName();
	$('removeall').style.display = "";
}

function renderName() {
	clearName();
	for(i=0; i<authornames.length; i++) {
		namespan = document.createElement("li");
		namespan.id = "list_list"+(i+1);
		namespan.style.backgroundColor = "#fff";
		namespan.style.weight= "bold";
		namespan.innerHTML = authornames[i];
		namespan.title = "Click and drag the author names to reorder them.";
		if (i != authornames.length-1) {
			namespan.innerHTML += ", ";
		}
		_get('list').appendChild(namespan);
	}
	Sortable.create('list', {constraint: "horizontal", onUpdate: function(){ reorderUpdate() }});
}

function reorderUpdate() {
	var upd = Sortable.serialize('list');
	upd = upd.split("&");
	for(i=0; i<upd.length; i++) {
		upd[i] = (upd[i].split("=")[1].substr(4))-1;
	}
	var newauthornames = Array();
	for(i=0; i<upd.length; i++) {
		newauthornames.push( authornames[upd[i]] );
	}
	authornames = newauthornames;
	renderName();
}

function clearName() {
	_get('list').innerHTML = "";
	return;
	for(i=0; i< authornames.length; i++) {
		if(document.getElementById("list_list"+i) != null) {
			_get('list').removeChild(_get('list_list'+i));
		}
	}
}
var authornames = Array();

function submitForm() {
	document.getElementById("authors").value = authornames.join("");

	var required = [{name:"title",desc:"Title"},{name:"authors", desc:"Authors"},{name:"affiliation", desc:"Affiliation"},{name:"category", desc:"Category"},
									{name:"abstract", desc:"Abstract"},{name:"email",desc:"Email"},{name:"presentation",desc:"Preferred Presentation"}];
	
	err_msg = "";
	
	for(i=0; i<required.length; i++) {
		if(document.getElementById(required[i]["name"]).value == "") {
			err_msg += "* " + required[i]["desc"] + " must be provided.<br />";
		}
	}

	if(err_msg != "") {
		document.getElementById("error").innerHTML = "The following error occurred in your submission:<br />"+err_msg;
		window.scrollTo(0,0);
		return;
	}

	document.mainform.submit();
}

</script>

<div class="main">
	<div class="header">Instructions for Abstract Submission</div>
	<ul>
<li>Please complete the form below to submit an abstract for the IBRCC 2007 Meeting.</li>
<li>Enter the title, each author's first and last name.  Please check the box next to the name of the presenting author and enter the email address of the presenting author.</li>
<li>Next, from the drop-down menu please choose the category that best describes the content of your abstract.</li>
<li>Then, type or paste your abstract (limited to 3000 characters) into the abstract section.</li>
<li>Finally, choose from the drop-down menu whether it will be a platform or poster presentation.</li>
<li>Please contact us if you have any questions regarding abstract submission.</li>
</ul>

<div id="sexyBOX" style="padding: 10px 5px 10px 5px;"></div>
<div id="boxContent" style="display: none; padding: 5px;">
	<table cellpadding="0" cellspacing="0" border="0" style="width: 100%">
	<tr><td style="text-align: right; padding: 2px 5px 2px 5px;"><label>First Name:</label></td>
	<td><input name="a_first" id="a_first" size="25" /></td></tr>
	<tr><td style="text-align: right; padding: 2px 5px 2px 5px;"><label>Last Name:</label></td>
	<td><input name="a_last" id="a_last" size="25" /></td></tr>
	<tr><td colspan="2"><label>Is Author Presenting?</label><input type="checkbox" name="a_pres" id="a_pres" /></td></tr>
	<tr><td colspan="2"><input type="button" value="Add Author" onclick="addName();return false;"/>&nbsp;<input type="button" value="Cancel" onclick="_getS('sexyBG').display='none';_getS('sexyBOX').display='none';return false;"/></td></tr>
	</table>
</div>

	<div id="error" style="color: #ff0000; font-weight: bold;"></div>

<form method="POST" name="mainform">
<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td class="formtitle"><label>Title</label></td>
		<td><input name="title" id="title" size="80" /></td>
	</tr>
	<tr>
		<td class="formtitle"><label>Authors</label></td>
		<td>
			<ul id="list"></ul>
			&nbsp;&nbsp;<a href="#" onclick="sexyBOX(_get('boxContent').innerHTML,'400'); return false;" title="Click here to add an author">Add Author</a>
			&nbsp;&nbsp;<a href="#" id="removeall" style="display: none;" onclick="authornames = Array(); renderName(); this.style.display='none'; return false;" title="Click here to delete all aurhots">Remove All</a>
			<input type="hidden"name="authors" id="authors" size="80" />
		</td>
	</tr>
	<tr>
		<td class="formtitle"><label>Presenter's Affiliation</label></td>
		<td><input name="affiliation" id="affiliation" size="80" /></td>
	</tr>
	<tr>
		<td class="formtitle"><label>Category</label></td>
		<td><select name="category" id="category">
			<option value="">-Select One</option>
			<option value="Basic Science: Structure and Function">Basic Science: Structure and Function</option>
			<option value="Basic Science: Mode of Action">Basic Science: Mode of Action</option>
			<option value="Assay Development/Detection">Assay Development/Detection</option>
			<option value="Epidemiology">Epidemiology</option>
			<option value="Clinical">Clinical</option>
			<option value="Therapeutic/Prophylaxis">Therapeutic/Prophylaxis </option>
			<option value="Food Safety">Food Safety</option>
			</select></td>
	</tr>
	<tr>
		<td class="formtitle"><label>Abstract</label><br />
			<script type="text/javascript">
				function updateCount() {
					var count = 3000-_get('abstract').value.length;
					if(count<0) {
						_get('abstract').value = _get('abstract').value.substr(0,3000);
						count = 0;
					}
					_get('count').innerHTML = count;
				}	
			</script>
			<span style="color:#666;font-size: 12px;"><span id="count">3000</span> characters left</span></td>
		<td><textarea onkeyup="updateCount()" cols="60" rows="12" name="abstract" id="abstract"></textarea>
	</tr>
	<tr>
		<td class="formtitle"><label>E-Mail</label></td>
		<td><input name="email" id="email" size="80" /></td>
	</tr>
	<tr>
		<td class="formtitle"><label>Preferred Presentation</label></td>
		<td><select name="presentation" id="presentation">
			<option value="">-Select One</option>
			<option value="Poster">Poster</option>
			<option value="Platform">Platform</option>
			<option value="Either">Either</option>
		</select>
	</td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center;">
			<hr />
			<input type="button" value="Prepare and Submit" onclick="submitForm()" />
		</td>
	</tr>
</table>
<input type="hidden" name="commit" value="1" />
</form>
</div>

<?php } ?>

<?php require("includes/footer.php");
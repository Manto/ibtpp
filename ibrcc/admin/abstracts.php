<?php require("includes/header.php"); ?>
<?php
$db = mysql_connect("localhost", "infantbo", "big506");
mysql_select_db("ibrcc_abstract");
?>

<div class="main">
	<div class="header">Submitted Abstracts</div>
<hr />

<?php
	$sql = "SELECT * FROM abstracts ORDER BY c_stamp DESC;";
	
	$result = mysql_query($sql);
	if(!$result) {
		echo $sql . "<br />".mysql_error();
	}
	else {
		$row_count = mysql_num_rows($result);
		echo <<<EOT
		<div style="font-weight: bold; color: #369; font-size: 12px;">Listing {$row_count} abstracts</div>
		<table name="maintable" id="maintable" cellpadding="2" cellspacing="0" border="0">
		<tr>
			<td class="header">Title</td>
			<td class="header">Authors</td>
			<td class="header">Affiliation</td>
			<td class="header">Category</td>
			<td class="header">Email</td>
			<td class="header">Presentation</td>
			<td class="header">Download PDF</td>
		</tr>
EOT;
		while($row = mysql_fetch_array($result)) {
			echo <<<EOT
		<tr>
			<td>{$row["title"]}</td>
			<td>{$row["author"]}</td>
			<td>{$row["affiliation"]}</td>
			<td>{$row["category"]}</td>
			<td><a href="mailto:{$row["email"]}">{$row["email"]}</a></td>
			<td>{$row["presentation"]}</td>
			<td><a href="showabstract.php?id={$row["abstract_id"]}&pdf=1" target="_blank">PDF</a></td>
		</tr>
EOT;
		}
		echo "</table>\n";
	}
?>

</div>

<script type="text/javascript" src="includes/sortTable.js"></script>
<script type="text/javascript">
initTable("maintable");
</script>

<?php require("includes/footer.php");
<!DOCTYPE HTML>
<html>
<head>
<?php
	if (filter_input(INPUT_GET, 'lang', FILTER_SANITIZE_STRING) == 'pt') $lang = 'pt';
	else $lang = 'en';
	
	$seed = filter_input(INPUT_GET, 'seed', FILTER_SANITIZE_NUMBER_INT);
	$json = file_get_contents("def.json");
	$data = json_decode($json,true);
?>
<meta charset="utf-8" />
<title><?php echo ''.$data['ui'][10][$lang].''; ?> - QC! Team</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/def.js"></script>
</meta>
<body>
<div id="wrapper">
	<div id="header">		
		<div class="title"><?php echo ''.$data['ui'][11][$lang].''; ?></div>
		<div class="version"><?php echo ''.$data['ui'][7][$lang].''; ?></div>
	</div>
	<div id="main">
		<?php echo ''.$data['ui'][1][$lang].''; ?>&nbsp;<input id="inputNumber" type="number" min="0" max="999" maxlength="3" value="1"></input>
		<?php echo ''.$data['ui'][2][$lang].''; ?>&nbsp;<input id="inputDamage" type="number" min="0" max="999" maxlength="3" value="1"></input>

		<div id="resultNormal">
			<div class="label"><?php echo ''.$data['ui'][3][$lang].''; ?></div><div id="resultN" class="result">0</div>
			<br />
			<div class="label"><?php echo ''.$data['ui'][5][$lang].''; ?></div><div id="resultND" class="result">0</div>
		</div>
		<br /><br />
		<div id="resultExpert">
			<div class="label"><?php echo ''.$data['ui'][4][$lang].''; ?></div><div id="resultE" class="result">0</div>
			<br />
			<div class="label"><?php echo ''.$data['ui'][6][$lang].''; ?></div><div id="resultED" class="result">0</div>
		</div>
		
		<a class="submit" href="javascript:calc(document.getElementById('inputNumber').value, document.getElementById('inputDamage').value)"><?php echo ''.$data['ui'][0][$lang].''; ?></a>
		
	</div>
	<div id="footer">
		<?php echo ''.$data['ui'][8][$lang].''; ?>&nbsp;<?php echo ''.$data['ui'][9][$lang].''; ?> - <a href="http://terraria.gamepedia.com/Defense" target="_blank"><?php echo ''.$data['ui'][13][$lang].''; ?></a>
	</div>
</div>
</body></html>
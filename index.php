<!doctype html>
<html class="no-js" lang="en">
  <head>
  	<?php
		if (filter_input(INPUT_GET, 'lang', FILTER_SANITIZE_STRING) == 'pt') $lang = 'pt';
		else $lang = 'en';
		
		$seed = filter_input(INPUT_GET, 'seed', FILTER_SANITIZE_NUMBER_INT);
		$json = file_get_contents("def.json");
		$data = json_decode($json,true);
	?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo ''.$data['ui'][10][$lang].''; ?> - QC! Team</title>

    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
  	<div class="row">
  		<div class="columns medium-6 small-centered">
  			<h1>
  				<?php echo ''.$data['ui'][11][$lang].''; ?>
				<small>
					<?php echo ''.$data['ui'][7][$lang].''; ?>
				</small>
			</h1>
  		</div>
  	</div>

  	<div class="row">
  		<div class="columns medium-5 small-centered">

  			<div class="row collapse">
			    <div class="small-6 columns">
			      <span class="prefix"><?php echo ''.$data['ui'][1][$lang].''; ?></span>
			    </div>
			    <div class="small-6 columns">
			      <input id="inputNumber" type="number" min="0" max="999" maxlength="3" value="1">
			    </div>
			</div>

			<div class="row collapse">
			    <div class="small-6 columns">
			      <span class="prefix"><?php echo ''.$data['ui'][2][$lang].''; ?></span>
			    </div>
			    <div class="small-6 columns">
			      <input id="inputDamage" type="number" min="0" max="999" maxlength="3" value="1">
			    </div>
			</div>

			<div class="panel">
				<?php echo ''.$data['ui'][3][$lang].''; ?> <div id="resultN" class="right">0</div>
				<br>
				<?php echo ''.$data['ui'][5][$lang].''; ?> <div id="resultND" class="right">0</div>
			</div>
			<div class="panel">
				<?php echo ''.$data['ui'][4][$lang].''; ?> <div id="resultE" class="right">0</div>
				<br>
				<?php echo ''.$data['ui'][6][$lang].''; ?> <div id="resultED" class="right">0</div>
			</div>

			<div class="row collapse">

				<div class="columns medium-6">
					<a class="button small" href="javascript:calc(document.getElementById('inputNumber').value, document.getElementById('inputDamage').value)"><?php echo ''.$data['ui'][0][$lang].''; ?></a>
				</div>		
				<div class="columns medium-5">
					<ul class="button-group right">
						<li><a href="?lang=pt" class="button tiny success">PT-BR</a></li>
						<li><a href="?lang=en" class="button tiny">EN-US</a></li>
					</ul>
				</div>
				
			</div>

	  		<div class="columns medium-12 text-center">
				<?php echo ''.$data['ui'][8][$lang].''; ?> <a href="http://qc.team/" title="<?php echo ''.$data['ui'][9][$lang].''; ?>" target="_blank"><?php echo ''.$data['ui'][9][$lang].''; ?></a> - <a href="http://terraria.gamepedia.com/Defense" target="_blank"><?php echo ''.$data['ui'][13][$lang].''; ?></a>
			</div>
			

		</div>
	</div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script type="text/javascript" src="js/def.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
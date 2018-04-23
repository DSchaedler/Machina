<?php
	$json = file_get_contents("https://discordapp.com/api/guilds/176804482934505472/widget.json");
	$obj = json_decode($json);
	$member = $obj->members;
	$invite = $obj->instant_invite;
	$online = 0;

	foreach ($member as $value){
		$online = $online + 1;
	}

?>
<html>
	<head>
		<title>Machina Minecraft Server</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	</head>
	<body>
		<h1>Machina Minecraft Server</h1>
		<h2 onclick="SelectText('ip')" id="ip" title="Click to copy!">mc.machina.fun</h2>
		
		<div id="discord-wrapper">
			<a target="_blank" href="<?php echo $invite; ?>"><img src="images/Discord-Logo-Color.svg" id="discord-logo" alt="The Discord Logo. A video game controller with eyes."></a>
			<a target="_blank" href="<?php echo $invite; ?>"><p id="discord-json"><strong><?php echo $online; ?></strong> Members Online</p></a>
		</div>
		
		
		<div id="info-wrapper">
			<a target="_blank" href="https://www.atlauncher.com/pack/BevosTechPack">
				<img src="images/bevo.png" id="bevo-logo" alt="Bevo's Tech Pack.">
				<p id="bevo-text">This server runs on the latest version of Bevo's Tech Pack 1.7.10</p>
			</a>

			<a target="_blank" href="https://www.atlauncher.com/downloads">
				<img src="images/at.png" id="at-logo" alt="AT Launcher">
				<p id="bevo-text">You will need AT Launcher to run this pack.</p>
			</a>
		</div>
		<h2>World Map</h2>
		<iframe src="http://machina.mine.bz:8120/"></iframe>
		<script type="text/javascript" src="scripts/main.js"></script>
	</body>
</html>
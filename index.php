<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Example Google Maps</title>
<style type="text/css">
	ul{
		display: block;
	}
	ul li{
		float: left;
		width: 100px;
		list-style-type:none;
		text-align: center;
		margin-left: 2px;
		margin-right: 2px;
		background: #000;
		padding: 5px;

	}
	ul li:hover{
		color:#CCC;

	}
	ul a{
		color: #FFF;
		text-decoration: none;
	}

</style>
</head>
<body>
	<div>
		<ul>
			<a href="index.php?p=icon"><li>ICON</li></a>
			<a href="index.php?p=way"><li>WAY</li></a>
			<a href="index.php?p=polygon"><li>POLYGON</li></a>
			<a href="index.php?p=circle"><li>CIRCLE</li></a>
		</ul>
	</div><br><br>
	<div style="width:100%;height:480px;">
		<?php
			if(isset($_GET))
			{
				$p=$_GET["p"];
				switch ($p) {
					case 'icon': 	include "icon.html"; break;
					case 'way': 	include "way.html"; break;
					case 'polygon': include "polygon.html"; break;
					case 'circle': 	include "circle.html"; break;
					
					default: 		include "icon.html"; break;
				}
			}
			else
			{
				include "icon.html";
			}
		?>
	</div>
</body>
</html>
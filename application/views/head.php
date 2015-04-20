<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<title>DataDate: vind de leven van je liefde</title>
		<link rel="stylesheet" type="text/css" href="https://www.students.science.uu.nl/~4301358/wt3/public/style.css"/>
		<?php
			echo('
				<style type="text/css">
					body
					{
						background-image: url(https://www.students.science.uu.nl/~4301358/wt3/public/banner' . rand(0, 3) . '.jpg);
					}
				</style>
			');
		?>
		<link rel="shortcut icon" type="image/png" href="https://www.students.science.uu.nl/~4301358/wt3/public/logo.png">
	</head>
	<body>
		<div id="header">
			<a id='logo' href="https://www.students.science.uu.nl/~4301358/wt3/start"><img src="https://www.students.science.uu.nl/~4301358/wt3/public/logo.png"/></a>
		</div>
		<?php
			echo $nav;
		?>
		<div id='achter'>
			<div id="content">
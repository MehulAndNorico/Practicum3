<div class="nav">
	<?php
		//if (ingelogd)
		if ($nickname != '')
		{
			echo(
				"<a href='matches'>
					<h2>Matches</h2>
				 </a>
				  <a href='login'>
					<h2>Geliked</h2>
				 </a>
				  <a href='login'>
					<h2>Mijn likes</h2>
				 </a>
				  <a href='login'>
					<h2>Wederzijdse likes</h2>
				 </a>
				  <a href='login'>
					<h2>Mijn profiel ($nickname)</h2>
				 </a>
				 <a href='uitloggen'>
					<h2>Uitloggen</h2>
				 </a>"
				);
		} else {
			echo(
				'<a href="zoeken">
					<h2>Zoeken</h2>
				 </a>
				 <a href="login">
					<h2>Inloggen</h2>
				 </a>
				 <a href="registreren">
				 	<h2>Registreren </h2>
				 </a>' . "<h2>$nickname</h2>"
			);
		}
	?>
</div>
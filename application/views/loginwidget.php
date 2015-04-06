<div id="login">
	<?php
		//if (ingelogd)
		if (true)
		{
			echo(
				'<a href="login"><h2>Inloggen</h2></a>
				&nbsp;
				<a href="registreren"><h2>Registreren</h2></a>'
				);
		} else {
			echo(
				'<p>Je bent ingelogd als ...</p>
				<p>Uitloggen</p>'
			);
		}
	?>
</div>
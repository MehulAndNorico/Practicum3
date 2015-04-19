<div class="nav">
	<?php
		//if (ingelogd)
		if ($nickname != '')
		//if (false)
		{
			echo(
				"<a href='https://www.students.science.uu.nl/~4301358/wt3/matches'>
					<h2>Matches</h2>
				 </a>
				  <a href='https://www.students.science.uu.nl/~4301358/wt3/login'>
					<h2>Geliked</h2>
				 </a>
				  <a href='https://www.students.science.uu.nl/~4301358/wt3/login'>
					<h2>Mijn likes</h2>
				 </a>
				  <a href='https://www.students.science.uu.nl/~4301358/wt3/login'>
					<h2>Wederzijdse likes</h2>
				 </a>
				  <a href='https://www.students.science.uu.nl/~4301358/wt3/login'>
					<h2>Mijn profiel ($nickname)</h2>
				 </a>
				 <a href='https://www.students.science.uu.nl/~4301358/wt3/uitloggen'>
					<h2>Uitloggen</h2>
				 </a>"
				);
		} else {
			echo(
				'<a href="https://www.students.science.uu.nl/~4301358/wt3/zoeken">
					<h2>Zoeken</h2>
				 </a>
				 <a href="https://www.students.science.uu.nl/~4301358/wt3/login">
					<h2>Inloggen</h2>
				 </a>
				 <a href="https://www.students.science.uu.nl/~4301358/wt3/registreren">
				 	<h2>Registreren </h2>
				 </a>'
			);
		}
	?>
</div>
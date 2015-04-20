<form method="POST">
	<table id="tabel">
	  <?php   
	    foreach ($gegevens as $paar) {
	      echo '<tr><td>';
	      echo $paar[0];
	      echo '</td><td><input type="text" name="';
	      echo $paar[0];
	      echo '">';
	      echo $paar[1];
	      echo '</td></tr>';
	    }
	  ?>
	</table>
	<input type="submit" value="Registeren"/>
</form>

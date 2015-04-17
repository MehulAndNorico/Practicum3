<form method="POST">
	<table id="tabel">
	  <?php   
	    foreach ($gegevens as $paar) {
	      echo '<tr><td>';
	      echo $paar[0];
	      echo '</td><td><textarea name="';
	      echo $paar[0];
	      echo '">';
	      echo $paar[1];
	      echo '</textarea></td>';
	      echo '</tr>';  
	    }
	  ?>
	</table>
	<input type="submit" value="Registeren"/>
</form>

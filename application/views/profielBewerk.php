<form method="POST">
  <?php echo validation_errors(); ?>
  <?php echo form_open('profielBewerk'); ?>
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
  <input type="submit" name="registreren" value="Registeren"/>
</form>
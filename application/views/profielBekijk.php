<table id="tabel">
  <?php   
    foreach ($gegevens as $paar) {
      echo '<tr>';
      foreach ($paar as $string) {
        echo '<td>';
        echo $string;
        echo '<td>';
      }
      echo '</tr>';
    }
  ?>
</table>

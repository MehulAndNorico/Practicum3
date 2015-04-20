<?php  
  if ($likeknop)
  {
    echo "<form method='POST'>
    <input type='hidden' name='wat' value='$wat'>
     <input type='hidden' name='wie' value='$wie'>
    <input type='submit' value='$wat'/>
    </form>";
  }
  echo "<table id='tabel'>";
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

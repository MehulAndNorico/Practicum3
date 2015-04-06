<!--
<h4>
	<?php //echo $result->nickname;?>
</h4>

<table id="tabel">
  <tr>
    <td>Naam</td>
    <td>
    	<?php //echo $result->naam;?>
    </td>		
  </tr>
  <tr>
    <td>Geslacht</td>
    <td>
    	<?php //echo $result->geslacht;?>
    </td>		
  </tr>
  <tr>
    <td>Geslachtsvoorkeur</td>
    <td>
    	<?php //echo $result->geslachtsvoorkeur;?>
    </td>		
  </tr>
  <tr>
    <td>Geboortedatum</td>
    <td>
    	<?php //echo $result->geboortedatum;?>
    </td>		
  </tr>
  <tr>
    <td>Leeftijdsvoorkeur</td>
    <td>
    	<?php //echo ($result->leeftijdmin + '-' + $result->leeftijdmax + 'jaar'); ?>
    </td>		
  </tr>
  <tr>
    <td>Beschrijving</td>
    <td>
    	<?php echo $result->beschrijving;?>
    </td>		
  </tr>
</table>
-->

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

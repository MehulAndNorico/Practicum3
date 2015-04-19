<?php
/*
	$geslacht = "<input id='geslacht' type='text' name='geslacht'>";
	echo
	/*"<form>
		<table id='tabel'>
			<tr>
				<td>Geslacht</td>
				<td>$geslacht</td>
			</tr>
			<tr>
				<td>Leeftijdmin</td>
				<td>$leeftijdmin</td>
			</tr>
			<tr>
				<td>Leeftijdmax</td>
				<td>$leeftijdmax</td>
			</tr>
			<tr>
				<td>Persoonlijkheidsvoorkeur</td>
				<td>$persoonlijkheidsvoorkeur</td>
			</tr>
			<tr>
				<td>Merkvoorkeuren</td>
				<td>$merkvoorkeuren</td>
			</tr>
		</table>
		<div id=profielen>
		</div>
		<!--<input type='submit' value='Zoeken OUD'>-->
		<button onClick='getProfielen()'>Zoeken</button>
	</form>";*/
	/*"<table id='tabel'>
		<tr>
			<td>Geslacht</td>
			<td>$geslacht</td>
		</tr>
	</table>
	<div id=profielen>
	</div>
	<!--<input type='submit' value='Zoeken OUD'>-->
	<button onClick='getProfielen()'>Zoeken</button>";*/
?>

<table id='tabel'>
	<tr>
		<td>Geslacht</td>
		<td><input id='geslacht' type='text' name='geslacht'></td>
	</tr>
	<tr>
		<td>Leeftijdmin</td>
		<td><input id='leeftijdmin' type='text' name='leeftijdmin'></td>
	</tr>
	<tr>
		<td>Leeftijdmax</td>
		<td><input id='leeftijdmax' type='text' name='leeftijdmax'></td>
	</tr>
	<tr>
		<td>Persoonlijkheidsvoorkeur</td>
		<td><input id='persoonlijkheidsvoorkeur' type='text' name='persoonlijkheidsvoorkeur'></td>
	</tr>
	<tr>
		<td>Merkvoorkeuren</td>
		<td><input id='merkvoorkeuren' type='text' name='merkvoorkeuren'</td>
	</tr>
</table>
<button onClick='getProfielen()'>Zoeken</button>
<div id='profielen'></div>

<script>
	function get(id)
	{
		return document.getElementById(id).value;
	}

	function getProfielen()
	{
		//alert('daar gaan we');
		//var form = this.form;
		//var uri = "https://www.students.science.uu.nl/~4301358/wt3/start/asdf?=geslacht=" + form['geslacht'] + "&leeftijdmin=" + form['leeftijdmin'] + "$leeftijdmax=" + form['leeftijdmax'] + "&persoonlijkheidsvoorkeur=" + form['persoonlijkheidsvoorkeur'] + "&merkvoorkeuren=" + form['merkvoorkeuren'];
		//var uri = "https://www.students.science.uu.nl/~4301358/wt3/zoeken/profielen?=geslacht=" + get('geslacht') + "&leeftijdmin=" + get('leeftijdmin') + "$leeftijdmax=" + get('leeftijdmax') + "&persoonlijkheidsvoorkeur=" + get('persoonlijkheidsvoorkeur') + "&merkvoorkeuren=" + get('merkvoorkeuren');
		//var uri = "https://www.students.science.uu.nl/~4301358/wt3/zoeken/profielen/geslacht/" + get('geslacht') + "/leeftijdmin/" + get('leeftijdmin') + "leeftijdmax/" + get('leeftijdmax') + "/persoonlijkheidsvoorkeur/" + get('persoonlijkheidsvoorkeur') + "/merkvoorkeuren/" + get('merkvoorkeuren');
		var uri = "https://www.students.science.uu.nl/~4301358/wt3/zoeken/profielen/" + get('geslacht') + "/" + get('leeftijdmin') + "/" + get('leeftijdmax') + "/" + get('persoonlijkheidsvoorkeur') + "/" + get('merkvoorkeuren');
		//var uri = "https://www.students.science.uu.nl/~4301358/wt3/zoeken/profielen?=geslacht=" + document.getElementById("geslacht").value;
		//var uri = "https://www.students.science.uu.nl/~4301358/wt3/zoeken/profielen?=geslacht=LKHSJDFKJSLDFHSKDJLFSDIHFLDSFHLSDFHSDFJKLKJSLDFJILKJDSFHKLHK";
		//alert(uri);

		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        	//alert('ontvangen');
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("profielen").innerHTML = xmlhttp.responseText;
            }
        }
        //xmlhttp.open("GET", "https://www.students.science.uu.nl/~4301358/wt3/zoeken/profielen?=geslacht=" + form['geslacht'] + "&leeftijdmin=" + form['leeftijdmin'] + "$leeftijdmax=" + form['leeftijdmax'] + "&persoonlijkheidsvoorkeur=" + form['persoonlijkheidsvoorkeur'] + "&merkvoorkeuren=" + form['merkvoorkeuren'], true);
        xmlhttp.open("GET", uri, true);
        xmlhttp.send();
	}

</script>

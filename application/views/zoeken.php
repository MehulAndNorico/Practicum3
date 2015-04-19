<table id='tabel'>
	<tr>
		<td>Geslacht</td>
		<td>
			<select id='geslacht' name='geslacht'>
			<option value='Man'>Man</option>
			<option value='Vrouw'>Vrouw</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Leeftijd</td>
		<td><input id='leeftijdmin' type='number' name='leeftijdmin' min='18' max='100'></td>
	</tr>
	<tr>
		<td>Leeftijdmax</td>
		<td><input id='leeftijdmax' type='number' name='leeftijdmax'min='18' max='100'></td>
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

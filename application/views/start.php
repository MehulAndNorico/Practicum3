<div id="promo">
	<div id="promotekst">
		<h3>Vind de leven van je liefde</h3>
		<p>
			"De bijzonderheid in onze site is dat ons dating paradigma gebaseerd is op een unieke en wetenschappelijk correct bewezen profilerings- en matching techniek die zowel de persoonlijkheid als de lifestyle in de "dating equation" meeneemt en leert van de voorkeuren van de gebruiker om de dating ervaring te optimaliseren. Tot op zekere hoogte is dit al eens eerder vertoond (BrandDating.nl voor dating op basis van lifestyle - deze site is kennelijk wegen succes beëindigd - en Parship voor dating op basis van persoonlijkheid), maar wij hebben niet alleen betere technologieën; we combineren ook nog eens deze systemen en breiden ze uit met 'playing field changing' zelflerende functionaliteit."
			<a href="http://www.cs.uu.nl/docs/vakken/b2wt/opdracht3.html">, aldus onze opdrachtgever.</a>
		</p>
	</div>
</div>
<br>
<br>
<div id="profielen">
		<div class="profiel">
		<img class="part" src="https://www.students.science.uu.nl/~4301358/wt3/public/profielfoto.jpg" alt="Profielfoto van ...">
		<div class="part">
			<p>NICKNAME GESLACHT 99</p>
			<p>Persoonlijkheidstype: Je moeder</p>
			<p>Beschrijving: Hallo, dit is de eerste zin van mij beschrijving en omdat het een voorbeeld is ook de laatste</p>
			<p>Merkvoorkeuren: Hier komt dus een kort lijstje met wat merken omdat dat moet</p>
		</div>
	</div>
	<script>
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("profielen").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "https://www.students.science.uu.nl/~4301358/wt3/start/profielen", true);
        xmlhttp.send();
	</script>
</div>
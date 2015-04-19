<div id="promo">
	<div id="promotekst">
		<h3>Vind de leven van je liefde</h3>
		<p>
			"De bijzonderheid in onze site is dat ons dating paradigma gebaseerd is op een unieke en wetenschappelijk correct bewezen profilerings- en matching techniek die zowel de persoonlijkheid als de lifestyle in de "dating equation" meeneemt en leert van de voorkeuren van de gebruiker om de dating ervaring te optimaliseren. Tot op zekere hoogte is dit al eens eerder vertoond (BrandDating.nl voor dating op basis van lifestyle - deze site is kennelijk wegen succes beëindigd - en Parship voor dating op basis van persoonlijkheid), maar wij hebben niet alleen betere technologieën; we combineren ook nog eens deze systemen en breiden ze uit met 'playing field changing' zelflerende functionaliteit."
			<a href="http://www.cs.uu.nl/docs/vakken/b2wt/opdracht3.html">, aldus onze opdrachtgever.</a>
		</p>
	</div>
</div>
<div id="profielen">
	<a href="inschrijven"><h3>Schrijf je nu in en ontmoet onder andere deze mensen:</h3></a>
	<div class="profiel" id="profiel1">
		<img class="part" src="/~4301358/wt3/public/profielfoto.jpg" alt="Profielfoto van ...">
		<div class="part">
			<p>NICKNAME GESLACHT 99</p>
			<p>Persoonlijkheidstype: Je moeder</p>
			<p>Beschrijving: Hallo, dit is de eerste zin van mij beschrijving en omdat het een voorbeeld is ook de laatste</p>
			<p>Merkvoorkeuren: Hier komt dus een kort lijstje met wat merken omdat dat moet</p>
		</div>
	</div>
	<div class="profiel" id="profiel2"></div>
	<br>
	<div class="profiel" id="profiel3"></div>
	<div class="profiel" id="profiel4"></div>
	<br>
	<div class="profiel" id="profiel5"></div>
	<br>
	<div class="profiel" id="profiel6"></div>
	<script>
		krijgProfielen() {
	        var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	                document.getElementById("profiel1").innerHTML = xmlhttp.responseText;
	                document.getElementById("profiel2").innerHTML = xmlhttp.responseText;
	                document.getElementById("profiel3").innerHTML = xmlhttp.responseText;
	                document.getElementById("profiel4").innerHTML = xmlhttp.responseText;
	                document.getElementById("profiel5").innerHTML = xmlhttp.responseText;
	                document.getElementById("profiel6").innerHTML = xmlhttp.responseText;
	            }
	        }
	        xmlhttp.open("GET", "https://www.students.science.uu.nl/~4301358/wt3/start/profielen", true);
	        xmlhttp.send();
		}
	</script>
</div>
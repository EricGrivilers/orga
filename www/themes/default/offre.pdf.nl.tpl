<page>
	<page_footer>
		<table style="width:{180}mm" >
			<tr>
				<td style='width:{180}mm;text-align:center'>Algemene voorwaarden die geldig zijn voor de aankoop of huur van onze produkten zoals vermeld bij de annex van deze offerte.</td>
			</tr>
			<tr>
				<td style='width:{180}mm;background-color:#ededed;text-align:center'>
					{% include 'shared/address.fr.tpl' %} </td>
			</tr>
		</table>
	</page_footer>
	<table style="width:180mm;" >
		<tr>
			<td style='width:100mm;vertical-align:top'><img src="themes/default/images/logo.png">
			<br/>
			<br/>
			Offerte {{offre.reference}}
			<br/>
			Zaventem, {{offre.offreDate}}
			<br/>
			<br/>
			{{user.firstname}}  {{user.lastname}}
			<br/>
			{{user.email}}
			<br/>
			{{user.phone}}
			{% if user.mobile %}
			<br/>{{user.mobile}}
			{% endif %}
			</td>
			<td style='padding-top:45mm;vertical-align:top'>
			<p style='padding-top:0mm'>
				{% if client.clientType=='cie' %} <b>{{client.name}}</b> {{client.cieType}}
				<br/>
				{{client.clientTitle}} {{client.firstname}} {{client.lastname}}
				<br/>
				{% else %} <b>{{client.clientTitle}} {{client.firstname}} {{client.lastname}} </b>
				<br/>
				{% endif %}
				<br/>
				{{client.address}} {{client.number}}
				<br/>
				{{client.zip}} {{client.city}}
				<br/>
				{{client.country}}
				
			</p>
			<br/><br/>{% if client.phone!='' %}Tel: {{client.phone}}<br/> {% endif %} {% if client.clientType=='cie' %}
			
			BTW: {{client.vat}}
			{% endif %}
			</td>
		</tr>
	</table>
	<br/>
	<table style="width:180mm" >
		<tr>
			<td style='width:180mm;background-color:#ededed;text-align:center'><b>{% if offre.offreType=='rent' %} Verhuurofferte {% elseif offre.offreType=='winter' %} Hivernage {% else %} Verkoop voorstel {% endif %}</b></td>
		</tr>
	</table>
	<p>
		{{offre.introText|nl2br}}
	</p>
	<br/>
	<b><u>Plaats :</u></b>
	<p>
		{{offre.address|nl2br}} {{offre.number}}
		<br/>
		{{offre.zip}} {{offre.city}}
		<br/>
		{{offre.country}}
	</p>
	<br/>
	<b><u>Timing :</u></b>
	<ul>
		<li>
			Opbouw : {{offre.fStartBuild}}
		</li>
		{% if planning.inplace.formatedStartDate!='0000-00-00 00:00:00' %}
		<li>
			Event : van {{planning.inplace.formatedStartDate}} tot {{planning.inplace.formatedEndDate}}
		</li>
		{% endif %}
		<li>
			Afbouw : {{offre.fEndBuild}}
		</li>
	</ul>
	<br/>
	{% if tents.currentOffre %}
	<b><u>Verhuur – voorstel :</u></b>
	<ul>
		{% for t in tents.currentOffre %}
		{% if t.width>0 or t.length>0 %}
		<li>
			{{t.reference}} - {{t.name}} - {{t.color}} - {{t.length}}m x{{t.width}}m  {% if t.m2>0 %}- {{t.m2}}m2 {% endif %}
		</li>
		{% else %}
		<li>
			{{t.reference}} - {{t.name}}
		</li>
		{% endif %}
		{% endfor %}
	</ul>
	{% endif %}
	{% if offre.tentComments %}
	
	{{offre.tentsComments|nl2br}}
	{% endif %}
	<br/>
</page>
<page>
	<page_footer>
		<table style="width:180mm" >
			<tr>
				<td style='width:180mm;text-align:center'>Algemene voorwaarden die geldig zijn voor de aankoop of huur van onze produkten zoals vermeld bij de annex van deze offerte.</td>
			</tr>
			<tr>
				<td style='width:180mm;background-color:#ededed;text-align:center'>Organic sa-nv - 71, Ikaroslaan - 1930 Zaventem - Belgium
				<br/>
				www.organic-concept.com - TVA/BTW: 0807.879.247
				<br/>
				Bank account: 001-5712962-29 - IBAN BE26001571296229 - SWIFT : GEBABEBB
				<br/>
				Tel 00 32 2 720 77 45 - Fax 00 32 2 720 12 66 - info@organic-concept.com </td>
			</tr>
		</table>
	</page_footer>
	<table style="width:180mm" >
		<tr>
			<td style="width:90mm;vertical-align:top"><img src="themes/default/images/logo.png"></td>
			<td style="width:90mm;vertical-align:bottom;text-align:right">Offerte {{offre.reference}} (p2)</td>
		</tr>
	</table>
	<br/>
	<table style="width:180mm" >
		<tr>
			<td style='width:180mm;background-color:#ededed;text-align:center'><b>{% if offre.offreType=='rent' %} Verhuurofferte {% elseif offre.offreType=='winter' %} Hivernage {% else %} Verkoop voorstel {% endif %}</b></td>
		</tr>
	</table>
	<br/>
	<br/>
	<b><u>Budget:</u></b>
	<br/>
	<br/>
	{% if products %}
	<table style='width:180mm'>
		<thead style='border-bottom:1px solid #000000;background-color:#ededed;'>
			<tr>
				<th style='width:80%;background-color:#ededed;text-align:left'>Beschrijving</th>
				<th style='width:20%;text-align:right;background-color:#ededed;'>bedrag excl BTW</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td><td></td>
			</tr>
			{% for p in products %}
			<tr>
				<td style='width:80%'>{{p.description|nl2br}}</td><td style='width:20%;text-align:right'>{% if p.price=='0.00' %} Gratis {% else %} {{p.price}} €{% endif %}</td>
			</tr>
			{% endfor %}
		</tbody>
		<tfoot >
			<tr>
				<td style='text-align:right;background-color:#ededed;'>&nbsp;</td><td style='background-color:#ededed;' >&nbsp;</td>
			</tr>
			<tr>
				<td style='text-align:right;width:80%'>Totaal excl BTW</td><td style='width:20%;text-align:right'><b>{{productsTotal}} €</b></td>
			</tr>
			<tr>
				<td style='text-align:right;width:80%'>BTW (21%)</td><td style='width:20%;text-align:right'>{% if offre.priceType=='intra' %}intra communautaire{% else %}{{productsTotalTVA}} €{% endif %}</td>
			</tr>
			<tr>
				<td style='text-align:right;width:80%;background-color:#ededed;'><b>Totaal incl BTW te betalen</b></td><td style='width:20%;text-align:right;background-color:#ededed;'><b>{{productsTotalTTC}} €</b></td>
			</tr>
			</tfoot >
	</table>
	{% endif %}
	<br/>
	<br/>
	{% if productOptions %} <b><u>Opties :</u></b>
	<br/>
	<table style='width:180mm'>
		<thead style='border-bottom:1px solid #000000;background-color:#ededed;'>
			<tr>
				<th style='width:80%;background-color:#ededed;text-align:left'>Beschrijving</th>
				<th style='width:20%;text-align:right;background-color:#ededed;'>bedrag excl BTW</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td><td></td>
			</tr>
			{% for p in productOptions %}
			<tr>
				<td style='width:80%;'>{{p.description|nl2br}}</td><td style='width:20%;text-align:right'>{% if p.price=='0.00' %} Sur devis {% else %} {{p.price}} €{% endif %}</td>
			</tr>
			{% endfor %}
		</tbody>
	</table>
	{% endif %}
	<br/>
	<br/>
	<b><u>{% if offre.offreType=='rent' %} Verhuursvoorwaarden {% elseif offre.offreType=='winter'%} Algemene voorwaarden {% else %} Verkoopsvoorwaarden {% endif %}</u></b>
	<p>
		{% for s in slices %}
		{{s.comments|nl2br}}<br/>
		{% endfor %}
	</p>
	<br />
	{% if offre.conditions %}
	
	{{offre.conditions}}
	{% else %}
	De betaling van uw voorschot, bevestigt uw bestelling.
	{% endif %}
	<p>
		<b>Onze prijzen zijn exclusief btw</b>
		<br/>
		  Geldigheid van deze offerte: 30 dagen
	</p>
	<p>
		Met vriendelijke groeten,
		<br />
		<br />
	</p>
	<table style="width:180mm" >
		<tr>
			<td style='width:90mm'></td>
			<td style='width:100mm;'>{{user.firstname}}  {{user.lastname}}
			<br/>
			{{user.email}}
			<br/>
			{{user.phone}}</td>
		</tr>
	</table>
</page>
<page>
 <table style="width:190mm" >
    <tr>
      <td style='width:190mm;background-color:#ededed;text-align:center'><b>ORGANIC SA/NV.  Algemene voorwaarden </b></td>
    </tr>
  </table>
<table style="width:190mm" >
    <tr>
      <td style="width:180mm;vertical-align:top;font-size:6pt;text-align:justify">


<p><b>

1. Algemeen – Afwijkingen</b><br/>

De onderhavige algemene voorwaarden voor koop en huur gelden voor alle bestellingen die bij ons worden gedaan. De klant wordt geacht de onderhavige algemene voorwaarden voor koop en huur te aanvaarden door het loutere feit van zijn bestelling. Eventuele afwijkingen, zelfs indien vermeld op de documenten die van de klant uitgaan, zijn enkel inroepbaar mits schriftelijke bevestiging van onzentwege. Zelfs in dat geval blijven de huidige voorwaarden van toepassing voor alle punten waar niet uitdrukkelijk afgeweken werd.
</p><p><b>
2. Eigendomsvoorbehoud</b><br/>

De goederen blijven eigendom van de verkoper tot de volledige betaling van de contractueel overeengekomen sommen. Risico's zijn ten laste van de koper. Betaalde voorschotten zullen kunnen worden ingehouden ter vergoeding van mogelijke verliezen bij wederverkoop. In geval de koper de aan de verkoper toebehorende goederen, zelfs verwerkte, herverkoopt, draagt hij vanaf heden aan de verkoper alle schuldvorderingen die voortkomen uit deze herverkoop over. De klant neemt de volledige verantwoordelijkheid op zich voor de in huur gegeven goederen: hij is aansprakelijk voor alle schade of vernieling, zelfs indien teweeggebracht door toeval of overmacht.
</p><p><b>
3. Klachten</b><br/>

Klachten betreffende de verkoop moeten ons, op straffe van verval, schriftelijk gemeld worden binnen acht dagen na ontvangst van de goederen en facturen. Bij afwijking zal de termijn op 15 dagen worden gebracht voor verkoop aan de gebruiker. In geval van verkoop aan de gebruiker verwijzen de onderhavige voorwaarden naar de dwingende bepalingen, voorzien in artikel 1649 bis, tot 1649 octies van het burgerlijk wetboek. Klachten moeten per aangetekend schrijven worden gemeld.

Klachten betreffende huur zijn ontvankelijk :
* In geval van montage door de vennootschap Organic SA/NV : enkel op voorwaarde dat zij worden gericht tot onze monteurs zodra de montage is uitgevoerd en voor zover zij worden bevestigd bij een ter post aangetekend schrijven, neergelegd op de eerstvolgende werkdag volgend op de montage;
*In geval de goederen worden afgehaald door de klant zelf : enkel indien zij worden gemeld bij een ter post aangetekend schrijven, op de dag volgend op de afhaling van de goederen in onze werkplaats.
Indien de klacht gegrond bevonden wordt, zijn onze verplichtingen uitsluitend beperkt tot het vervangen of het gratis herstellen van de geleverde goederen of gebrekkige onderdelen daarvan, zonder dat we tot enige vergoeding verplicht zijn, uit welke hoofde ook.
Een eventueel gebrek van een verkocht of in huur gegeven artikel ontheft de klant niet van zijn betalingsverplichting maar laat de klant enkel toe om, voor zover op voldoende wijze wordt vastgesteld dat het voornoemde gebrek volledig aan ons is te wijten en niet werd gecorrigeerd, de kost van de huur of koop af te trekken zonder dat er sprake kan zijn van aanvullende schadeloosstelling.
</p><p><b>
4. Betaling</b><br/>

Tenzij uitdrukkelijk andere bepalingen door de vennootschap Organic SA/NV werden aanvaard, dient de betaling van onze facturen netto contant betaald te worden. Iedere achterstand van betaling zal ons het recht verlenen desgewenst de verkoopovereenkomst te ontbinden voor het niet uitgevoerde gedeelte, onverminderd alle schadevergoeding.

Iedere levering vormt een afzonderlijke transactie en wij aanvaarden geen enkele automatische vergoeding uit hoofde van retour, geschil, betwisting, enz., behoudens uitdrukkelijk akkoord van onzentwege. Echter, in geval van faillissement, insolventie, aanvraag tot gerechtelijk akkoord door de schuldenaar, zullen we automatisch kunnen compenseren zonder dat er enige formaliteit wordt vereist.

De niet-betaling op vervaldag van een geaccepteerde wissel maakt van rechtswege al onze andere vorderingen op de koper eisbaar.
</p><p><b>
5. Straffen wegens betalingsachterstand</b><br/>

Facturen die op de vervaldag niet zijn betaald, zullen automatisch, van rechtswege en zonder voorafgaande ingebrekestelling verhoogd worden met verwijlinteresten van 1% per maand. Bovendien zal, ingeval een factuur niet wordt voldaan binnen de zeven dagen volgend op een ingebrekestelling, het bedrag worden vermeerderd met een forfaitair schadebeding van 15% met een minimum van 125 euro, ten titel van administratieve kosten en voor derving van rollend kapitaal.
</p><p><b>
6. Meerdere contractanten en aansprakelijkheid</b><br/>

In geval van bestelling door een derde, is diegene die de bestelling doorgeeft hoofdelijk aansprakelijk met de begunstigde van de bestelling voor alle daaruit voortvloeiende verplichtingen. Evenzo, indien de bestelling op verzoek van de klant aan een andere persoon  wordt gefactureerd, zijn beiden hoofdelijk aansprakelijk voor de betaling en alle uit de bestelling voortvloeiende verplichtingen.
</p><p><b>
7. Annuleringen</b><br/>

De huurder kan een overeenkomst annuleren op voorwaarde :
* dat hij dit per aangetekend schrijven doet;
* dat hij tegelijkertijd overgaat tot betaling van schadevergoeding :
• 25% van het bedrag van de huur indien de annulering meer dan 4 maanden vóór de datum van de montage geschiedt
• 40% van het bedrag tussen 3 en 4 maanden vóór de montage
• 50% van het bedrag tussen 1 maand en 15 dagen vóór de montage
• 75% van het bedrag indien de annulering minder dan 15 dagen voor de datum van de montage geschiedt en voor zover het materiaal niet werd geladen in de opslagplaats van de verhuurder.
Zelfs indien de huurder om wat voor reden dan ook het gehuurde materiaal niet kan gebruiken, is de volledige huurprijs verschuldigd.
Het voorschot blijft eveneens verschuldigd.

In de met de gebruikers afgesloten overeenkomsten, zal de verhuurder de overeenkomst onder dezelfde voorwaarden kunnen annuleren.
</p><p><b>
8. Aansprakelijkheid van de partijen</b><br/>

Het materiaal van de verhuurder  is door deze laatste enkel voor zijn burgerlijke beroepsaansprakelijkheid gedekt.
De huurder is verantwoordelijk voor het toezicht op en de bescherming van het gehuurde materiaal, en dit vanaf de ontvangst van het eerste materiaal tot aan de volledige afhaling. De huurder zal alle maatregelen treffen om het materiaal in goede staat te houden en vandalisme of diefstal te vermijden. De huurder zal alle vereiste maatregelen treffen voor brandpreventie: signalisatie, blusmateriaal, noodoproep, door het publiek te respecteren politiemaatregelen … De huurder zal ervoor zorgen de tent gesloten te houden in geval van wind. In geval van sneeuw moet de huurder onmiddellijk een verwarmingsapparaat in werking stellen dat noodzakelijk is om de sneeuw permanent te doen smelten; indien er meer dan 3 cm sneeuw komt te liggen, is er gevaar voor inzakking en zal de huurder aansprakelijk worden gesteld voor de door de niet-naleving van deze clausule teweeggebrachte schade.  De huurder zal de vereiste maatregelen treffen om het materiaal te markeren in het geval dit op een openbaar terrein of op plaatsen waar voorbijgangers langskomen wordt gebruikt. De aansprakelijkheid van de huurder geldt voor alles wat betreft het gebruik van het gehuurde materiaal: meer in het  bijzonder blijven onder zijn volledige aansprakelijkheid ongevallen met personen of schade aan goederen die gevolg zouden zijn van gebruik van of genot van de gehuurde voorwerpen.
Een gedeeltelijke of volledige montage, het verplaatsen van het beweegbare materiaal is verboden zonder voorafgaandelijke toestemming en in ieder geval onder de exclusieve verantwoordelijkheid van de huurder.
De huurder zal de vereiste maatregelen treffen om in geval van onweer of kwaad opzet ieder koord van de tenten opnieuw te kunnen aanspannen, de haringen dieper te verankeren of deze achtereenvolgens te verplaatsen indien dit noodzakelijk of aangewezen zou zijn. Hij zal de verhuurder hier zo snel mogelijk van op de hoogte brengen.
</p><p><b>
9. Montage en terreinen</b><br/>

De huurder dient voor de overeengekomen datum van de montage voor alle vereiste toelatingen te zorgen.
De huurder dient ter plaatse aanwezig te zijn om de plek voor montage aan te wijzen en alle vragen te beantwoorden betreffende de toelatingen en gevaren op het terrein.
De verhuurder of zijn vertegenwoordigers dienen permanent over mogelijkheid tot toegang tot het verhuurde materiaal te beschikken , en dit zowel 's nachts als overdag.
Tijdens de evenementen zullen toegangspassen ter beschikking staan van de verhuurder.
In geen geval zullen het personeel of de vrachtwagen van de verhuurder andere transporten of werkzaamheden voor de huurder uitvoeren.
Indien bij aankomst vande vrachtwagen het door de huurder voorziene personeel niet aanwezig is, zal er een wachttijd van maximum vier uur in acht worden genomen. De verloren uren, werkkrachten en vrachtwagens zullen worden gefactureerd. Als deze periode van vier uur is afgelopen, kan de verhuurder zijn werkkrachten, materiaal en vrachtwagens terug naar de opslagplaats doen keren en is het volledige huurbedrag onmiddellijk opeisbaar.
In geval het terrein niet stabiel is, zijn de kosten voor wegruimen van voertuigen en materiaal ten laste van de huurder. De eventueel aan het terrein veroorzaakte schade is ten laste van de huurder (verzakking, sporen, schade aan beplanting…) De bodem dient volledig vrijgemaakt en proper te zijn, en mag geen niveauverschil vertonen behalve datgene/diegene dat/die bij het afsluiten van de overeenkomst werd(en) gesignaleerd. Indien de stabiliteit van onze structuren wordt verzekerd door in de bodem verankerde haringen of door op de bodem gedeponeerde dode gewichten, dient de huurder zich bij de bevoegde instantie te informeren teneinde zich ervan te vergewissen dat er geen enkel risico is op beschadiging van ondergrondse gas-, water-, elektriciteit-, telefoonleidingen, … Alle aan het terrein en de uitrusting daarvan veroorzaakte schade zijn ten laste van de huurder.
De terreinen voor montage van de circustenten moeten de mogelijkheid bieden gaten te boren door een normaal inhameren van de verankeringsharingen: de aanwezigheid in de ondergrond of aan de oppervlakte van harde lagen zoals bijvoorbeeld beton, moet ons ter kennis worden gebracht vóór de ondertekening van de overeenkomst. Hetzelfde zal gelden indien het terrein niet de noodzakelijke weerstand biedt voor de verankering van de haringen (moerassige of zandige bodem …)
Tijdens het demonteren van het materiaal zal iedere vertraging die is te wijten aan het niet volledig vrijmaken van het terrein worden gefactureerd (huurverlenging, bijkomende verplaatsingen, verlenging van de werkuren…)
</p><p><b>
10. Gehuurd materiaal</b><br/>

De huurder dient de waar te controleren bij het afhalen, bij de levering of bij de montage, en dit zal gelijkstaan met een volledige goedkeuring van de genoemde waar en de onberispelijke staat ervan. 

De huurder dient in te staan voor het onderhoud van het geleverde materiaal en het vermijden van alle schade daaraan. De huurder is verantwoordelijk voor alle eventuele schade aan het gehuurde materiaal als gevolg van opslag, montering, ingebruikname, ongepast gebruik door de huurder.

De huurder zal het materiaal in een onberispelijke staat van netheid aan de verhuurder terugbezorgen. Indien dit niet het geval is, zullen de kosten voor reiniging of onderhoud gefactureerd worden.
Het is verboden in het houtwerk en de dekzeilen te nagelen, nieten, schroeven of zagen, deze te beschilderen of op duurzame wijze te markeren, de reclame van de verhuurder te verbergen of weg te halen, behalve met uitdrukkelijke toestemming op het moment van de ondertekening van de overeenkomst. 

Om het even welke persoon belast is met het transport van de gehuurde goederen, gaat de huurperiode in vanaf de dag waarop de gehuurde goederen de opslagplaats van de verhuurder verlaten. Huurperioden bedragen steeds drie werkdagen waarin de dag van levering en de dag van terugname zijn inbegrepen. Iedere aangevangen bijkomende dag is volledig verschuldigd tegen hetzelfde huurtarief. 
</p><p><b>
11. Vertragingen - Overmacht</b><br/>

Behalve in geval van ernstige fout is de verhuurder vrijgesteld van iedere aansprakelijkheid bij de uitvoering van de onderhavige overeenkomst, met name betreffende de aangegeven termijnen. De termijnen voor levering en uitvoering worden steeds ter indicatie gestipuleerd. Wij kunnen niet gehouden worden tot betaling van schadevergoeding indien deze termijnen niet worden gerespecteerd.
Ieder geval van overmacht uit hoofde van de verhuurder, ontheft deze van alle aansprakelijkheid, zonder recht op een schadevergoeding voor de huurder voor wat betreft de levering van het gehuurde materiaal en verleent de verhuurder het recht de overeenkomst te annuleren. Worden conventioneel als gevallen van overmacht beschouwd : staat van oorlog, mobilisatie, stakingen, rellen of opstanden, ongevallen, ziekten of andere catastrofen, hoogwater, brand, onweders, storm, vernietiging of verlies van materiaal inbegrepen tijdens transport, buitengewone omstandigheden zoals verdediging van export of import, belemmerende maatregelen van eender welke autoriteit, stroompannes of onderbrekingen in brandstofvoorziening.
Op algemene wijze, iedere onvoorziene gebeurtenis die de aanvang verhindert (in dit geval wordt het voorschot onmiddellijk terugbetaald) of de normale uitvoering van de overeenkomst verhindert inclusief alle overlast waardoor de uitvoering van de overeenkomst duurder of moeilijker wordt.

De onderhavige algemene huurvoorwaarden zijn eveneens beschikbaar op de site www.organic.be. 
</p><p><b>
12. Bevoegde rechterljke instantie</b><br/>

In geval van geschil zullen enkel de rechtbanken van Nijvel en de Belgische wet bevoegd zijn.



</p>

</td></tr></table>

</page>
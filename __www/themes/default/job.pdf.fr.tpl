<page>
	<table style="width:{180}mm" >
    <tr>
      <td style="width:90mm;vertical-align:top"><img src="themes/default/images/logo.png"></td>
      <td style="width:90mm;vertical-align:bottom;text-align:right">Job {{job.reference}}</td>
    </tr>
  </table>
  <br/><br/>
   <table style="width:180mm" >
    <tr>
      <td style='width:90mm'></td>
      <td style='width:90mm;'>{{user.firstname}} {{user.lastname}}<br/>{{user.email}} <br/>{{user.phone}} {% if user.mobile %}<br/>{{user.mobile}} {% endif %}</td>
    </tr>
  </table>
   <br/>{{job.priceComments|nl2br}}<br/>
  <table style="width:180mm" >
    <tr>
      <td style='width:180mm;background-color:#ededed;text-align:center'><b>LIEU ET DATES</b></td>
    </tr>
  </table>
 <b><u>Client :</u></b>
 <p style='padding-top:0mm'>
				{% if client.clientType=='cie' %} <b>{{client.name}}</b> {{client.cieType}}
				<br/>
				{{client.clientTitle}} {{client.firstname}} {{client.lastname}}
				<br/>
				{% else %} <b>{{client.clientTitle}} {{client.firstname}} {{client.lastname}} </b>
				<br/>
				{% endif %}
				
				
			</p>
  <b><u>Lieu :</u></b>
  
  	<table style='width:180mm'><tr><td style='width:100mm'><p>
  	{{job.address|nl2br}} {{job.number}}
		<br/>
		{{job.zip}} {{job.city}}
		<br/>
		{{job.country}}
		
		{% if job.phone %}
		<br/>Tel.: {{job.phone}} {% endif %} 
		{% if job.fax %}
		<br/>Fax.: {{job.fax}} {% endif %}
		{% if job.email %}
		<br/>Email: {{job.email}} {% endif %} </p></td></tr><tr><td>{{job.offreComments}}</td></tr></table>
  <br/>
  <b><u>Timing :</u></b>
  <table style='width:180mm'>
  	<tr>
  		<td style='width:40mm'>Reperage :</td>
  		<td style='width:80mm'>du {{planning.preview.startDate}} au {{planning.preview.endDate}}</td>
  	</tr>
  	<tr>
  		<td style='width:40mm'>Montage :</td>
  		<td style='width:80mm'>du {{planning.build.startDate}} au {{planning.build.endDate}}</td>
  	</tr>
  	<tr>
  		<td></td>
  		<td style='width:70mm'>{{job.buildNotes}}</td>
  	</tr>
  	<tr>
  		<td style='width:40mm'>En place :</td>
  		<td style='width:80mm'>du {{planning.inplace.startDate}} au {{planning.inplace.endDate}}</td>
  	</tr>
	<tr>
		<td style='width:40mm'>Démontage :</td>
		<td style='width:80mm'>du {{planning.unbuild.startDate}} au {{planning.unbuild.endDate}}</td>
	</tr>
  	<tr>
  		<td></td>
  		<td >{{job.unbuildNotes}}</td>
  	</tr>
  </table>
  {{job.planningComments}}<br/>
  {{job.buildComments}}
  <table style="width:180mm" >
    <tr>
      <td style='width:180mm;background-color:#ededed;text-align:center'><b>MATERIEL</b></td>
    </tr>
  </table>
  <b><u>Tente(s) :</u></b>
  <table style='width:180mm;border:1px solid #cccccc'>
  	<tr style='border-bottom:1px solid #cccccc'><td style='width:25mm;border-bottom:1px solid #cccccc'>Ref.</td><td style='width:50mm;border-bottom:1px solid #cccccc'>Nom</td><td style='width:20mm;border-bottom:1px solid #cccccc'>Couleur</td><td style='width:20mm;border-bottom:1px solid #cccccc'>Surface</td><td style='width:15mm;border-bottom:1px solid #cccccc'>Plancher</td><td style='width:20mm;border-bottom:1px solid #cccccc'>Sol</td><td style='width:10mm;border-bottom:1px solid #cccccc''>Canal.</td></tr>
		
  {% for t in tents.currentOffre %}

		{% if t.width>0 or t.length>0 %}
		<tr>
			<td style='border-right:1px solid #cccccc'>{{t.reference}}</td>
			<td style='border-right:1px solid #cccccc'>{{t.name}}</td>
			<td style='border-right:1px solid #cccccc'>{{t.color}}</td>
			<td style='border-right:1px solid #cccccc'>{{t.length}}m x{{t.width}}m {% if t.m2>0 %}({{t.m2}}m2) {% endif %}</td>
			<td style='border-right:1px solid #cccccc'>{% if t.surfacePlancher>0 %}{{t.surfacePlancher}}m2 {% elseif t.plancher %}oui{% endif %}</td>
			<td style='border-right:1px solid #cccccc'>{% if t.sol %}{{t.sol}}{% endif %}</td>
			<td>{% if t.canalisation %}oui{% endif %}</td>
		</tr>
		{% else %}
		<tr>
			<td style='border-right:1px solid #cccccc'>{{t.reference}}</td>
			<td style='border-right:1px solid #cccccc'>{{t.name}}</td>
			<td style='border-right:1px solid #cccccc'></td>
			<td style='border-right:1px solid #cccccc'></td>
			<td style='border-right:1px solid #cccccc'></td>
			<td style='border-right:1px solid #cccccc'></td>
			<td ></td>
		</tr>
		{% endif %}
		{% endfor %}
  </table>
  <br/>
  {{job.tentsComments}}
  <br/>
   <br/>
 
  <b><u>Notes :</u></b>
  {% for t in tents.currentOffre %}
  	{% if t.other %}
  	<p><u>{{t.reference}} ({{t.name}}) </u>: {{t.other}}</p>
  	{% endif %}
  {% endfor %}
  <p> {{job.comments}}</p><br/>
  
</page>
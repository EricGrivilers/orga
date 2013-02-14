																				<form id="form" name="form" method="POST" class="offreForm" action='#'>
	<h1>Editer un client</h1>
	<input type="hidden" name="client[clientId]" id="clientId" value="{{clientId}}">
	
	<input class="button save" type="button" value="sauver" onclick="submit()">
	
	<input type="button" value="annuler / retour à la liste" onclick="document.location='/clients'" class="button cancel">
	<table cellpadding="10" style="border:0;background:none">
		<tbody>
			<tr>
				<td>
				
				<table style="background:#ffffff">
					<tbody>
						<tr>
							<td>
							Reference:
							<b>{{client.reference}}</b>
							<input type="hidden" name="client[reference]"  value="{{client.reference}}">
							<input type="hidden" name="client[clientId]" id="clientId" value="{{client.clientId}}" />
							</td>
							
							<td>
							Langue
							<select name="client[language]">
								{% for lang in langs %}
								<option value="{{lang}}" {% if lang == client.language %} selected {% endif %} >{{lang}}</option>
								{% endfor %}
							</select>
							</td>
							<td><input class="button save" type="button" value="Nouvelle offre" onclick="createOffreFromClient({{client.clientId}})"></td>
						</tr>
						
						
						<tr>
							<td>
							Origine:
							<textarea name='client[origin]' id='origin'>{{client.origin}}</textarea>
							
							</td>
							
							<td>
							Commercial
							<select name="client[userId]">
								{% for key,user in users %}
								<option value="{{key}}" {% if client.userId == key %} selected {% endif %} >{{user}}</option>
								{% endfor %}
							</select>
							</td>
							<td></td>
						</tr>
						
					</tbody>
				</table>
				
				
				<div id="clientDiv" {% if client.clientId<=0 %} class='alert' {% endif %} >

					
					<!--<input type="hidden" name="clientType" id="clientType" value="{{client.clientType}}" />-->

					<div id='clientType'>
						<input type='radio' name='client[clientType]' id="clientType1" value="cie"  {% if client.clientType=='cie' %} checked='checked' {% endif %} />
						<label for="clientType1">
							Société
						</label>
						<input type='radio' name='client[clientType]' id="clientType2" value="part" {% if client.clientType=='part' %} checked='checked' {% endif %} />
						<label for="clientType2">
							Particulier
						</label>
					</div>
					<div  >

						<table>
							<tbody id="ciePanel" {% if client.clientType=='part' %} style="display:none" {% endif %} >

								<tr>
									<td>
									Nom
									<span class="required" rel="t_client_name">*</span>
									</td>
									<td>
									<input type="text" name="client[name]" id="name" value="{{client.name}}" style="width:90%" >
									<div id='logs'></div>
									</td>
									<td>TVA</td>
									<td>
									<input type="text" name="client[vat]" id="vat" value="{{client.vat}}" {% if errorVat>0 %} style='border:2px dashed red' {% endif %} /> Format: BE0123.456.789
									{% if errorVat>0 %}<div class='alert'>Ce numéro de TVA existe déja: {{existingVat}}</div> {% endif %}
									</td>
									<td>Forme juridique</td>
									<td>
									<select id="cieType" name="client[cieType]">
										<option value=""></option>
										{% for ct in cieTypes %}
										<option value="{{ct}}" {%if ct==client.cieType %} selected {% endif %}>{{ct}}</option>
										{% endfor %}
									</select>
									<br>
									autre
									<input type="text" id="otherCieType" name="client[otherCieType]" value="">
									</td>
								</tr>
							</tbody>
							<tbody>
								<tr>
									<td>Contact</td>
									<td>
									<select name="client[clientTitle]"  id="clientTitle">
										<option value=""></option>
										{% for ct in clientTitles %}
										<option value="{{ct}}" {% if ct==client.clientTitle %}selected{% endif %}>{{ct}}</option>
										{% endfor %}}
									</select>
									</td>
									<td>Nom</td>
									<td>
									<input type="text" name="client[lastname]" id="lastname" value="{{client.lastname}}" style="width:100%">
									</td>
									<td>Prénom</td>
									<td>
									<input type="text" name="client[firstname]" id="firstname" value="{{client.firstname}}" style="width:100%">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div id="clientAddress" style="margin-top:10px">
						<h3>Facturation</h3>
						<table>
							<tbody>
								<tr>
									<td colspan="2">
									Adresse
									<br>
									<input type="text" name="client[address]" id="client_address" value="{{client.address}}" style="width:100%">
									</td>
									<td>
									Numéro
									<br>
									<input type="text" name="client[number]" id="client_number" value="{{client.number}}" class="numField">
									</td>
								</tr>
								<tr>
									<td>
									Code postal
									<br>
									<input type="text" name="client[zip]" id="client_zip" value="{{client.zip}}" class="numField">
									</td>
									<td>
									Ville
									<br>
									<input type="text" name="client[city]" id="client_city" value="{{client.city}}" style="width:100%">
									</td>
									<td>
									Pays
									<br>
									<select name="client[country]" id="client_country">

										<option value=""></option>
										{% for country in countries %}
										<option value="{{country}}"{% if country==client.country %} selected {% endif %} >{{country}}</option>
										{% endfor %}
									</select>
									</td>
								</tr>
								<tr>
									<td>
									Téléphone
									<br>
									<input type="text" name="client[phone]" id="client_phone" value="{{client.phone}}">
									</td>
									<td>
									Mobile
									<br>
									<input type="text" name="client[mobile]" id="client_mobile" value="{{client.mobile}}">
									</td>
									<td>
									Autre
									<br>
									<input type="text" name="client[phone2]" id="client_phone2" value="{{client.phone2}}">
									</td>
								</tr>
								<tr>
									<td>
									Fax
									<br>
									<input type="text" name="client[fax]" id="client_fax" value="{{client.fax}}">
									</td>
									<td>
									Email
									<br>
									<input type="text" name="client[email]" id="client_email" value="{{client.email}}" style="width:100%">
									</td>
									<td>
									Site web
									<br>
									<input type="text" name="client[url]" id="client_url" value="{{client.url}}" style="width:100%">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					
					<div>
						<h3>Tentes</h3>
						<table>
							<thead><tr><td>Reference</td><td>Nom</td><td>long.</td><td>larg.</td><td>surf.</td></tr></thead>
							<tbody>
							{% for t in tents %}
							<tr>
								<td><a href='/tents?tentId={{t.tentId}}'>{{t.reference}}</a></td>
								<td>{{t.name}}</td>
								<td>{{t.length}}</td>
								<td>{{t.width}}</td>
								<td>{{t.m2}}</td>
							</tr>
							{% endfor %}
							</tbody>
						</table>
						<h3>Factures</h3>
						<table>
							<thead><tr><td>Reference</td><td>Montant HT</td><td>Date</td><td>Job</td><td>Tranche</td><td>Statut</td><td></td></tr></thead>
							<tbody>
							{% for i in invoices %}
							<tr>
								<td><a href='/invoices?invoiceId={{i.invoiceId}}'>{{i.reference}}</a></td>
								
								<td>{{i.priceHT}} &euro;</td>
								<td>{{i.insertDate}}</td>
								<td><a href='/jobs?jobId={{i.jobId}}'>{{i.jobReference}}</a></td>
								<td>{{i.cSlice}}/{{i.nbSlices}}</td>
								<td>{{i.status}}</td>
								<td><a onclick="getInvoicePdf('{{i.invoiceId}}','nl','')" target="_blank"><img src="/themes/default/images/buttons/pdf.png"> nl</a>
									<a onclick="getInvoicePdf('{{i.invoiceId}}','fr','')" target="_blank"><img src="/themes/default/images/buttons/pdf.png"> fr</a></td>
							</tr>
							{% endfor %}
							</tbody>
						</table>
						<h3>Jobs</h3>
						<table>
							<thead><tr><td>Reference</td><td>Montant HT</td><td>Montage</td><td>Démontage</td><td>Offre</td><td>Facture</td><td></td></tr></thead>
							<tbody>
							{% for j in jobs %}
							<tr>
								<td><a href='/jobs?jobId={{j.jobId}}'>{{j.reference}}</a></td>
								
								<td>{{j.priceHT}} &euro;</td>
								<td>{{j.startBuild}}</td>
								<td>{{j.endBuild}}</td>
								<td><a href='/quotes?offreId={{j.offreId}}'>{{j.offreReference}}</a></td>
								<td>{% if j.invoiceId>0 %}<a href='/invoices?invoiceId={{j.invoiceId}}'>{{j.invoiceReference}}</a>{% endif %}</td>
								
								<td><a onclick="getJobPdf({{j.jobId}},'fr')" target="_blank"><img src="/themes/default/images/buttons/pdf.png"></a></td>
							</tr>
							{% endfor %}
							</tbody>
						</table>
						<h3>Offres</h3>
						<table>
							<thead><tr><td>Reference</td><td>Montant HT</td><td>Montage</td><td>Démontage</td><td>Statut</td><td></td></tr></thead>
							<tbody>
							{% for o in offres %}
							<tr>
								<td><a href='/quotes?offreId={{o.offreId}}'>{{o.reference}}</a></td>
								<td>{{o.priceHT}} &euro;</td>
								<td>{{o.startBuild}}</td>
								<td>{{o.endBuild}}</td>
								<td>{% if o.jobId>0 %}
									JOB: <a href='/jobs?jobId={{o.jobId}}'>{{o.jobReference}}</a>
									{% else %}
									{{o.status}}
									{% endif %}</td>
								<td><a onclick="getOffrePdf({{o.offreId}},'nl')" target="_blank"><img src="/themes/default/images/buttons/pdf.png"> nl</a>
									<a onclick="getOffrePdf({{o.offreId}},'fr')" target="_blank"><img src="/themes/default/images/buttons/pdf.png"> fr</a>
								</td>
							</tr>
							{% endfor %}
							</tbody>
						</table>
					</div>
				</div>	
				</td>
			</tr>
		</tbody>
	</table>
	
	<input class="button save" type="button" value="sauver" onclick="submit()">

	<input type="button" value="annuler / retour à la liste" onclick="document.location='/clients'" class="button cancel">
</form>
{% autoescape false %}
<form id="form" name="form" method="POST" class="offreForm" action='#'>
	<h1>Editer un job</h1>
	<input type="hidden" name="job[jobId]" id="jobId" value="{{jobId}}">
	<input type="hidden" name="job[offreId]" id="jobId" value="{{job.offreId}}">
	{% if job.status!='closed' %}
	<input class="button save" type="button" value="sauver" onclick="submit()">
	{% else %}
		<input class="button save" type="button" value="Débloquer" onclick="uncloseJob('{{job.jobId}}')">
	{% endif %}
	<input type="button" value="annuler / retour à la liste" onclick="document.location='/jobs'" class="button cancel" {{disabled}}>
	
	<table cellpadding="10" style="border:0;background:none">
		<tbody>
			<tr>
				<td>
				<h3>Status</h3>
				<table style="background:#ffffff">
					<tbody>
						
						
						
						
						<tr>
					<td>
					Reference:
					<b>{{job.reference}}</b>
					
					<br/>
					Type:
					<b>{{job.type}}</b>
					<br/>
					Offre: {{job.offreReference}}
					</td>
					<td >
					{% if job.status!='closed' %}<input type='button' value='Annuler ce job' class='button' onclick="deleteJob('{{job.jobId}}')" />{% endif %}
					</td>
				</tr>
				<tr>
					<td>
					Montant HTVA:
					<b>{{job.price}}</b>
					&euro;
					</td>
					<td>
					{% if job.error %} 
							<div class='alert'>
								Ce job comporte des erreurs.
							</div>
							{% endif %}
					</td>
				</tr>
				<tr>
					<td colspan='2'>
					Notes
					<br/>
					<textarea name="job[priceComments]" rows="3" style='width:90%'>{{job.priceComments}}</textarea>
					</td>
				</tr>
				
				
					</tbody>
				</table>
				
				<h3>Client</h3>
				
				<div id='clientDiv' {% if client.clientId<=0 %} class='alert' {% endif %}>
				<input type="hidden" name="job[clientId]" id="clientId" value="{{job.clientId}}" />
				<table>
					{% if client.clientType=='part' %}
					<tr>
						<td>
						<b>
						{{client.title}} {{client.firstname}} {{client.lastname}}</b>
						</td>
						<td>Téléphone: {{client.phone}}<br/>Fax: {{client.fax}}<br/>Mobile: {{client.mobile}}</td>
					</tr>
					{% else %}
					<tr>
						<td>
						<b>
						{{client.name}} {{client.cieType}}
						<br/>
						TVA: {{client.vat}}
						<br/>
						Contact: {{client.title}} {{client.firstname}} {{client.lastname}}
						</b>
						</td>
						<td>Téléphone: {{client.phone}}<br/>Fax: {{client.fax}}<br/>Mobile: {{client.mobile}}</td>
					</tr>
					{% endif %}
				</table>
			</div>
			
				<div id="clientDiv" {% if client.clientId<=0 %} class='alert' {% endif %} >

				
					<div id="clientAddress" style="margin-top:10px">
						<h3>Facturation</h3>
						<table>
							<tbody>
								<tr>
									<td colspan="2">
									Adresse
									<br>
									<input type="text"  name="client[address]" value="{{client.address}}" disabled  style="width:100%" />
									</td>
									<td>
									Numéro
									<br>
									<input type="text" disabled name="client[number]" value="{{client.number}}" class="numField" />
									</td>
								</tr>
								<tr>
									<td>
									Code postal
									<br>
									<input type="text" disabled name="client[zip]" value="{{client.zip}}" class="numField" />
									</td>
									<td>
									Ville
									<br>
									<input type="text" disabled name="client[city]" value="{{client.city}}" style="width:100%" />
									</td>
									<td>
									Pays
									<br>
									<input type="text" disabled name="client[country]" value="{{client.country}}" />
									
									</td>
								</tr>
								<tr>
									<td>
									Téléphone
									<br>
									<input type="text" disabled name="client[phone]" value="{{client.phone}}" />
									</td>
									<td>
									Mobile
									<br>
									<input type="text" disabled name="client[mobile]" value="{{client.mobile}}" />
									</td>
									<td>
									Autre
									<br>
									<input type="text" disabled name="client[phone2]" value="{{client.phone2}}" />
									</td>
								</tr>
								<tr>
									<td>
									Fax
									<br>
									<input type="text" disabled name="client[fax]" value="{{client.fax}}" />
									</td>
									<td>
									Email
									<br>
									<input type="text" disabled name="client[email]" value="{{client.email}}" style="width:100%" />
									</td>
									<td>
									Site web
									<br>
									<input type="text" disabled name="client[url]" value="{{client.url}}" style="width:100%" />
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div id="addressesDiv">
					<h3>Livraison</h3>
					<input type='button' onclick="copyAddress('job')" value="copier l'adresse de facturation" />
					<table id="address_delivery_table" style="">
						<tbody>
							<tr>
								<td colspan="2">
								Adresse
								<br>
								<input type="text" name="job[address]" value="{{job.address}}" style="width:100%">
								</td>
								<td>
								Numéro
								<br>
								<input type="text" name="job[number]"  value="{{job.number}}" class="numField">
								</td>
							</tr>
							<tr>
								<td>
								Code postal
								<br>
								<input type="text" name="job[zip]"  value="{{job.zip}}" class="numField">
								</td>
								<td>
								Ville
								<br>
								<input type="text" name="job[city]"  value="{{job.city}}">
								</td>
								<td>
								Pays
								<br>
								
								<select name="job[country]"  >

										<option value=""></option>
										{% for country in countries %}
										<option value="{{country}}"{% if country==job.country %} selected {% endif %} >{{country}}</option>
										{% endfor %}
								</select>
									
								
								</td>
							</tr>
							<tr>
								<td colspan="2">
								Contact
								<br>
								<input type="text" name="job[contact]"  value="{{job.contact}}" style="width:100%">
								</td>
								<td>
								</td>
							</tr>
							<tr>
								<td>
								Fax
								<br>
								<input type="text" name="job[fax]"  value="{{job.fax}}">
								</td>
								<td>
								Email
								<br>
								<input type="text" name="job[email]"  value="{{job.email}}">
								</td>
								<td>
								Téléphone
								<br>
								<input type="text" name="job[phone]" value="{{job.phone}}">
								</td>
							</tr>
							<tr>
								<td colspan="3">
								Notes
								<br>
								<textarea  name="job[offreComments]" style="width:80%">{{job.offreComments}}</textarea>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<h3>Planning</h3>
				<!--<input type="hidden" name="planningPreviewId" value="{{planning.previewId}}">
				<input type="hidden" name="planningBuildId" value="{{planning.buildId}}">
				<input type="hidden" name="planningInplaceId" value="{{planning.inplaceId}}">
				<input type="hidden" name="planningUnbuildId" value="{{planning.unbuildId}}">-->
				<table>
					<tbody>
						{% for p in planning %}
						<tr>
							<td>{{p.label}} <!--<input type="hidden" name="planning[{{p.planningType}}][planningId]" value="{{p.planningId}}">--> </td>
							<td>
							Du
							<input type="text" name="planning[{{p.planningType}}][startDate]" id="{{p.planningType}}_startDate" value="{{p.formatedStartDate}}" class="datepicker">
							
							</td>
							<td>
							Au
							<input type="text" name="planning[{{p.planningType}}][endDate]" id="{{p.planningType}}_endDate" value="{{p.formatedEndDate}}" class="datepicker">
							
							</td>
							<td>
							Responsable
							<select name="planning[{{p.planningType}}][userId]" id="userId">
								<option value="">...</option>
								{% for userId,username in users %}
									<option value="{{userId}}" {% if p.userId==userId%} selected {% endif %} >{{username}}</option>
								{% endfor %}
								
							</select>
							</td>
							<td>{% if p.etat=="PROBLEME" %} <div class='alert'> {% endif %}Etat <select  name="planning[{{p.planningType}}][etat]">
								{% for etat,label in planningStates %}
								<option value="{{etat}}" {% if etat==p.etat %} selected {% endif %} >{{label}}</option>
								
								 {% endfor %}
							</select>
							{% if p.etat=='PROBLEME' %} </div>{% endif %}</td>
						</tr>
						{% if p.planningType=='build' %}
						<tr><td></td><td colspan="4">Notes au montage<br><textarea  name="job[buildNotes]" style="width:95%">{{job.buildNotes}}</textarea></td></tr>
						{% elseif p.planningType=='unbuild' %}
						<tr><td></td><td colspan="4">Notes au démontage<br><textarea  name="job[unbuildNotes]" style="width:95%">{{job.unbuildNotes}}</textarea></td></tr>
						{% endif %}
						
						{% endfor %}
						
						<tr>
							<td>
							Commentaires
							<br>
							(interne)
							</td>
							<td colspan="4">
							<textarea id="planningComments" name="job[planningComments]" style="width:80%">{{job.planningComments}}</textarea>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="saveBut">

{% if job.status!='closed' %}
	<input class="button save" type="button" value="sauver" onclick="submit()">
	{% endif %}
	
				</div>
				<h3>Tentes</h3>
				
				
				{% if planning.build.startDate!='0000-00-00 00:00:00' and planning.unbuild.endDate!='0000-00-00 00:00:00' %}
				
				<table>
					<tbody>
						<tr>
							<td>
							Surface souhaitées
							<input type="text"  name="job[surface]" value="{{job.surface}}" class="numField">
							m2
							</td>
						</tr>
						<tr>
							<td>
							<table style="width:auto">
								<tbody>
									<tr>
										<td>
										<b>Disponibles</b>
										<br>
										<select id="t_available_tents" class="multiselect" multiple="multiple"  style="width:400px; height:150px;" rows="5">
											{% for tent in tents.available %}
											<option value="{{tent.tentId}}">{{tent.reference}} - {{tent.name}} - {{tent.color}}  - {{tent.m2}}m2 {{tent.inOption}} </option>
											{% endfor %}
											
										</select>
										</td>
										<td vertical-align="middle" style="vertical-align:middle">
										<input type="button" value="ajouter &gt;" onclick="addTent()">
										<br>
										<input type="button" value="&lt; enlever" onclick="removeTent()">
										</td>
										<td>
										<b>Choisies</b>
										<br>
										<select id="t_chosen_tents" class="multiselect" multiple="multiple"  style="width:400px; height:150px;" rows="5">
											{% for tent in tents.currentOffre %}
												<option class="{{tent.class}}" value="{{tent.tentId}}">{{tent.reference}} - {{tent.name}} - {{tent.color}}  - {{tent.m2}}m2 {{tent.options}} </option>
											{% endfor %}
										</select>
										<input type="hidden" name="job[tents]" id="t_hidden_chosen" value="{{job.tents}}">
										</td>
										
									</tr>
								</tbody>
							</table>
							</td>
						</tr>
						<tr>
							<td>
							Details
							<br>
							<textarea name="job[tentsComments]" style="width:100%;height:100px">{{job.tentsComments}}</textarea>
							</td>
						</tr>
						<tr>
							<td>
							Surface calculée
							<b>
								
							<input type="text" class="disable numField"  name="calculatedSurface" id="calculatedSurface" value="{{tents.calculatedSurface}}">
							m2
							</b>
							</td>
						</tr>
					</tbody>
				</table>
				
				<div class="saveBut">
					
{% if job.status!='closed' %}
	<input class="button save" type="button" value="sauver" onclick="submit()">
	{% endif %}
	
				</div>
				
				{% for tent in tents.currentOffre %}
				<table style="background:#c0c0c0" {% if tent.class=='alert' %} class='alert' {% endif %} >
					<tbody>
						<tr>
							<td colspan="3">
							<b>Tente {{tent.reference}} {{tent.name}}</b>
							</td>
						</tr>
						<tr>
							<td>Reference : <a href="/tents?tentId={{tent.tentId}}">{{tent.reference}}</a></td>
							<td>Propriétaire: {{tent.ownername}}</td>
							<td>Couleur : {{tent.color}}</td>
						</tr>
						<tr>
							<td>Largeur : {{tent.width}} m</td>
							<td>Longueur: {{tent.length}} m</td>
							<td>Surface : {{tent.m2}} m2</td>
						</tr>
						<tr>
							<td>
							Plancher
							<input type="radio" name="tents[{{tent.tentId}}][plancher]" value="0" {%if tent.plancher==0 %} checked {% endif %} />
							Non
							<input type="radio" name="tents[{{tent.tentId}}][plancher]" value="1" {%if tent.plancher==1 %} checked {% endif %} />
							Oui, surface:
							<input type="text" name="tents[{{tent.tentId}}][surfacePlancher]" value="{{tent.surfacePlancher}}">
							</td>
							<td>
							Sol
							<input type="text" name="tents[{{tent.tentId}}][sol]" value="{{tent.sol}}">
							</td>
							<td>
							Canalisations
							<input type="radio" name="tents[{{tent.tentId}}][canalisation]" value="1" {%if tent.canalisation==1 %} checked {% endif %} />
							Oui
							<input type="radio" name="tents[{{tent.tentId}}][canalisation]" value="0" {%if tent.canalisation==0 %} checked {% endif %} />
							Non
							</td>
						</tr>
						<tr>
							<td colspan="3">
							Autre / Detail / Niveau
							<br>
							<textarea name="tents[{{tent.tentId}}][other]" style="width:90%">{{tent.other}}</textarea>
							</td>
						</tr>
					</tbody>
				</table>
				{% endfor %}
				
				
				{% else %}
				<div class='alert'>
				Attention: vous devez définir les dates de <b>montage</b> et <b>démontage</b> pour pouvoir réserver des tentes.
				</div>
				{% endif %}
				
				
				<h3>Documents</h3>
				<table id='attachedFiles'>
					{% for d in documents %}
						<tr><td><a href='{{webRoot}}docs/jobs/{{job.jobId}}/{{d.url}}' target='_blank'>{{d.url}}</a></td><td>{% if d.type=='image' %}<img src="{{webRoot}}docs/jobs/{{jobs.jobId}}/{{d.url}}" style="height:60px"/>{% endif %}</td></tr>
					{% endfor %}
					<tr><td colspan='2'><input id="file_upload" name="file_upload" type="file"  /><input type='hidden' id='attachedFilesFolder' value='docs/jobs/{{job.jobId}}' /></td></tr>
				</table>
				<h3>Données financières</h3>
				<table id="fDatas">
					<thead>
						<tr>
							<th width="80%">Description</th>
							<th class="productPrice">Montant HTVA</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						{% for product in products %}
						
						<tr rel="{{product.productId}}">
							<td>
								<input type='hidden' name='products[{{product.productId}}][isFromOffre]' value='{{product.isFromOffre}}' />
								<textarea  name="products[{{product.productId}}][description]" class="productDescription"  >{{product.description}}</textarea></td>
							<td class="productPrice"><input type="text" name="products[{{product.productId}}][price]"   value="{{product.price}}" class="productPrice"  /> €</td>
							<td>{% if product.jobId==0 %} <a onclick="removeProduct($(this))"><img src="/themes/default/images/buttons/del.png" alt="Supprimer" title="Supprimer"></a>{% endif %}</td>
						</tr>
						
						{% endfor %}
					</tbody>
					<tfoot>
						<tr>
							<td style="text-align:right">Total HTVA</td>
							<td style="text-align:right">
							<b>{{productsTotal}}  €</b>
							<input type="hidden" name="job[price]" value="{{productsTotal}}">
							</td>
							<td></td>
						</tr>
						<tr>
							<td style="text-align:right">
							<select name="job[priceType]">
								<option value="htva" {% if job.priceType!='intra' %} selected {% endif %}>TVA (21%)</option>
								<option value="intra" {% if job.priceType=='intra' %} selected {% endif %}>Intra communautaire</option>
							</select>
							</td>
							<td style="text-align:right">{% if job.priceType!='intra' %} {{productsTotalTVA}} € {% else %} Intracommunautaire {% endif %}</td>
							<td></td>
						</tr>
						<tr>
							<td style="text-align:right;background-color:#ededed;">
							<b>TOTAL TTC à payer</b>
							</td>
							<td style="text-align:right;background-color:#ededed;">
							<b>{{productsTotalTTC}} €</b>
							</td>
							<td></td>
						</tr>
					</tfoot>
				</table>
				<input type="button" style="padding:2px;color:#000000" value="+ Ajouter une ligne au budget" onclick="addProduct2job()">
				<p>
					&nbsp;
				</p>
				<div class="saveBut">
				
	{% if job.status!='closed' %}
	<input class="button save" type="button" value="sauver" onclick="submit()">
	{% endif %}
	
				</div>
				
				<h3>Facturation</h3>
				<table id="fSlices">
					<thead>
						<tr>
							<th width="50%">Description</th>
							<th>Tranche</th>
							<th class="productPrice">Montant HT</th>
							<th class="productPrice">Montant TTC</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						{% for slice in slices %}
						<tr>
							<td>
							<textarea name="slices[{{slice.sliceId}}][comments]" class="sliceDescription" style="width:95%"  >{{slice.comments}}</textarea>
							</td>
							<td class="s">
							<input type="text" name="slices[{{slice.sliceId}}][slice]" value="{{slice.slice}}" style="width:50px"  />
							%
							</td>
							<td class="productPrice ht">
							<input type="text" name="slices[{{slice.sliceId}}][priceHT]" value="{{slice.priceHT}}" class="productPrice"  />
							€
							</td>
							<td class="productPrice ttc productPrice">{{slice.priceTTC}} €</td>
							<td>
							<input type="hidden" name="slices[{{slice.sliceId}}][status]" class="stat" value="{{slice.status}}" />
							<input type="hidden" name="slices[{{slice.sliceId}}][invoiceId]" class="stat" value="{{slice.invoiceId}}" />
							</td>
							<td>{% if slice.invoiceId>0 %}
								{% if slice.invoiceReference!='' %}
								<a href='/invoices?invoiceId={{slice.invoiceId}}'>{{slice.invoiceReference}}</a>
								{% else %}
								<a href='/invoices?invoiceId={{slice.invoiceId}}'>Facture en cours</a>
								{% endif %}
								
							
							{% else %}
							<a onclick="$(this).closest('tr').remove()">
							<img src="/themes/default/images/buttons/del.png" alt="Supprimer" title="Supprimer">
							</a>
								
								<input type='button' class='button' value='à facturer' onclick="createInvoice('{{job.jobId}}','{{slice.sliceId}}')" />
								
							{% endif %}
							</td>
						</tr>
						{% endfor %}
					</tbody>
					<tfoot {% if slicesTotalSlice!='100.00' %} class='alert' {% endif %} >
						<tr>
							<td style="text-align:right"></td>
							<td>{{slicesTotalSlice}} %</td>
							<td class="productPrice">{{slicesTotalPriceHT}} €</td>
							<td class="productPrice">{{slicesTotalPriceTTC}} €</td>
							<td></td>
							<td></td>
						</tr>
					</tfoot>
				</table>
				<input type="button" style="padding:2px;color:#000000" value="+ Ajouter une tranche" onclick="addFSlice()">
				<p>
					&nbsp;
				</p>
				<div class="saveBut">
					
	{% if job.status!='closed' %}
	<input class="button save" type="button" value="sauver" onclick="submit()">
	{% endif %}
	
				</div>
				<h3>Conditions de vente/location</h3>
				
				<textarea name="job[conditions]" style="width:100%;height:60px">{{job.conditions}}</textarea>
				<i>Vider et sauver pour remplir avec les données par défaut dans la langue du job.</i>
				<h3>Gestion</h3>
				<table>
					<tbody>
						<tr>
							<td>Date de la demande : <b>{{job.insertDate}}</b></td>
						</tr>
						<tr>
							<td>Responsable du job: <select name="job[userId]" id="userId">
								<option value="">...</option>
								{% for userId,username in users %}
									<option value="{{userId}}" {% if job.userId==userId%} selected {% endif %} >{{username}}</option>
								{% endfor %}
								
							</select></td>
						</tr>
					</tbody>
				</table>
				<h3>Notes</h3>
				<table>
					<tbody>
						<tr>
							<td>
							<textarea name="job[comments]" style="width:100%" rows="5">{{job.comments}}</textarea>
							</td>
						</tr>
					</tbody>
				</table>
				</td>
			</tr>
		</tbody>
	</table>
	
	{% if job.status!='closed' %}
	<input class="button save" type="button" value="sauver" onclick="submit()">
	{% endif %}

	<input type="button" value="annuler / retour à la liste" onclick="document.location='/jobs'" class="button cancel" {{disabled}}>
</form>

{% endautoescape %}
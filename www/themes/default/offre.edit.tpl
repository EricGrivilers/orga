{% autoescape false %}
<form id="form" name="form" method="POST" class="offreForm" action='#'>
	<h1>Editer une offre</h1>
	<input type="hidden" name="offre[offreId]" id="offreId" value="{{offreId}}">
	{% if not job.jobId %}
	<input class="button save" type="button" value="sauver" onclick="submit()">
	{% endif %}
	<input type="button" value="annuler / retour à la liste" onclick="document.location='/quotes'" class="button cancel">
	<table cellpadding="10" style="border:0;background:none">
		<tbody>
			<tr>
				<td>
				<h3>Status</h3>
				<table style="background:#ffffff">
					<tbody>
						<tr>
							<td></td>
							<td>
							Langue
							<select name="offre[language]">
								{% for lang in langs %}
								<option value="{{lang}}" {% if lang == offre.language %} selected {% endif %} >{{lang}}</option>
								{% endfor %}
							</select>
							</td>
							<td colspan="2"></td>
						</tr>
						<tr>
							<td>
							Reference:
							<b>{{offre.reference}}</b>
							<input type="hidden" name="offre[reference]" id="offreId" value="{{offre.reference}}">
							
							</td>
							<td>
							Statut
							{% if job.jobId %}
							JOB: <b><a href='/jobs?jobId={{job.jobId}}'>{{job.reference}}</a></b><input type='hidden' name='offre[jobId]' value='{{job.jobId}}' />
							{% else %}
							<select name="offre[status]" id="status" onchange="$('#form').submit()" {% if offre.error or job.jobId %} disabled {% endif %}>
								{% for key,value,t in status %}
								<option value="{{key}}" {%if key == offre.status %}} selected {% endif %} >{{value}}</option>
								{% endfor %}
								
							</select>
							
							{% endif %}
							
							
							{% if offre.error %} 
							<div class='alert'>
								Cette offre comporte des erreurs.
							</div>
							{% endif %}
							</td>
							<td colspan="2">
							Notes
							<br>
							<textarea name="offre[priceComments]" rows="3">{{offre.priceComments}}</textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td colspan="2">
							Montant:
							<b> {{offre.price}} &euro; HTVA</b>
							</td>
						</tr>
					</tbody>
				</table>
				<h3>Type</h3>
				<table>
					<tbody>
						<tr>
							<td>
							{% for ot,label in offreTypes %}
							<input type="radio" name="offre[offreType]" value="{{ot}}" {%if ot==offre.offreType %}checked{% endif %} />
							{{label}}
							{% endfor %}
							</td>
						</tr>
					</tbody>
				</table>
				<h3>Client</h3>
				<div id="clientDiv" {% if client.clientId<=0 %} class='alert' {% endif %} >

					<input type="hidden" name="offre[clientId]" id="clientId" value="{{offre.clientId}}" />
					<!--<input type="hidden" name="clientType" id="clientType" value="{{client.clientType}}" />-->

					<div id='clientType'>
						<input type='radio' name='client[clientType]' id="clientType1" value="cie"  {% if client.clientType=='cie' or client.clientType=='' %} checked='checked' {% endif %} />
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
									<input type="text" name="client[vat]" id="vat" value="{{client.vat}}"> Format: BE0123.456.789
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
				</div>
				<div id="addressesDiv">
					<h3>Livraison</h3>
					<input type='button' onclick="copyAddress('offre')" value="copier l'adresse de facturation" />
					<table id="address_delivery_table" style="">
						<tbody>
							<tr>
								<td colspan="2">
								Adresse
								<br>
								<input type="text" name="offre[address]" id="offre_address" value="{{offre.address}}" style="width:100%">
								</td>
								<td>
								Numéro
								<br>
								<input type="text" name="offre[number]" id="offre_number" value="{{offre.number}}" class="numField">
								</td>
							</tr>
							<tr>
								<td>
								Code postal
								<br>
								<input type="text" name="offre[zip]" id="offre_zip" value="{{offre.zip}}" class="numField">
								</td>
								<td>
								Ville
								<br>
								<input type="text" name="offre[city]" id="offre_city" value="{{offre.city}}">
								</td>
								<td>
								Pays
								<br>
								
								<select name="offre[country]" id="offre_country" >

										<option value=""></option>
										{% for country in countries %}
										<option value="{{country}}"{% if country==offre.country %} selected {% endif %} >{{country}}</option>
										{% endfor %}
								</select>
									
								
								</td>
							</tr>
							<tr>
								<td colspan="2">
								Contact
								<br>
								<input type="text" name="offre[contact]"  value="{{offre.contact}}" style="width:100%">
								</td>
								<td>
								</td>
							</tr>
							<tr>
								<td>
								Fax
								<br>
								<input type="text" name="offre[fax]"  value="{{offre.fax}}">
								</td>
								<td>
								Email
								<br>
								<input type="text" name="offre[email]"  value="{{offre.email}}">
								</td>
								<td>
								Téléphone
								<br>
								<input type="text" name="offre[phone]" value="{{offre.phone}}">
								</td>
							</tr>
							<tr>
								<td colspan="3">
								Notes
								<br>
								<textarea id="offre_comments" name="offre[offreComments]" style="width:80%">{{offre.offreComments}}</textarea>
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
							<td>{{p.label}} <!--<input type="hidden" name="planning[{{p.planningType}}][planningId]" value="{{p.planningId}}">--></td>
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
						</tr>
						{% endfor %}
						
						<tr>
							<td>
							Commentaires
							<br>
							(interne)
							</td>
							<td colspan="4">
							<textarea id="planningComments" name="offre[planningComments]" style="width:80%">{{offre.planningComments}}</textarea>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="saveBut">
					{% if not job.jobId %}
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
							<input type="text"  name="offre[surface]" value="{{offre.surface}}" class="numField">
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
										<select id="t_available_tents" class="multiselect" multiple="multiple"  style="width:500px; height:150px;" rows="5">
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
										<input type="hidden" name="offre[tents]" id="t_hidden_chosen" value="{{offre.tents}}">
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
							<textarea name="offre[tentsComments]" style="width:100%;height:100px">{{offre.tentsComments}}</textarea>
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
					{% if not job.jobId %}
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

						<tr><td><a href='{{webRoot}}docs/offres/{{offre.offreId}}/{{d.url}}' target='_blank'>{{d.url}}</a></td><td>{% if d.type=='image' %}<img src="{{webRoot}}docs/offres/{{offre.offreId}}/{{d.url}}" style="height:60px"/>{% endif %}</td>
							<td><a  onclick="deleteDocument(this,'offre','{{offre.offreId}}','{{d.url}}')"><img src="/themes/default/images/buttons/del.png"/></a></td>
						</tr>
					{% endfor %}
					<tr><td colspan='3'><input id="file_upload" name="file_upload" type="file"  /><input type='hidden' id='attachedFilesFolder' value='docs/offres/{{offre.offreId}}' /></td></tr>

				</table>
				
				<h3>Texte d'introduction à l'offre</h3>
				<textarea  name="offre[introText]" style="width:100%" rows="6">{{offre.introText}}</textarea>
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
							<td><textarea name="products[{{product.productId}}][description]" class="productDescription">{{product.description}}</textarea></td>
							
							<td class="productPrice"><input type="text" name="products[{{product.productId}}][price]" value="{{product.price}}" class="productPrice"  /> €</td>
							
							<td>{% if product.jobId==0 %} <a onclick="removeProduct($(this))"><img src="/themes/default/images/buttons/del.png" alt="Supprimer" title="Supprimer"></a>{% endif %}</td>
						</tr>
						
						{% endfor %}
					</tbody>
					<tfoot>
						<tr>
							<td style="text-align:right">Total HTVA</td>
							<td style="text-align:right">
							<b>{{productsTotal}}  €</b>
							<input type="hidden" name="offre[price]" value="{{productsTotal}}">
							</td>
							<td></td>
						</tr>
						<tr>
							<td style="text-align:right">
							<select name="offre[priceType]">
								<option value="htva" {% if offre.priceType!='intra' %} selected {% endif %}>TVA (21%)</option>
								<option value="intra" {% if offre.priceType=='intra' %} selected {% endif %}>Intra communautaire</option>
							</select>
							</td>
							<td style="text-align:right">{% if offre.priceType!='intra' %} {{productsTotalTVA}} € {% else %} Intracommunautaire {% endif %}</td>
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
				<input type="button" style="padding:2px;color:#000000" value="+ Ajouter une ligne au budget" onclick="addProduct2offre()">
				<p>
					&nbsp;
				</p>
				<div class="saveBut">
					{% if not job.jobId %}
	<input class="button save" type="button" value="sauver" onclick="submit()">
	{% endif %}
				</div>
				<h3>Options</h3>
				<table id="fOptions">
					<thead>
						<tr>
							<th width="80%">Description</th>
							<th class="productPrice">Montant HTVA</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						{% for option in productOptions %}
						
						<tr rel="{{option.productId}}">
							<td><textarea name="options[{{option.productId}}][description]" class="productDescription">{{option.description}}</textarea></td>
							{% if option.price=='0.00' or option.price=='' %}
							<td class="productPrice"><input type="text" name="options[{{option.productId}}][price]" value="Sur devis" class="productPrice" ></td>
							{% else %}
							<td class="productPrice"><input type="text" name="options[{{option.productId}}][price]" value="{{option.price}}" class="productPrice" > €</td>
							{% endif %}
							<td><a onclick="removeProduct($(this))"><img src="/themes/default/images/buttons/del.png" alt="Supprimer" title="Supprimer"></a></td>
						</tr>
						
						{% endfor %}
					</tbody>
					
				</table>
				<input type="button" style="padding:2px;color:#000000" value="+ Ajouter une ligne aux options" onclick="addOption()">
				<div class="saveBut">
					{% if not job.jobId %}
	<input class="button save" type="button" value="sauver" onclick="submit()">
	{% endif %}
				</div>
				<h3>Conditions de paiements</h3>
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
							<textarea name="slices[{{slice.sliceId}}][comments]" class="sliceDescription" style="width:95%">{{slice.comments}}</textarea>
							</td>
							<td class="s">
							<input type="text" name="slices[{{slice.sliceId}}][slice]" value="{{slice.slice}}" style="width:50px" onfocus="$(this).closest('tr').find('input').val('')">
							%
							</td>
							<td class="productPrice ht">
							<input type="text" name="slices[{{slice.sliceId}}][priceHT]" value="{{slice.priceHT}}" class="productPrice" onfocus="$(this).closest('tr').find('input').val('')">
							€
							</td>
							<td class="productPrice ttc productPrice">{{slice.priceTTC}} €</td>
							<td>
							<input type="hidden" name="slices[{{slice.sliceId}}][status]" class="stat" value="{{slice.status}}">
							
							</td>
							<td>
							<a onclick="$(this).closest('tr').remove()">
							<img src="/themes/default/images/buttons/del.png" alt="Supprimer" title="Supprimer">
							</a>
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
					{% if not job.jobId %}
	<input class="button save" type="button" value="sauver" onclick="submit()">
	{% endif %}
				</div>
				<h3>Conditions de vente/location</h3>
				
				<textarea name="offre[conditions]" style="width:100%;height:60px">{{offre.conditions}}</textarea>
				<i>Vider et sauver pour remplir avec les données par défaut dans la langue de l'offre.</i>
				<h3>Gestion</h3>
				<table>
					<tbody>
						<tr>
							<td>Date de l'offre : <b>{{offre.insertDate}}</b></td>
						</tr>
						<tr>
							<td>Créateur de l'offre: <b>{{offre.userName}}</b></td>
						</tr>
					</tbody>
				</table>
				<h3>Notes</h3>
				<table>
					<tbody>
						<tr>
							<td>
							<textarea name="offre[comments]" style="width:100%" rows="5">{{offre.comments}}</textarea>
							</td>
						</tr>
					</tbody>
				</table>
				</td>
			</tr>
		</tbody>
	</table>
	{% if not job.jobId %}
	<input class="button save" type="button" value="sauver" onclick="submit()">
	{% endif %}
	<input type="button" value="annuler / retour à la liste" onclick="document.location='/quotes'" class="button cancel">
</form>

{% endautoescape %}
<form id="t_form" name="t_form" method="POST" class="invoiceForm">
	<h1>Editer une facture</h1>
	<input type="hidden" name="invoice[invoiceId]" id="invoiceId" value="{{invoiceId}}">
	Les factures PDF se génèrent par défaut dans les 2 langues, FR et NL.
	<br>
	{% if invoice.status=='draft' %}
	<input class="button save" type="button" value="sauver" onclick="submit()">
	{% endif %}
	<input type="button" value="annuler / retour à la liste" onclick="document.location='/invoices'" class="button cancel" {{disabled}}>
	<table cellpadding="10" style="border:0;background:none">
		<tbody>
			<tr>
				<td>
				<table style="background:#ffffff">
					<tbody>
						<tr>
							<td>
							Reference:
							<b>{{invoice.reference}}</b>
							<input type='hidden' name='invoice[reference]' value='{{invoice.reference}}' />
							{% if invoice.jobId>0 %}
							<br>
							Job: 
							{{invoice.jobReference}}
							
							{% endif %}
							
							
							
							</td>
							<td>
							Langue:
							<select name="invoice[language]">
								{% for lang in langs %}
								<option value="{{lang}}" {% if lang == invoice.language %} selected {% endif %} >{{lang}}</option>
								{% endfor %}
							</td>
							<td>
								Statut: 
							{% if invoice.status!='paid' %}
							<select name="invoice[status]"  onchange="$('#t_form').submit()">
								
									{% if invoice.status=='draft' %}
										<option value="draft" selected >En cours de rédaction</option>
										<option value="ok" >Envoyée au client</option>
									{% elseif invoice.status=='ok' %}
										<option value="ok" selected >Envoyée au client</option>
										<option value="paid" >Payée</option>
									{% endif %}
							</select>
							
							
							
							{% if invoice.r1==1 and invoice.r1Date=='0000-00-00' %}
							<input type='button' class='rappel button' value='1er rappel' onclick="createRappel('{{invoiceId}}','r1');"/>
							{% elseif invoice.r2==1 and invoice.r2Date=='0000-00-00' %}
							<input type='button' class='rappel button' value='2eme rappel' onclick="createRappel('{{invoiceId}}','r2');"/>
							{% elseif invoice.med==1 and invoice.medDate=='0000-00-00' %}
							<input type='button' class='rappel button' value='Mise en demeure' onclick="createRappel('{{invoiceId}}','med');"/>
							{% endif %}
		
							
							
							
							
							{% else %}
							<input type='hidden' name='invoice[status]' value='paid' />
							Payée le <input type='text' name='invoice[paymentDate]' value='{{invoice.paymentDate}}' class="datepicker2" /> <input class="button save" type="button" value="sauver" onclick="submit()">
							{% endif %}
							</td>
						</tr>
						{% if grandTotal<0 %}
						<tr><td colspan='3'><div {{ invoice.creditNote?"":"class='alert'" }}><b>Note de crédit relative à la facture</b> <input type='text' name='invoice[creditNote]' id='creditNote' value='{{invoice.creditNote}}'/></div></td></tr>
							
							{% endif %}
					</tbody>
				</table>
				<h3>Type</h3>
				<table>
					<tbody>
						<tr>
							<td>
								{% for key,label in offreTypes %}
									<input type="radio" name="invoice[offreType]" value="{{key}}" {{disabled}} {% if key==invoice.offreType %} checked {% endif %}> {{label}}
							
								{% endfor %}
							
							</td>
						</tr>
					</tbody>
				</table>
				
				<h3>Client</h3>
				
				<h3>Client</h3>
				<div id="clientDiv" {% if invoice.clientId<=0 %} class='alert' {% endif %} >

					<input type="hidden" name="invoice[clientId]" id="clientId" value="{{invoice.clientId}}" {{disabled}} />
					<!--<input type="hidden" name="clientType" id="clientType" value="{{invoice.clientType}}" />-->

					<div id='clientType'>
						<input type='radio' name='invoice[clientType]' id="clientType1" value="cie"  {% if invoice.clientType=='cie' or invoice.clientType=='' %} checked='checked' {% endif %} {{disabled}} />
						<label for="clientType1">
							Société
						</label>
						<input type='radio' name='invoice[clientType]' id="clientType2" value="part" {% if invoice.clientType=='part' %} checked='checked' {% endif %} {{disabled}} />
						<label for="clientType2">
							Particulier
						</label>
					</div>
					<div  >

						<table>
							<tbody id="ciePanel" {% if invoice.clientType=='part' %} style="display:none" {% endif %} >

								<tr>
									<td>
									Nom
									<span class="required" rel="t_client_name">*</span>
									</td>
									<td>
									<input type="text" name="invoice[name]" id="name" value="{{invoice.name}}" style="width:90%" {{disabled}} >
									<div id='logs'></div>
									</td>
									<td>TVA</td>
									<td>
									<input type="text" name="invoice[vat]" id="vat" value="{{invoice.vat}}" {{disabled}}> Format: BE0123.456.789
									</td>
									<td>Forme juridique</td>
									<td>
									<select id="cieType" name="invoice[cieType]" {{disabled}}>
										<option value=""></option>
										{% for ct in cieTypes %}
										<option value="{{ct}}" {%if ct==invoice.cieType %} selected {% endif %}>{{ct}}</option>
										{% endfor %}
									</select>
									<br>
									autre
									<input type="text" id="otherCieType" name="invoice[otherCieType]" value="" {{disabled}}>
									</td>
								</tr>
							</tbody>
							<tbody>
								<tr>
									<td>Contact</td>
									<td>
									<select name="invoice[clientTitle]"  id="clientTitle" {{disabled}}>
										<option value=""></option>
										{% for ct in clientTitles %}
										<option value="{{ct}}" {% if ct==invoice.clientTitle %}selected{% endif %}>{{ct}}</option>
										{% endfor %}}
									</select>
									</td>
									<td>Nom</td>
									<td>
									<input type="text" name="invoice[lastname]" id="lastname" value="{{invoice.lastname}}" style="width:100%" {{disabled}}>
									</td>
									<td>Prénom</td>
									<td>
									<input type="text" name="invoice[firstname]" id="firstname" value="{{invoice.firstname}}" style="width:100%" {{disabled}}>
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
									<input type="text" name="invoice[address]" id="client_address" value="{{invoice.address}}" style="width:100%" {{disabled}}>
									</td>
									<td>
									Numéro
									<br>
									<input type="text" name="invoice[number]" id="client_number" value="{{invoice.number}}" class="numField" {{disabled}}>
									</td>
								</tr>
								<tr>
									<td>
									Code postal
									<br>
									<input type="text" name="invoice[zip]" id="client_zip" value="{{invoice.zip}}" class="numField" {{disabled}}>
									</td>
									<td>
									Ville
									<br>
									<input type="text" name="invoice[city]" id="client_city" value="{{invoice.city}}" style="width:100%" {{disabled}}>
									</td>
									<td>
									Pays
									<br>
									<select name="invoice[country]" id="client_country" {{disabled}}>

										<option value=""></option>
										{% for country in countries %}
										<option value="{{country}}"{% if country==invoice.country %} selected {% endif %} >{{country}}</option>
										{% endfor %}
									</select>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<h3>Données financières</h3>
				{% if invoice.jobId>0 %}
				<table >
					<thead style='border-bottom:1px solid #ccc'>
						<tr>
							<th width="80%">Dans offre</th>
							<th class="productPrice">Montant HTVA</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						{% for p in products %}
						<tr rel="{{p.productId}}">
							<td>
								<input type='hidden' name="products[{{p.productId}}][isFromOffre]" value='1' />
								<input type="hidden" name="products[{{p.productId}}][description]" value="{{p.description}}" class="productPrice" >
							<textarea  class="productDescription" disabled>{{p.description}}</textarea>
							</td>
							<td class="productPrice">
							<input type="hidden" name="products[{{p.productId}}][price]" value="{{p.price}}" class="productPrice"  >
							<input type="text"  value="{{p.price}}" class="productPrice" disabled > 
							€
							</td>
							<td>
							
							</td>
						</tr>
						{% endfor %}
					</tbody>
					<tfoot>
						<tr>
							<td style="text-align:right">Total HTVA :</td>
							<td style="text-align:right">
							{{productsTotalHT}}  €
							
							</td>
							<td></td>
						</tr>
						<tr style='border-bottom:1px solid #ccc'>
							<td style="text-align:right">
							<select name="p_priceType" {{disabled}}>
								<option value="htva" {% if invoice.priceType=='htva' %} selected {% endif %} >TVA (21%)</option>
								<option value="intra" {% if invoice.priceType=='intra' %} selected {% endif %}>Intra communautaire</option>
							</select>
							</td>
							<td style="text-align:right">{{productsTVA}}</td>
							<td></td>
						</tr>
						<tr>
							<td style="text-align:right;background-color:#ededed;">TOTAL TTC :</td>
							<td style="text-align:right;background-color:#ededed;">{{productsTotalTTC}} €</td>
							<td></td>
						</tr>
					</tfoot>
				</table>
				
				<p>
					&nbsp;
				</p>
				<table>
					<thead style='border-bottom:1px solid #ccc'>
						<tr>
							<th width="40%">Condition</th>
							<th width="20%">Tranche</th>
							<th width="20%"></th>
							<th class="productPrice">Montant HTVA</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>{{slice.comments}}</td>
							<td >{{slice.slice}} %</td>
							<td style="text-align:right;background-color:#ededed;">TOTAL HTVA :</td>
							<td style="text-align:right;background-color:#ededed;"> {{slice.priceHT}} €
							
							</td>
							
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td style="text-align:right;background-color:#ededed;">TVA :</td>
							<td style="text-align:right;background-color:#ededed;"> {{sliceTVA}}</td>
							
							<td></td>
						</tr>
					</tbody>
				</table>
				{% endif %}
				{% if isLastSlice==1 or invoice.jobId<=0%}
				<table id="fDatas">
				
					<thead style='border-bottom:1px solid #ccc'>
						<tr>
							<th width="80%">Hors offre</th>
							<th class="productPrice">Montant HTVA</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						
						{% if outJobHT!=0 and isLastSlice==1 %}
							{% for p in newproducts %}
							
							<tr rel="{{p.productId}}">
								<td>
									<input type='hidden' name="products[{{p.productId}}][isFromOffre]" value='0' />
								
								<textarea  name="products[{{p.productId}}][description]" class="productDescription" >{{p.description}}</textarea>
								</td>
								<td class="productPrice">
								
							<input type="text" name="products[{{p.productId}}][price]" value="{{p.price}}" class="productPrice"  /> 
								€
								</td>
								<td>
								{% if disabled=='' %}
								<a onclick="removeProduct($(this))">
								<img src="/themes/default/images/buttons/del.png" alt="Supprimer" title="Supprimer">
								</a>
								{% endif %}
								</td>
							</tr>
							{% endfor %}
						{% endif %}
					</tbody>
					{% if outJobHT!=0 and isLastSlice==1 %}
					<tfoot>
						<tr>
							<td style="text-align:right">Total HTVA :</td>
							<td style="text-align:right">
							{{outJobHT}}  €
							
							</td>
							<td></td>
						</tr>
						<tr>
							<td style="text-align:right">
							<select name="np_priceType" {{disabled}}>
								<option value="htva" {% if invoice.priceType=='htva' %} selected {% endif %} >TVA (21%) :</option>
								<option value="intra" {% if invoice.priceType=='intra' %} selected {% endif %}>Intra communautaire</option>
							</select>
							</td>
							<td style="text-align:right">{{outJobTVA}}</td>
							<td></td>
						</tr>
						<tr>
							<td style="text-align:right;background-color:#ededed;">TOTAL TTC :</td>
							<td style="text-align:right;background-color:#ededed;">{{outJobTTC}} €</td>
							<td></td>
						</tr>
					</tfoot>
					{% endif %}
				</table>
				{% if disabled=='' %}
				<input type="button" style="padding:2px;color:#000000" value="+ Ajouter une ligne au budget" onclick="addProduct2invoice()"  />
				{% endif %}
				{% endif %}
				<table style='border:1px solid #000;font-weight:bold'>
					<tbody><tr>
							<td style='width:80%;text-align:right;'>
							<b>A payer :</td><td> {{grandTotal}} €</b>
								
							</td>
					</tr></tbody>
				</table>
				
			<input type="hidden" name="invoice[priceHT]" value="{{grandTotalHT}}" {{disabled}}>
				
				
				<h3>Conditions de vente/location</h3>
				<input type="checkbox" id="conditions1" name="invoice[conditions1]" value="1" {% if invoice.conditions1==1 %} checked {% endif %} {{disabled}}>
				{% if invoice.language=='nl' %}		
Betalingsvoorwaarden: contant
Communicatie: factuur nummer.
				{% else %}
Conditions de paiement: comptant
Communication à mentionner: le numéro de cette facture. 
				{% endif %}
				<br>
				<input type="checkbox" id="conditions2" name="invoice[conditions2]" value="1" {% if invoice.conditions2==1 %} checked {% endif %} {{disabled}}>
				{% if invoice.language=='nl' %}		
				De betaling van uw voorschot, bevestigt uw bestelling.
				{% else %}
				Le paiement de votre acompte confirme votre commande.
				{% endif %}
				<!--textarea name='t_conditions' style='width:100%;height:60px'>-->
				<h3>Notes</h3>
				<table>
					<tbody>
						<tr>
							<td>
							<textarea name="invoice[comments]" style="width:100%" rows="5" {{disabled}}>
							</textarea>
							</td>
						</tr>
					</tbody>
				</table>
				</td>
			</tr>
		</tbody>
	</table>
	{% if invoice.status=='draft'  %}
	<input class="button save" type="button" value="sauver" onclick="submit()">
	{% endif %}
	<input type="button" value="annuler / retour à la liste" onclick="document.location='/invoices'" class="button cancel" {{disabled}}>
</form>
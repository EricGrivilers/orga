<form id="t_form" name="t_form" method="POST">
	<h1>Editer une tente</h1>
	<input type="hidden" name="tent[tentId]" id="tentId" value="{{tent.tentId}}">
	<input type="hidden" name="tent[year]"  value="{{tent.year}}">
	<input class="button save" type="button" value="sauver" onclick="submitForm()">
	<input type="button" value="annuler / retour à la liste" onclick="document.location='/tents'" class="button cancel">
	<table cellpadding="10" style="border:0;background:none">
		<tbody>
			<tr>
				<td>
				<table>
					<tbody>
						<tr>
							<td>Reference</td>
							<td>
							<b>{{tent.reference}}</b>
							</td>
						</tr>
						<tr>
							<td>Nom de la tente</td>
							<td>
							<input type="text" name="tent[name]"  value="{{tent.name}}" style="width:100%">
							</td>
						</tr>
						<tr>
							<td>Propriétaire</td>
							<td>
							<table>
								<tbody>
									<tr><td>
										
										<input type="hidden" id="clientId" name="tent[ownerId]" value="{{tent.ownerId}}">
										
										<select name='tent[ownerType]' id="t_owner_type">
											<option value='organic' {{ tent.ownerId==0? "selected":"" }}>Organic</option>
									
										<option value='cie' {{ tent.clientType=='cie'? "selected":"" }} >Société</option>
										<option value='part'{{ tent.clientType=='part'? "selected":"" }} >Particulier</option>
										
									</select></td><td><div id='clientDiv'>
										<input type="text" name="client[name]" value="{{tent.client}}" id="name" {% if tent.clientType=='part' or tent.ownerId==0 %} style='display:none' {% endif %} />
										<input type="text" name="client[lastname]" value="{{tent.client}}" id="lastname" {% if tent.clientType=='cie' or tent.ownerId==0 %} style='display:none' {% endif %} />
										
										
										<div id='clientType' >
										<input type="radio" name="client[clientType]" value='part' {{ tent.clientType=='part'? "checked":"" }} id="clientType2" />
										<input type="radio" name="client[clientType]" value='cie' {{ tent.clientType=='cie'? "checked":"" }} id="clientType1" />
										
										</div>
									</div></td></tr>
									<!--<tr>
										<td width="120px">
										<input type="radio" name="tent[ownerType]" id="t_owner_type" checked="" value="organic">
										Organic
										</td>
										<td></td>
									</tr>
									<tr>
										<td>
										<input type="radio" name="tent[ownerType]" id="t_owner_type" value="other">
										
										Autre
										</td>
										<td>
										<table>
											<tbody>
												<tr>
													<td> <input type="radio" name="client[clientType]" id="t_client_type" value="cie">Cie</td>
													<td>
													<input type="hidden" id="clientId" name="tent[ownerId]" value="{{tent.ownerId}}">
													<input type="text" name="client[name]"  value="{{tent.client}}" style="width:300px" />
													</td>
												</tr>
												<tr>
													<td><input type="radio" name="client[clientType]" id="t_client_type" value="part">	Particulier</td>
													<td>
													<input type="text" name="client[lastname]"  value="{{tent.client}}" style="width:300px" />
													</td>
												</tr>
											</tbody>
										</table>
										</td>
									</tr>-->
								</tbody>
							</table>
							</td>
						</tr>
						<tr>
							<td>Kit</td>
							<td>
							<input type="radio" name="tent[kit]" value="1" {% if tent.kit==1 %} checked {% endif %} />
							Oui
							<input type="radio" name="tent[kit]" value="0" {% if tent.kit==0 %} checked {% endif %}>
							Non
							</td>
						</tr>
					</tbody>
				</table>
				<table>
					<tbody>
						<tr>
							<td>
							Hivernage
							<input type="checkbox" name="t_winter" id="t_winter" value="1">
							-  Offre:
							<a href="/quotes?offreId=0"></a> - Job:
							<a href="/jobs?jobId="></a>
							<input type="hidden" name="t_winterOffreId" value="">
							<input type="hidden" name="t_winterJobId" value="">
							</td>
						</tr>
					</tbody>
				</table>
				<table>
					<tbody>
						<tr>
							<td>
							Longueur
							<input type="text" name="tent[length]" id="t_length" value="{{tent.length}}" onchange="document.getElementById('t_m2').value=document.getElementById('t_length').value*document.getElementById('t_width').value" class="numField">
							m
							</td>
							<td>
							Largeur
							<input type="text" name="tent[width]" id="t_width" value="{{tent.width}}" onchange="document.getElementById('t_m2').value=document.getElementById('t_length').value*document.getElementById('t_width').value" class="numField">
							m
							</td>
							<td>
							Surface
							<input type="text" name="tent[m2]" id="t_m2" value="{{ tent.length*tent.width}}" class="disable numField">
							m²
							</td>
						</tr>
					</tbody>
				</table>
				<table>
					<tbody>
						<tr>
							<td>Couleur</td>
							<td>
							<select name="tent[color]" id="color">
								<option value="">Choisir...</option>
							{% for color in colors %}
							<option value="{{color}}" {% if color==tent.color %} selected {% endif %} >{{color}}</option>
							{% endfor %}
								

							</select>
							ou autre
							<input type="text" name="new_color" id="new_color">
							</td>
						</tr>
						<tr>
							<td>Poids</td>
							<td>
							<input type="text" name="tent[weight]" id="t_weight" value="{{tent.weight}}" class="numField">
							kg
							</td>
						</tr>
						<tr>
							<td>Piquets</td>
							<td>
							<input type="radio" name="tent[piquetsBool]" value="1" {% if tent.piquets>0 %} checked {% endif %}>
							Oui, nombre :
							<input type="text" name="tent[piquets]"  value="{{tent.piquets}}" class="numField">
							piquets

							<input type="radio" name="tent[piquetsBool]" value="0"  {% if tent.piquets==0 %} checked {% endif %} />
							Non
							</td>
						</tr>
					</tbody>
				</table>

				</td>
				<td>
				<table>
					<tbody>
						<tr>
							<td>Etat de la tente</td>
							<td>
							<input type="radio" name="tent[etatBool]" value="OK"  {% if tent.etat=='OK' %} checked {% endif %} />
							OK, en bon état
							<br>
							<input type="radio" name="tent[etatBool]"   {% if tent.etat!='OK' %} checked {% endif %} />

							<select id="t_etat" name="tent[etat]">
								<option value=""></option>
								{% for etat in etats %}
								<option value="{{etat}}" {% if etat==tent.etat %} selected {% endif %} >{{etat}}</option>
								{% endfor %}
								
							</select> ou
							<input type="text" name="newEtat" id="newEtat">
							</td>
						</tr>
						<tr>
							<td>Commentaires</td>
							<td>
							<textarea id="t_comments" name="tent[comments]" style="width:100%" rows="10">{{tent.comments}}</textarea>
							</td>
						</tr>
					</tbody>
				</table>
				</td>
			</tr>
		</tbody>
	</table>
	<h3>Documents</h3>
				<table id='attachedFiles'>
					{% for d in documents %}

						<tr><td><a href='{{webRoot}}docs/tents/{{tent.tentId}}/{{d.url}}' target='_blank'>{{d.url}}</a></td><td>{% if d.type=='image' %}<img src="{{webRoot}}docs/tents/{{tent.tentId}}/{{d.url}}" style="height:60px"/>{% endif %}</td>
							<td><a  onclick="deleteDocument(this,'tent','{{tent.tentId}}','{{d.url}}')"><img src="/themes/default/images/buttons/del.png"/></a></td>
							
						</tr>
					{% endfor %}
					<tr><td colspan='3'><input id="file_upload" name="file_upload" type="file"  /><input type='hidden' id='attachedFilesFolder' value='docs/tents/{{tent.tentId}}' /></td></tr>

				</table>
	<table>
		<thead style='border-bottom:1px solid #ccc'><td>Job</td><td width='30%'>Du</td><td width='30%'>Au</td></thead>
		<tbody>
			{% for job in jobs %}
			<tr>
				<td>{{job.reference}}</td>
				<td >{{job.startBuild}}</td>
				<td>{{job.endBuild}}</td>
			</tr>
			{% endfor %}
		</tbody>
	</table>
	<table>
		<thead style='border-bottom:1px solid #ccc'><td>Offre</td><td width='30%'>Du</td><td width='30%'>Au</td></thead>
		<tbody>
			{% for offre in offres %}
			<tr>
				<td>{{offre.reference}}</td>
				<td>{{offre.startBuild}}</td>
				<td>{{offre.endBuild}}</td>
			</tr>
			{% endfor %}
		</tbody>
	</table>
	<input class="button save" type="button" value="sauver" onclick="submitForm()">
	<input type="button" value="annuler / retour à la liste" onclick="document.location='/tents'" class="button cancel">
</form>
<div id="users">
	
	<div id="{{ tab.id }}">
		<table id='table_{{tab.id}}' class='tablesorter'>
			<thead>
				<tr>
				{% for col in cols %}
				<th >{{col.label}}</th>
				{% endfor %}
				</tr>
			</thead>
			<tbody>
				{% for row in rows %}
				<tr {% if row.issue>0 %} class='alert' {% endif %}>
					{% for cell in row %} 
						
							<td class='{{col.id}}'>{{cell}}</td>
						
					{% endfor %}
				</tr>
				{% endfor %}
			</tbody>
		</table>
	</div>
	
</div>
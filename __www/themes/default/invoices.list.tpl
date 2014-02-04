<div id="invoices">
	<ul>

		{% for tab in tabs %}
		<li>
			<a href="#{{ tab.id }}">{{ tab.label }}</a>
		</li>
		{% endfor %}
	</ul>
	{% for tab in tabs %}
	<div id="{{ tab.id }}">
		<table id='table_{{tab.id}}' class='tablesorter'>
			<thead>
				
				<tr>
					<th></th>
				{% for col in cols %}
				<th >{{col.label}}</th>
				{% endfor %}
				</tr>
			</thead>
			<tbody>
				{% for row in tab.rows %}
				<tr {% if row.issue>0 %} class='alert' {% endif %}>
					
					{% for cell in row %} 
						
							<td class='{{col.id}}'>{{cell}}</td>
						
					{% endfor %}
				</tr>
				{% endfor %}
			</tbody>
		</table>
	</div>
	{% endfor %}
</div>
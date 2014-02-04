<div id="tents">
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
				{% for col in cols %}
				<th >{{col.label}}</th>
				{% endfor %}
				</tr>
			</thead>
			<tbody>
				{% for row in tab.rows %}
				<tr {% if row.issue==2 %} class='alert' {% elseif row.issue==1 %} class='alertlow' {% endif %}>
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
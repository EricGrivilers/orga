<form id="t_form" name="t_form" method="POST"><h1>Editer un utilisateur</h1>
<input type="hidden" name="userId" id="userId" value="{{userId}}">
<input class="button save" type="button" value="sauver" onclick="submit()">
	
	<input type="button" value="annuler / retour à la liste" onclick="document.location='/quotes'" class="button cancel">
	
	
	<table cellpadding="10" style="border:0;background:none">
  <tbody><tr>
    <td><table>
        <tbody><tr>
          <td>Titre<br>
            <select name="t_user_title" id="t_user_title">
            	{% for t in clientTitles %}
             <option value="{{t}}" {% if t==user.title %} selected {% endif %}>{{t}}</option>
             {% endfor %}
            
            </select></td>
          <td>Nom<br>
            <input type="text"  name="user[lastname]" value="{{user.lastname}}" style="width:90%" /></td>
          <td>Prénom<br>
            <input type="text"  name="user[firstname]" value="{{user.firstname}}" style="width:90%" /></td>
        </tr>
        <tr>
<<<<<<< HEAD
          <td colspan='3' >ISO (3 lettres) <input type="text" name="user[iso]" size="3" value="{{user.iso}}" /></td>
          <td>
        </tr>
        <tr>
=======
>>>>>>> 15a450940ad355bec01e2a184219d4794347992e
          <td>Adresse</td>
          <td valign="top"><input type="radio" name="user[address]" value="be" {% if user.address=='be' %} checked {% endif %} />
            Organic BE
            <input type="radio" name="user[address]" value="fr" {% if user.address=='fr' %} checked {% endif %} />
            Organic FR
            <input type="radio" name="user[address]" value="other" {% if user.address!='fr' and user.address!='be' %} checked {% endif %}>
            Autre </td>
          <td><textarea name="user[address_other]" style="width:80%">{{user.address}}</textarea></td>
        </tr>
        <tr>
          <td>Téléphone<br>
            <input type="text"  name="user[phone]" value="{{user.phone}}"></td>
          <td>Téléphone 2<br>
            <input type="text"  name="user[phone2]" value="{{user.phone2}}"></td>
          <td>Mobile<br>
            <input type="text"  name="user[mobile]" value="+{{user.mobile}}"></td>
        </tr>
        <tr>
          <td>Email<br>
            <input type="text"  name="user[email]" value="{{user.email}}" style="width:90%" /></td>
          <td>Fax<br>
            <input type="text"  name="user[fax]" value="{{user.fax}}"></td>
          <td></td>
        </tr>
      </tbody></table>
      <h3>Droits d'accés</h3>
      <table>
      <tbody><tr><td>Statut <select name="user[status]" >
      	<option value="administrateur" {% if user.status=='administrateur' %} selected {% endif %} >Administrateur</option>
      	<option value="consultant" {% if user.status=='consultant' %} selected {% endif %}>Consultant</option>
      	<option value="partiel" {% if user.status=='partiel' %} selected {% endif %}>Partiel</option>
      	</select></td></tr>
      
      </tbody></table>
      <h3>Accés</h3>
      <table>
        <tbody><tr>
          <td>Identifiant</td><td>{{user.email}}</td>
        </tr>
        <tr>
          <td>Mot de passe</td><td><input type="button" value="générer un nouveau mot de passe et envoyer par mail" onclick="createPassword('{{user.userId}}')"></td>
        </tr>
      </tbody></table></td>
  </tr>
</tbody></table>
<input class="button save" type="button" value="sauver" onclick="submit()">
	
	<input type="button" value="annuler / retour à la liste" onclick="document.location='/quotes'" class="button cancel">
	</form>
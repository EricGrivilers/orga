<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{title}</title>
<meta name="keywords" content="{keywords}" />
<meta name="description" content="{description}" />
{styles}
<!--[if IE 5]>
<style type="text/css"> 
/* placer les corrections pour le modèle de boîte css pour IE 5.x dans ce commentaire conditionnel */
#sidebar1 { width: 180px; }
#sidebar2 { width: 190px; }
</style>
<![endif]-->
{headerScripts}
</head>
<body {onLoadScripts}>
{addOns}
<div id="container">
  <div id="logo" ><a href="index.php"><img src="{web}lib/templates/default/images/logo.png" /></a></div>
  <div id="header"> {header}
    {user}- <button><a href='/index.php?logout=true'>logout</a> </button></div>
  <div id="mainContent" style="border:0;background:none">
    <ul>
      <!-- inversé pour alignement à droite -->
      
      <!--<li><a href="#tab_home"><span>Accueil</span></a></li>
      <li><a href="#tab_clients"><span>Clients</span></a></li>
      <li><a href="#tab_offres"><span>Offres</span></a></li>
      <li><a href="#tab_jobs"><span>Jobs</span></a></li>
      <li><a href="#tab_agenda"><span>Agenda</span></a></li>
      <li><a href="#tab_tents"><span>Tentes</span></a></li>
      <li><a href="#tab_users"><span>Utilisateurs</span></a></li>-->
      <li><a href="/"><span>Accueil</span></a></li>
      <li><a href="/clients"><span>Clients</span></a></li>
      <li><a href="/offres"><span>Offres</span></a></li>
      <li><a href="/jobs"><span>Jobs</span></a></li>
      <li><a href="/agenda"><span>Agenda</span></a></li>
      <li><a href="/tents"><span>Tentes</span></a></li>
      <li><a href="/users"><span>Utilisateurs</span></a></li>
    </ul>
    <div id="contentWrapper">
      <div id="editor">
        <form name="editorForm" id="editorForm" enctype="multipart/form-data">
          <div style="text-align:right">
            <input type="button" onclick="cancelEditor()" value="Retour à la liste" class="formButton" />
          </div>
          <div id="editorFormContent"></div>
          <div style="text-align:right">
            <input type="submit" id="editorFormSubmit" value="Sauver"  class="formButton" />
            <input type="button" onclick="cancelEditor()" value="Annuler" class="formButton" />
          </div>
        </form>
      </div>
      <!--<div id="tab_home"> {#home} </div>
      <div id="tab_clients"> {#clients} </div>
      <div id="tab_offres"> {#offres} </div>
      <div id="tab_jobs"> {#jobs} </div>
       <div id="tab_tents"> {#tents} </div>
      <div id="tab_agenda"> {#calendar} </div>
      <div id="tab_users"> {#users} </div>-->
      <div id="tab_home"></div>
      <div id="tab_clients"></div>
      <div id="tab_offres"></div>
      <div id="tab_jobs"></div>
       <div id="tab_tents"></div>
      <div id="tab_agenda"></div>
      <div id="tab_users"></div>
    </div>
    <!-- end #mainContent --> 
  </div>
  <div id="footer"> {footer}
    &copy; ORGANIC CONCEPT - <a href='mailto:didier@organic-concept.com'>Contacter l'administrateur</a> - <a href='mailto:info@caravanemedia.com'>Signaler un problème technique</a> 
    <!-- end #footer --> 
  </div>
  <!-- end #container --> 
</div>
<!--<div id="dialog-confirm" title="Empty the recycle bin?">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>These items will be permanently deleted and cannot be recovered. Are you sure?</p>
</div>-->
</body>
</html>

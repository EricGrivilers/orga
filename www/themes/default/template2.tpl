<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{{title}}</title>
<meta name="keywords" content="{{keywords}}" />
<meta name="description" content="{{description}}" />
<script type='text/javascript'>var web="{{webRoot}}";</script>
{{styles}}
{{scripts}}
</head>
<body {{onLoadScripts}}>
{{addOns}}
<div id="container" class="container">
  <div class='span-6'><a href="index.php"><img src="{{web}}themes/default/images/logo.png" /></a></div>
  <div class='span-17 last'>{{header}}
    {{user}}  <a href='/index.php?logout=true'>logout</a></div>
  <div class="span-24 last" style='text-align:right'>
 
  {{menu}}
  </div>
   <div class="span-24" id="contentWrapper">
   
   
   {{content}}
   
    
    <!-- end #mainContent --> 
  </div>
  <div id="footer" class="span-24"> {{footer}}
    &copy; ORGANIC CONCEPT - <a href='mailto:didier@organic-concept.com'>Contacter l'administrateur</a> - <a href='mailto:info@caravanemedia.com'>Signaler un problème technique</a> - V.2.0.1
    <!-- end #footer --> 
  </div>
  <!-- end #container --> 
</div>

</body>
</html>

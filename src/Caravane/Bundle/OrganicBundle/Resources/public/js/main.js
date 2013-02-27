$(function() {
	$('div.btn-group button').click(function(){
		target=$(this).attr('data-target');
		$(target).attr('value', $(this).attr('rel'));
	})
});


$(document).ready(function() {
	initClient();
});





function initClient() {
	if($('#caravane_bundle_organicbundle_clienttype_clienttype').val()=='part') {
		$('#cieonly').hide();
	}
	$('div.btn-group button').click(function(){
		target=$(this).attr('data-target');
		if($(this).attr('rel')=='part') {
			$('#cieonly').hide();
		}else {
			$('#cieonly').show();
		}
	})
}

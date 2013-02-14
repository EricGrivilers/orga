 var userId=0;
 var meOnly=false;
 
 var logs;

  //var web="http://organic-dev.local";

 $(document).ready(function() {
	 
	//$('#mainContent').tabs();
	//$("#mainContent").tabs( { selected: 4 } );
	$('a[title]').qtip();
	
	$('#mainContent').tabs({
		select: function(event, ui) {
			cancelEditor();
		},
		show: function(event, ui) {
			$('#calendar').fullCalendar('render');
		},
		selected:0

	});
	$("#mainContent > ul > li").each(function() {
		$(this).prependTo($(this).parent());
	}); 
	
	
	/*
	$('.autoFill').each(function() {
			autoFill($(this));
		});
	*/
  	if($('#t_form').hasClass('offreForm') && $('#t_status').val()!='draft') {
		$('#t_form input').not('#t_status').not('.invoice').attr('disabled',true);
		$('.save').remove();
	}
	if($('#t_form').hasClass('offreForm') ) {
		$('.pEtat').remove();
		//$('.save').remove();
	}
	
	
  	
	
  
	displayTents();
	displayClients();
	displayOffres();
	displayInvoices();
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'agendaDay,agendaWeek,month'
			},
			
			//selectable: true,
			//selectHelper: true,
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
			editable: true,
			
			
			events: "/ajax.php?action=getAgenda&userId="+$('#userId').val()+"&longBuild="+$('#longBuild').val(),
			eventMouseover: function(event) {
				//alert(event.id)
				if($('#calendar').fullCalendar('getView').name=='month'){
					$(this).find('.fc-event-title').closest('div').prepend("<a class='eventComment' href=\"javascript:getComments('"+event.jobId+"','"+event.planningType+"')\">note</a>");
				}
			},
			
			eventMouseout: function(event) {
				//alert(event.id)
				$('.eventComment').remove();
				
			},
			
			eventDrop: function(event) {
				//alert($.fullCalendar.formatDate(event.start,'yyyy-MM-dd HH:mm:ss'));
				saveCalendar(event.id,$.fullCalendar.formatDate(event.start,'yyyy-MM-dd HH:mm:ss'),$.fullCalendar.formatDate(event.end,'yyyy-MM-dd HH:mm:ss'));
				/*alert(event.id + ' was moved ' + delta + ' days\n' +
					'(should probably update your database)');*/
			},
			
			eventResize: function(event) {
				//alert($.fullCalendar.formatDate(event.start,'yyyy-MM-dd HH:mm:ss'));
				saveCalendar(event.id,$.fullCalendar.formatDate(event.start,'yyyy-MM-dd HH:mm:ss'),$.fullCalendar.formatDate(event.end,'yyyy-MM-dd HH:mm:ss'));
				/*alert(event.id + ' was moved ' + dayDelta + ' days\n' +
					'(should probably update your database)');*/
			},
			
			loading: function(bool) {
				if (bool) $('#loading').show();
				else $('#loading').hide();
			},
			firstDay:1



		});
		
		/*
		$('.fc-event-title').dblclick(function(e) {
			var r=$(this).html().split('-');
			jobId=r[1];
			document.location="/jobs/jobId="+jobId;
			e.stopPropagation();
		});
		*/
		
		$(".datepicker").datetimepicker({showOn: 'button',
			buttonImage: 'css/images/calendar.gif',
			buttonImageOnly: true,
			dateFormat: 'dd/mm/yy'
		});
		
		$(".datepicker2").datetimepicker({showOn: 'button',
			buttonImage: 'css/images/calendar.gif',
			buttonImageOnly: true,
			dateFormat: 'yy-mm-dd'
		});
		
		
		
		
		//$(".tablesorter").tablesorter();
		//$(".scrollable").fixedHeaderTable();
		
		
		 $('#file_upload').uploadify({
		    'uploader'  : '/js/uploadify.swf',
		    'script'    : '/js/uploadify.php',
		    'cancelImg' : '/js/cancel.png',
		    'folder'    : $('#attachedFilesFolder').val(),
		    'multi'       : true,
		    'auto'      : true,
		    'fileext'	:"doc,docx,pdf,xls,xlsx,gif,jpeg,jpg,png",
		    'onComplete'  : function(event, ID, fileObj, response, data) {
		    	
				$('#attachedFiles').prepend("<tr><td><a href='"+fileObj.filePath+"' target='_blank'>"+fileObj.name+"</a></td><td></td></tr>");
			 
			},
			'onError'     : function (event,ID,fileObj,errorObj) {
		      alert(errorObj.type + ' Error: ' + errorObj.info);
		    }
		  });
  
  /*
		
		$('#file_upload').uploadify({
			'uploader'  : '/js/uploadify/uploadify.swf',
			'script'    : '/js/uploadify/uploadify.php',
			'cancelImg' : '/js/uploadify/cancel.png',
			'folder'    : '/datas/'+$('#folder').val(),
			'multi'       : true,
			'auto'      : true,
			'onComplete'  : function(event, ID, fileObj, response, data) {
				$('#jobPicts').append("<li>"+fileObj.name+"</li>");
			 
			}
		  });
		  
		*/  
		  
		  
	$('a.lightbox').lightBox(); // Select all links with lightbox class
		
	$('#chatW').animate({scrollTop: $('#chatC').height()}, 8);
	
	
	
	
	$('.tablesorter').dataTable({
		"aaSorting": [[0,'desc']],
		"sPaginationType": "full_numbers",
		"iDisplayLength": 25,
		"aLengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
		"oLanguage": {
			"sLengthMenu": "Afficher _MENU_ ligne par page",
			"sZeroRecords": "Aucun résultat",
			"sInfo": "Affiche _START_ à _END_ de _TOTAL_ lignes",
			"sInfoEmpty": "Affiche 0 à 0 de 0 ligne",
			"sInfoFiltered": "(Filtré de _MAX_ total lignes)"
		}/*,
		"aoColumnDefs": [ 
            {
                "fnRender": function ( oObj, sVal ) {
                    return sVal.replace('-','');
                },
                "aTargets": [ 0 ]
            }
        ]*/
	});
	
	
	
	
});
 
 
 
 function autocompleteClient() {
 //	alert($('input [name=client[clientType]]:checked').val());
 	//alert($('input[name=client[clientType]]:checked').val());
 	switch($('input[name=client[clientType]]:checked').val()) {
 		default:
 		
 			$('#name').keyup(function() {
				if($('#name').val()=='') {
					$('#clientId').val('');
				}
				$('#clientDiv input').not('#name').val('');
				$('#clientDiv select').attr("selected", false);
			})
			$( "#name" ).autocomplete({
				source: "/index.php?jfunc=client.getACCompanies",
				minLength: 0,
				select: function( event, ui ) {
					ui.item ? $('#clientId').val(ui.item.id) : $('#clientId').val('');
					if(ui.item) {
						$('#vat').val('');
						if(ui.item.vat==null) {ui.item.vat='';}
						$logs='';
						$.each(ui.item, function(key, value) { 
							$('#'+key).val(value);
							
							logs+=key+":"+value+"<br>";
						});
						//$('#logs').html(logs) 
					}
				}
			});
 		break;
 		
 		case 'part':
 		
 			$('#lastname').keyup(function() {
				if($('#lastname').val()=='') {
					$('#clientId').val('');
				}
				$('#clientDiv input').not('#lastname').val('');
				$('#clientDiv select').attr("selected", false);
			})
			$( "#lastname" ).autocomplete({
				source: "/index.php?jfunc=client.getACParticuliers",
				minLength: 0,
				select: function( event, ui ) {
					ui.item ? $('#clientId').val(ui.item.id) : $('#clientId').val('');
					if(ui.item) {
						$.each(ui.item, function(key, value) { 
							$('#'+key).val(value);
							
						});
					}
				}
			});
 		break;
 	}
 	
 	
 }
 function submitForm() {
	var er=0;
	$('#vatExists').remove();
	$('input').removeClass('fieldError');
	$('span.required').each(function() {
		tf=$(this).attr('rel');
		if($('#'+tf).val()=='' && $(this).closest('div').is(':visible')) {
			$('#'+tf).addClass('fieldError');
			er++;
		}
		
			
	});
	if($('#t_client_vat').length>0 && $('#clientId').val()<1) {
		$.get("ajax.php?action=getVat&vat="+$('#t_client_vat').val()+"&name="+$('#t_client_name').val(), function(data) {
			//alert(data);
			if(data=='ok' && er==0) {
				$('#t_form').submit(); 
			}
			else if(data!='ok') {
				$('#t_client_vat').addClass('fieldError');
				$('#t_client_vat').closest('td').append("<span id='vatExists' class='required'><br/>TVA existante ("+data+")</span>");
			}
		});
	}
	else if(er==0) {
		$('#t_form').submit(); 
	}
 }
 
 function cancelEditor() {
	 $('#editorFormContent').html('');
	 $('#tab_jobs div:first-child').show();
	 $('#tab_tents div:first-child').show();
	 $('#tab_users div:first-child').show();
	 $('#tab_clients div:first-child').show();
	 $('#tab_offres div:first-child').show();
	 $('#editor').hide();
	
 }
 
 function displayTents() {
 	autocompleteClient();
 	
	$('#tents').tabs();
/*	$(".sortable").ariaSorTable({
				rowsToShow: 20,
				pager: true,
				colsToHide: {
					
				}
	});
*/
	$('#t_owner_type').change(function() {
		$('#name').val('');
		$('#lastname').val('');
		$('#clientId').val('');
		if($(this).val()=='cie') {
			$('#clientType1').attr('checked',true);
			//$('#ciePanel').show();
			$('#lastname').hide();
			$('#name').show();
			//autocompleteClient();
		}
		else if($(this).val()=='part'){
			$('#clientType2').attr('checked',true);
			//$('#ciePanel').hide();
			$('#name').hide();
			$('#lastname').show();
			//autocompleteClient();
		}
		else {
			$('#name').hide();
			$('#lastname').hide();
		}
		autocompleteClient();
	})


	$('#tab_tents div:first-child').show();
	$(".datepicker").datetimepicker({showOn: 'button',
			buttonImage: 'css/images/calendar.gif',
			buttonImageOnly: true,
			dateFormat: 'dd/mm/yy'
});
//$(".tablesorter").tablesorter();
	
	
 }
 
 
function displayClients() {
	$('#clients').tabs();
	$('#tab_clients div:first-child').show();
	$(".datepicker").datetimepicker({showOn: 'button',
			buttonImage: 'css/images/calendar.gif',
			buttonImageOnly: true,
			dateFormat: 'dd/mm/yy'
});
	//$(".tablesorter").tablesorter();
	
}

function displayOffres() {
	autocompleteClient();
	$('#offres').tabs();
	$('#clientType').buttonset();
	$('#clientType input').click(function() {
		if($('#clientType1').attr('checked')) {
			$('#clientType1').attr('checked',true);
			$('#ciePanel').show();
			autocompleteClient();
		}
		else {
			$('#clientType2').attr('checked',true);
			$('#ciePanel').hide();
			autocompleteClient();
		}
	})
	//$('#tab_offres div:first-child').show();
	//$(".tablesorter").tablesorter();
	
}

function displayInvoices() {
	
	$('#invoices').tabs();
	$('#tab_offres div:first-child').show();
	$(".datepicker").datetimepicker({showOn: 'button',
			buttonImage: 'css/images/calendar.gif',
			buttonImageOnly: true,
			dateFormat: 'dd/mm/yy'
});
	//$(".tablesorter").tablesorter();
	
}
 
 
 function displayJobs() {
	$('#tab_jobs div:first-child').show();
	//$(".tablesorter").tablesorter();
 }
 
  function displayUsers() {
	$('#tab_users div:first-child').show();
	//$(".tablesorter").tablesorter();
 }
 
 
 function displayEvents() {
	$(".tablesorter").tablesorter();
 }
 

 
  function deleteOffre(offreId) {
		if(confirm("Voulez-vous vraiment supprimer cette offre ? Cette action est irreversible") ) {
			$.ajax({  
			type: "POST",  
			url: "ajax.php?action=deleteOffre&offreId="+offreId,  
			data: $('form').serialize(),  
			success: function(dataResult) {  
			//	alert(dataResult);
				document.location="/quotes";
			}  
		}); 
			
		}
 }
 
 
 function deleteTent(tentId) {
		if(confirm("Voulez-vous vraiment supprimer cette tente ? Cette action est irreversible") ) {
			$.ajax({  
			type: "POST",  
			url: "ajax.php?action=deleteTent&tentId="+tentId,  
			data: $('form').serialize(),  
			success: function(dataResult) {  
				document.location="/tents";
			}  
		}); 
			
		}
 }
 
 function deleteClient(clientId) {
		if(confirm("Voulez-vous vraiment supprimer ce client ? Cette action est irreversible") ) {
			$.ajax({  
			type: "POST",  
			url: "ajax.php?action=deleteClient&clientId="+clientId,  
			data: $('form').serialize(),  
			success: function(dataResult) {  
				document.location="/clients";
			}  
		}); 
			
		}
 }
 function deleteJob(jobId) {
 	
		if(confirm("Voulez-vous vraiment supprimer ce job ? Cette action est irreversible") ) {
			$.ajax({  
			type: "POST",  
			url: "ajax.php?action=deleteJob&jobId="+jobId,  
			data: $('form').serialize(),  
			success: function(dataResult) {  
				alert(dataResult);
				document.location="/jobs";
			}  
		}); 
			
		}
 }
 
 function deleteUser(userId) {
		if(confirm("Voulez-vous vraiment supprimer cet utilisateur ? Cette action est irreversible") ) {
			$.ajax({  
			type: "POST",  
			url: "ajax.php?action=deleteUser&userId="+userId,  
			data: $('form').serialize(),  
			success: function(dataResult) {  
				document.location="/users";
			}  
		}); 
			
		}
 }
 
 
 
 function switchClientType() {
	 if($('input[name=t_client_clientType]:radio:checked').val()=='cie') {
		$('#t_client_firstname').val('');
		$('#t_client_lastname').val('');
	}
	else {
		$('#t_client_name').val('');
		$('#t_client_vat').val('');
		$('#t_client_cie_type_other').val('');
	}
 }
 
 
 
 function addTent() {
	  
		$('#t_available_tents :selected').each(function(i, selected){
			$("#t_chosen_tents").append($(this));
			
		});
		
		tot=0;
		var tA=Array();
		$('#t_chosen_tents > option').each(function(index){
			tA.push($(this).val());
			var t=$(this).text().split(' - ');
			var s=t[2].replace("m2","");
			tot+=Number(s);
		});
		
		$("#t_hidden_chosen").val(tA.join(','));
		$("#t_calculatedSurface").val(tot);
		
		
 }
 
  function removeTent() {
	  
		$('#t_chosen_tents :selected').each(function(i, selected){
			$("#t_available_tents").append($(this));
		});
		
		tot=0;
		var tA=Array();
		$('#t_chosen_tents > option').each(function(index){
			tA.push($(this).val());
			var t=$(this).text().split(' - ');
			var s=t[2].replace("m2","");
			tot+=Number(s);
		});
		
		$("#t_hidden_chosen").val(tA.join(','));
		$("#t_calculatedSurface").val(tot);
 }
 
 function calculateSurface() {
 	
 }
 
 function copyAddress() {
	 $('#address_delivery_table').toggle(); 
 }
 
 
 function calendarMeOnly() {
	if($('#meCheckbox').attr('checked')) {
	user='user-'+$('#userIso').val().toLowerCase();
	$('.fc-event').each(function() {
								 if($(this).hasClass(user)) {
									 $(this).show();
								 }
								 else {
									$(this).hide(); 
								 }
								 });
	}
	else {
		$('.fc-event').show();
	}
	
//	$(!($('.user-'+$('#userIso').val()))).hide();
	/*meOnly=true;
	
	$('#calendar').fullCalendar('refetchEvents');
	$('#calendar').fullCalendar('rerenderEvents' );
	$('#calendar').fullCalendar('render' )
	*/

 }
 
 
 function filterTents() {
	 var fromDate=$('#fromDate').val();
	 var toDate=$('#toDate').val();
	 //alert('r');
	 document.location="/tents?fromDate="+fromDate+"&toDate="+toDate;
	 /*
	 $.ajax({  
		type: "POST",  
		url: "ajax.php?action=filterTent&fromDate="+fromDate+"&toDate="+toDate,  
		success: function(dataResult) {  
			$('#tab_tents div:first-child').html(dataResult);
			displayTents();
			cancelEditor();
			
		}  
	}); 
	*/
 }
 
 function chatMessage() {
	 var message=$('#chat_message').val();
	  $.ajax({  
		type: "POST",  
		url: "ajax.php?action=chatMessage&message="+message,  
		success: function(dataResult) { 
			//alert(dataResult);
			$('#cM').html(dataResult);
			$('#chatW').animate({scrollTop: $('#chatC').height()}, 8);

			
		}  
	}); 
 }
 
 
 $(function() {
    $('#chat form').submit(function() {
        var user    = $('#chat input[name=user]').val();
        var message = $('#chat input[name=message]').val();
        $.post('chat/chat.php', { 'user':user, 'message':message }, function() {
            refreshChat();
        });
        $('#chat input[name=message]').val('');
        return false;
    });
    
    function refreshChat() {
        $.ajax({
            url: "chat/chat.html", 
			ifModified:true,
            success: function(content){
                $('#room').html(content);
            }
        });
        setTimeout(refreshChat, 15000);
    }
   if($('#chatW').size()>0) { refreshChat();}
});
 
 
 function createPassword(userId) {
	  $.ajax({  
		type: "POST",  
		url: "ajax.php?action=createPassword&userId="+userId,  
		success: function(dataResult) { 
			alert('Mot de passe créé et envoyé à : '+dataResult);
				
		}  
	}); 
 }
 
 
 
 function getClientTents(clientId) {
	if($('#isOwnerYes').attr('checked')) {
		
		$('#clientTents').show();
	}
	else {
		
		$.ajax({  
		type: "POST",  
		url: "ajax.php?action=removeClientTents&clientId="+clientId,  
		success: function(dataResult) { 
			$('#clientTents').html(dataResult);
			$('#clientTents').hide();
		}  
	}); 
	}
	
	
 }
 
 
 
 
 function autoFill(obj) {
	// alert($(obj).attr('rel'));
	
	// $(obj).bind("keyup","alert('rr');getDatas('"+$(obj).attr('rel')+"',$(this))"); 
	 //$(obj).parent().append("<div class='datas'></div>");
	 
	// $(obj).blur(function() {$('.afdatas').hide()});
	 $(obj).keyup(function() {
		
		 $('#clientId').val('');
		var r=$(this).parent().find('.afdatas');
		//$(this).parent().find('.tId').val('');
		$(r).show();
		if($(this).val().length>2) {
			
			
			$.post("ajax.php?action=getAFClient&table="+$(this).attr('rel')+"&letters="+$(this).val(),'',function(data) {
			$(r).html(data);	

		});
		}
		else if($(this).val().length==0){
			setClient(0);
			$(r).hide();
			$('.autoFill').each(function() {
				autoFill($(this));
			});
		}
		else {
			
			$(r).hide();
			$('.autoFill').each(function() {
				autoFill($(this));
			});
		}
	});
	
	
	
	
	
 }
 
 

 
 
 function getJobPdf(jobId,lang) {
 	
	window.open(web+'pdf.php?type=job&jobId='+jobId+'&language='+lang,'Job'); 
 }
 
 function getOffrePdf(offreId,lang) {
	window.open(web+'pdf.php?type=offre&offreId='+offreId+'&language='+lang,'Offre'); 
 }
 
 
  function getInvoicePdf(invoiceId,lang,rn) {
  	//alert(invoiceId);
  	//Ti.Platform.openURL(web+'lib/templates/default/invoicepdf.php?invoiceId='+invoiceId+'&lang='+lang);
	//window.open(web+'themes/default/invoicepdf.php?invoiceId='+invoiceId+'&lang='+lang+'&rn='+rn,'Invoice'); 
	window.open(web+'pdf.php?type=invoice&invoiceId='+invoiceId+'&language='+lang+'&rn='+rn,'Invoice'); 
 }
 
 
 function getReminderPdf(invoiceId,lang,rn) {
  	//alert(invoiceId);
  	//Ti.Platform.openURL(web+'lib/templates/default/invoicepdf.php?invoiceId='+invoiceId+'&lang='+lang);
	window.open(web+'themes/default/reminderpdf.php?invoiceId='+invoiceId+'&lang='+lang+'&rn='+rn,'Invoice'); 
 }
 
 
 
 
 function addFDatasRow() {
	 var c=$('#fDatas').find('tbody tr').length;
	$('#fDatas').append("<tr rel='0'><td><textarea class='productDescription' name='p["+c+"][description]' ></textarea></td><td class='productPrice'><input type='text' name='p["+c+"][price]' class='productPrice' value='0.00' /> &euro;</td><td></td></tr>") 
 	$('.productPrice').click(function() {
 		if($(this).val()=='0.00') {
 			$(this).val('');
 		}
 	});
 }
 
 
 function addProduct2offre() {
	 //var c=$('#fDatas').find('tbody tr').length+1;
	 
	 
	  var tRel=[];
	 $('#fDatas').find('tbody tr').each(function() {
	 	var tId=$(this).attr('rel');
	 	tRel.push(tId);
	 });
	 tRel.sort(function(a,b){return a - b});
	
	  if(tRel.length<=0) {
	 	c=1;
	 }
	 else {
	 	c=parseInt(tRel[tRel.length-1])+1;
	 }
	 
	$('#fDatas').append("<tr rel='"+c+"'><td><input type='hidden' name='products["+c+"][isFromOffre]' value='1' /><textarea class='productDescription' name='products["+c+"][description]' ></textarea></td><td class='productPrice'><input type='text' name='products["+c+"][price]' class='productPrice' value='0.00' /> &euro;</td><td></td></tr>") 
 	$('.productPrice').click(function() {
 		if($(this).val()=='0.00') {
 			$(this).val('');
 		}
 	});
 }
 
  function addProduct2job() {
	// var c=$('#fDatas').find('tbody tr').length+1;
	 
	   var tRel=[];
	 $('#fDatas').find('tbody tr').each(function() {
	 	var tId=$(this).attr('rel');
	 	tRel.push(tId);
	 });
	 tRel.sort(function(a,b){return a - b});
	 
	 
	  if(tRel.length<=0) {
	 	c=1;
	 }
	 else {
	 	c=parseInt(tRel[tRel.length-1])+1;
	 }
	 
	$('#fDatas').append("<tr rel='"+c+"'><td><input type='hidden' name='products["+c+"][isFromOffre]' value='0' /><textarea class='productDescription' name='products["+c+"][description]' ></textarea></td><td class='productPrice'><input type='text' name='products["+c+"][price]' class='productPrice' value='0.00' /> &euro;</td><td></td></tr>") 
 	$('.productPrice').click(function() {
 		if($(this).val()=='0.00') {
 			$(this).val('');
 		}
 	});
 }
 
 
  function addProduct2invoice() {
	// var c=$('#fDatas').find('tbody tr').length+1;
	 
	   var tRel=[];
	 $('#fDatas').find('tbody tr').each(function() {
	 	var tId=$(this).attr('rel');
	 	tRel.push(tId);
	 });
	 tRel.sort(function(a,b){return a - b});
	
	  if(tRel.length<=0) {
	 	c=1;
	 }
	 else {
	 	c=parseInt(tRel[tRel.length-1])+1;
	 }
	 
	$('#fDatas').append("<tr rel='"+c+"'><td><input type='hidden' name='products["+c+"][isFromOffre]' value='0' /><textarea class='productDescription' name='products["+c+"][description]' ></textarea></td><td class='productPrice'><input type='text' name='products["+c+"][price]' class='productPrice' value='0.00' /> &euro;</td><td></td></tr>") 
 	$('.productPrice').click(function() {
 		if($(this).val()=='0.00') {
 			$(this).val('');
 		}
 	});
 }
 
  function addOption() {
  	
	 //var c=$('#fOptions').find('tbody tr').length+1;
	 var tRel=[];
	 $('#fOptions').find('tbody tr').each(function() {
	 	var tId=$(this).attr('rel');
	 	tRel.push(tId);
	 });
	 tRel.sort(function(a,b){return a - b});
	 if(tRel.length<=0) {
	 	c=1;
	 }
	 else {
	 	c=parseInt(tRel[tRel.length-1])+1;
	 }
	// alert(c);
	$('#fOptions').append("<tr rel='"+c+"'><td><textarea class='productDescription' name='options["+c+"][description]' ></textarea></td><td class='productPrice'><input type='text' name='options["+c+"][price]' class='productPrice' value='0.00' /> &euro;</td><td></td></tr>") 
 	$('.productPrice').click(function() {
 		if($(this).val()=='0.00') {
 			$(this).val('');
 		}
 	});
 }
 
 
  
 function addOptionsRow() {
	 var c=$('#fOptions').find('tbody tr').length;
	$('#fOptions').append("<tr rel='0'><td><textarea class='productDescription' name='po["+c+"][description]' ></textarea></td><td class='productPrice'><input type='text' name='po["+c+"][price]' class='productPrice' value='sur devis' /> &euro;</td><td></td></tr>") 
 }
 
 function removeProduct(row) {
	 $(row).closest('tr').remove();
 }
 
 function addFSlice() {
	 var s=$('#fSlices').find('tbody tr').length+1;
	$('#fSlices').append("<tr rel='0'><td><textarea class='sliceDescription' name='slices["+s+"][comments]' style='width:95%'></textarea></td><td><input type='text' name='slices["+s+"][slice]' value='' style='width:50px'  /> %</td><td class='productPrice'><input type='text' name='slices["+s+"][priceHT]' class='productPrice' value='0.00' /> &euro;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>") 
 }
 
 

 
 function createInvoice(jobId,sliceId) {
	 /*
	 \$('#t_form input').attr('disabled',false);\$(this).closest('td').find('.stat').val('ready');$('#t_form').submit();
	 */
	 //alert('r');
	 
	 $.post("ajax.php?action=createInvoice&jobId="+jobId+"&sliceId="+sliceId,'',function(data) {
			//alert(data);
			//document.location="/invoices?invoiceId="+data;
			//$('#clientDiv').html('data');
			location.reload();
	});
 }
 
 function askInvoice(jobId,sliceId) {
	 /*
	 \$('#t_form input').attr('disabled',false);\$(this).closest('td').find('.stat').val('ready');$('#t_form').submit();
	 */
	 //alert('r');
	 
	 $.post("ajax.php?action=askInvoice&jobId="+jobId+"&slice="+sliceId,'',function(data) {
			//alert(data);
			location.reload();
			//$('#clientDiv').html('data');
	});
 }
 
 
 function getComments(jobId,phase) {
	
	 $.post("ajax.php?action=getPlanningComments&jobId="+jobId,'',function(data) {
			//alert(data);
			$('body').append("<div id='overlay'><div>Commentaires<br/><textarea name='planningComments' id='planningComments'>"+data+"</textarea><br/><input type='button' value='Enregistrer' onclick=\"savePlanningComments('"+jobId+"')\" /></div></div>");
			$('#overlay').dialog({
				height: 140,
				modal: true,
				close: function(event, ui) { $('#overlay').remove(); }
			});
	});
	
	
	
	
	 
 }
 
 
 
 

 function deleteDocument(doc,type,id,path) {
 	if(confirm("Etes-vous sûr(e) ?")) {
 		
 		 $.post("ajax.php?action=deleteDocument",{'type':type,'id':id,'path':path},function(data) {
		 if(data=='ok') {
		 	$(doc).closest('tr').remove();
		 }
		 else {
		 	alert('error deleting');
		 }

	  });
 	}
 	
 }
 
 function savePlanningComments(jobId) {
	  $.post("ajax.php?action=savePlanningComments&jobId="+jobId,{'planningComments':$('#planningComments').val()},function(data) {
	  		
		  $('#planningComments').val('');
	 	$('#overlay').dialog( "destroy" );
		$('#overlay').remove();
	  });
 }
 
 
 
 function exportPlanning() {
	/*var t=$('.fc-header-right').find('.fc-state-active a span').html();
	 $.post("ajax.php?action=exportPlanning&t="+t+"&userId="+$('#userId').val()+"&longBuild="+$('#longBuild').val(),'',function(data) {
		  window.open('/export.htm',"export");
	  });
	  */
	  //alert(web+"export.php?userId="+$('#userId').val()+"&longBuild="+$('#longBuild').val())
	  window.open(web+"export.php?userId="+$('#userId').val()+"&longBuild="+$('#longBuild').val());
 }
 
 
 function createOffreFromClient(clientId) {
	  $.post("ajax.php?action=createOffreFromClient&clientId="+clientId,{},function(data) {
	  //	alert(data);
		  document.location="/quotes?offreId="+data;
	  });
 }
 



function createRappel(invoiceId,rn) {
	 $.post("ajax.php?action=createRappel&invoiceId="+invoiceId+'&rn='+rn,'',function(data) {
		  document.location="/invoices";
	  });
	
}



function changeInvoiceDate(invoiceId) {
	//alert(invoiceId+"////"+$('#paymentDate').val());
	
	 $.post("ajax.php?action=changeInvoiceDate&invoiceId="+invoiceId+'&paymentDate='+$('#paymentDate').val(),'',function(data) {
	 	//alert(data);
		  document.location="/invoices?invoiceId="+invoiceId;
	  });
}


function copyAddress(type) {
	$('input[name*="client"]').each(function(i, field) {
		var f=field.name.replace('client',type);
		var t=field.value;
		if(f.indexOf('clientId')==-1 && f.indexOf(type+'Id')==-1) {
			$('input[name="'+f+'"]').val(t);
		}
	});	
	$('select[name="'+type+'[country]"]').val($('input[name="client[country]"]').val());
}




function uncloseJob(jobId) {
	
	if(confirm("Attention ! Ce job est cloturé, toute modification pourra entrainer des incohérences au niveaux des tentes et factures sur ce job ou d'autres.\nEtes-vous sûr de vouloir ouvrir ce job ?")) {
		 $.post("ajax.php?action=uncloseJob&jobId="+jobId,'',function(data) {
	//	 	alert(data);
		  document.location="/jobs?jobId="+jobId;
	  });
	}
}





jQuery.fn.dataTableExt.oSort['us_date-asc'] = function (a, b) {
            var x = new Date(a),
             y = new Date(b);
            return ((x < y) ? -1 : ((x > y) ? 1 : 0));
        };

        jQuery.fn.dataTableExt.oSort['us_date-desc'] = function (a, b) {
            var x = new Date(a),
             y = new Date(b);
            return ((x < y) ? 1 : ((x > y) ? -1 : 0));
        };
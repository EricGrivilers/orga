



$('#reportrange').daterangepicker(
    {
    	buttonClasses:"btn-inverse",
    	startDate:$('#startDate').val(),
    	endDate:$('#endDate').val(),
    	minDate:Date.today(),
        ranges: {
            'Today': ['today', 'today'],
            'Tomorrow': ['tomorrow', 'tomorrow'],
            'Next weekend': [Date.saturday(),Date.saturday().add({ days: +1 })],
            'Next 7 days': ['today',Date.today().add({ days: +6 })],
            'Next week': [Date.monday().add({ days: +7 }),Date.monday().add({ days: +13 })],
            'Next month': [Date.today().moveToFirstDayOfMonth().add({ months: +1 }), Date.today().moveToLastDayOfMonth().add({ months: +1 })],
        },
        locale: {
        	customRangeLabel:"Custom dates"
        }
    },
    function(start, end) {
    	$('#startDate').val(start.toString('yyyy-MM-dd hh:mm:ss'));
    	$('#endDate').val(end.toString('yyyy-MM-dd hh:mm:ss'));
        $('#reportrange span').html(start.toString('MMMM d, yyyy') + ' - ' + end.toString('MMMM d, yyyy'));
        $('#rangeDateForm').submit();
    }
);


$('.reportrange').daterangepicker(
    {
        buttonClasses:"btn-inverse",
        startDate:$(this).closest('.widget').find('input.startDate').val(),
        endDate:$(this).closest('.widget').find('input.endDate').val(),
        minDate:Date.today(),
        format : 'MM/dd/yyyy hh:mm:ss',
        locale: {
            customRangeLabel:"Custom dates"
        }
    },
    function(start, end) {
        startDateField=this.element.closest('.widget').find('input.startDate');
        endDateField=this.element.closest('.widget').find('input.endDate');

        startDateField.val(start.toString('dd/MM/yyyy hh:mm:ss'));
        endDateField.val(end.toString('dd/MM/yyyy hh:mm:ss'));
        //this.element.css('color','1px solid blue');
        //this.element.find(" ~ .reportrange").css('color','1px solid red');
        this.element.find('span.display').html("<span class='static'>From</span> "+start.toString('dd/MM/yyyy hh:mm:ss') + " <span class='static'>to</span> " + end.toString('dd/MM/yyyy hh:mm:ss'));
        //$('#rangeDateForm').submit();
    }
);


$('.combobox ul.dropdown-menu li a').click(function() {
    $(this).closest('.combobox').find('input').val($(this).text());
});



$(document).ready(function() {

    pagination();
    initClient();
    initProduct();
    initOffre();
    initSlice();
    $('select.status').change(function() {
        $(this).closest('form').submit();
    });

});



function pagination() {
    if($('#CaravaneUiPaginationOb').length>0) {
        ob=$('#CaravaneUiPaginationOb').val();
        tA=ob.split(' ');
        currentOb=tA[0];
        currentSens=tA[1];
        currentSens=='asc'?icon='up':icon='down';
        currentField=$("thead th a[data-orderby='"+currentOb+"']");

        currentField.html(currentField.text()+" <i class='icon icon-chevron-"+icon+"'></i>");
        /*currentField.click(function() {
            currentSens=='asc'?currentSens='desc':currentSens='asc';
            document.location=Routing.generate($('#CaravaneUiPaginationRoute').val(),{'type':$('#CaravaneUiPaginationType').val(),'ob':currentOb+" "+currentSens,'page':$('#CaravaneUiPaginationPage').val()});
        });*/
        $("thead th a").click(function() {
            if($(this).data('orderby')==currentOb) {
                currentSens=='asc'?currentSens='desc':currentSens='asc';
            }
            document.location=Routing.generate($('#CaravaneUiPaginationRoute').val(),{'type':$('#CaravaneUiPaginationType').val(),'ob':$(this).data('orderby')+" "+currentSens,'page':$('#CaravaneUiPaginationPage').val()});
        });
    }


}


function initClient() {
	if($('#caravane_bundle_organicbundle_clienttype_clienttype').val()=='part') {
		$('#cieonly').hide();
	}
	$('div.btn-group button').click(function(){
		//target=$(this).attr('data-target');
		if($(this).attr('data-value')=='part') {
			$('#cieonly').hide();
		}else {
			$('#cieonly').show();
		}
	})
}


function initProduct() {
     $('a.delete_row').click(function() {
        var link=$(this);
        $.post(Routing.generate($(this).attr('data-type')+'_remove_product',{'id':$(this).attr('data-rel'),'productid':$(this).attr('data-target')}),function(data) {
            link.closest('tr').remove();
        });
    });

    $('.add_product_link').click(function(e) {
         e.preventDefault();
         target=$(this).closest('table').find('tbody');
       /* if($(this).data('isoption')) {
            target=$('tbody#options');
        }
        else (
            target=$('tbody#products');
        )*/
        var prototype =$('table tbody#products').data('prototype');
        var index=target.find('tr').length;
        var newForm = prototype.replace(/__name__/g, index);
         target.data('index', index + 1);
         var $newFormLi = $('<tr></tr>').append(newForm);
         target.append($newFormLi);
         target.find('input:hidden').val($(this).data('isoption'));


         $('a.delete_new_row').click(function() {
            $(this).closest('tr').remove();
        });
    });
}


var collectionHolder = $('table tbody.products');


function initSlice() {
    $('.slice').change(function() {
        $(this).closest('tr').find('.price').val('');
    });
    $('.price').change(function() {
        $(this).closest('tr').find('.slice').val('');
    });
    $('.balance').click(function() {
        $(this).closest('tr').find('.slice').val('');
        $(this).closest('tr').find('.price').val($(this).attr('rel'));
        $(this).closest('form').submit();
    });
}


function fillClient2invoice(clientid) {
    fields=new Array()
    $.post(Routing.generate('client_get_data',{'id':clientid}),function(data) {
        data=$.parseJSON(data);
        $.each(data, function(i, item) {

            $('#caravane_bundle_organicbundle_invoicetype_'+i).val(data[i]);
        });
    })
}



function fillClient(clientid,targetField) {
    if($('#clientid').length==0) {
        document.location=Routing.generate('client_edit',{'id':clientid});
    }
    entity=$('#mainForm').data('entity');
    fields=new Array();

    $(targetField).val(clientid);

    $.post(Routing.generate('client_get_data',{'id':clientid}),function(data) {
        data=$.parseJSON(data);
        $.each(data, function(i, item) {
            $('#caravane_bundle_organicbundle_'+entity+'type_clientid_'+i).val(data[i]);
            //$('#caravane_bundle_organicbundle_clienttype_'+i).val(data[i]);
            if(i=='clienttype') {
                if(data[i]=='cie') {
                    $('#cieonly').show();
                }
                else {
                    $('#cieonly').hide();
                }
                $("#caravane_bundle_organicbundle_"+entity+"type_clienttype_widget button").removeClass('active');
                $("#caravane_bundle_organicbundle_"+entity+"type_clienttype_widget button[data-value='"+data[i]+"']").addClass('active');
            }

        });

    })
}


function initOffre() {
    $('.add_slice_link').click(function(e) {
         e.preventDefault();
         target=$(this).closest('table').find('tbody');
       /* if($(this).data('isoption')) {
            target=$('tbody#options');
        }
        else (
            target=$('tbody#products');
        )*/
        var prototype =$('table tbody.slices').data('prototype');
        var index=target.find(':input').length;
        var newForm = prototype.replace(/__name__/g, index);
         target.data('index', index + 1);
         var $newFormLi = $('<tr></tr>').append(newForm);
         target.append($newFormLi);
         target.find('input:hidden').val($(this).data('isoption'));


         $('a.delete_new_row').click(function() {
            $(this).closest('tr').remove();
        });
    });

    $('.openStockModal').click(function() {
        target=$(this).closest('table').find('.products');
        entity=$('#mainForm').data('entity');
        $('#stockModal').modal('show');
        $('table.stock tbody tr, table.stock tbody a').click(function(e) {
            e.stopPropagation();
            tentid=$(this).data('productid');
            entityId=$(this).closest('.modal').data('target');
             $.post(Routing.generate(entity+'_add_tent',{'id':entityId,'tentid':tentid}),function(data) {
                //alert(data);
                $('form').submit();
            })
        });

    });
    $('#mainForm').submit(function() {
        entity=$('#mainForm').data('entity');
        $('tbody.products tr').each(function() {
            c=$(this).data('productid');
           //  console.log('rr');
            additionalDatas=$(this).find('.additionalData');
            datas=new Object();
            additionalDatas.each(function() {
                //console.log('rr'+$(this).attr("data-attribute")+"//"+$(this).val()  );
                //datas.push({$(this).attr("data-attribute"): $(this).val()});
                if($(this).attr('type')=='checkbox') {
                    //console.log('check');
                    if($(this).is(':checked')) {
                         //console.log('checked');
                        datas[$(this).attr("data-attribute")]='1';
                    }
                    else {
                        datas[$(this).attr("data-attribute")]='0';
                    }
                }
                else {
                    datas[$(this).attr("data-attribute")]=$(this).val();
                }

            });
            //console.log('c:'+c);
            //console.log(JSON.stringify(datas));
            $('#caravane_bundle_organicbundle_'+entity+'type_products_'+c+'_datas').val(JSON.stringify(datas));
        });

        return true;
    });

    $('#products .pagination a').click(function(e) {
        e.preventDefault();
        $(this).closest('.tab-pane').find('.tableContainer').load($(this).attr('href')+" .content",function(data) {
            initOffre();
        })
    });

}

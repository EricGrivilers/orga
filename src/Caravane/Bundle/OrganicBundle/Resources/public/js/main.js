



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



$(document).ready(function() {
	initClient();
    initProduct();
    initSlice();
    $('select.status').change(function() {
        $(this).closest('form').submit();
    });
   
});





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
}


var collectionHolder = $('table tbody.products');

// setup an "add a tag" link


jQuery(document).ready(function() {

    // add the "add a tag" anchor and li to the tags ul
    //collectionHolder.append($newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    collectionHolder.data('index', collectionHolder.find(':input').length);

    $('#add_product_link').on('click', function(e) {

        // prevent the link from creating a "#" on the URL
        e.preventDefault();

        // add a new tag form (see next code block)
        addProductForm(collectionHolder);
    });
});



function addProductForm(collectionHolder) {

    // Get the data-prototype explained earlier
    var prototype = collectionHolder.data('prototype');

    // get the new index
    var index = collectionHolder.data('index');

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);

    // increase the index with one for the next item
    collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the "Add a tag" link li
    var $newFormLi = $('<tr></tr>').append(newForm);

    collectionHolder.append($newFormLi);

    $('a.delete_new_row').click(function() {
        $(this).closest('tr').remove();
    });


}


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


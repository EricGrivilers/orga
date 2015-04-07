calendar={}



$(function () {

	calendar.show('');
	$('#calendarFilter a.filter').click(function() {
		$('#calendar-holder').html('');
		calendar.show($(this).attr('rel'));
	});

});

calendar.show=function(category) {
	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();

    $('#show_inplace').attr('checked')=='checked'?showInPlace=true:showInPlace=false;
	$('#calendar-holder').fullCalendar({
		header: {
			left: 'prev, next',
			center: 'title',
			right: 'month,agendaWeek,agendaDay,'
		},
		firstDay: 1,
		businessHours: {
			start: '05:00', // a start time (10am in this example)
    		end: '23:59', // an end time (6pm in this example)
    		dow: [ 0, 1, 2, 3, 4, 5, 6 ]
		},
		lazyFetching:true,
        timeFormat: {
            // for agendaWeek and agendaDay
            agenda: 'h:mmt', // 5:00 - 6:30

            // for all other views
            '': 'h:mmt'            // 7p
        },
        dayRender: function(date,cell) {
        	cell.html('<span class="weekday">'+date.format('dddd')+'</span>')
        },
		eventSources: [
            {
				url: Routing.generate('fullcalendar_loader',{'user':$('#planning_user').val(),'show_inplace':showInPlace}),
				//url: Routing.generate('fullcalendar_loader',{'user':$('#planning_user').val(),'show_inplace':$('#show_inplace:checked')}),
				type: 'POST',
				error: function(data) {
					console.log(data);
					alert('There was an error while fetching  Calendar!');
				},
				success: function() {
				}
            }
		],
		eventRender: function(event, element) {
	        //element.qtip({
	         //   content: event.description
	        //});
	        element.popover({
				'placement':'top',
				'title': event.client,
				'content': event.content,
				'trigger':'hover',
				'animation':false,
				'html':true
			});
	    }
		});
}


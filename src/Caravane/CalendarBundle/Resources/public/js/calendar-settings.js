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
		
		$('#calendar-holder').fullCalendar({
			header: {
				left: 'prev, next',
				center: 'title',
				right: 'month,basicWeek,basicDay,'
			},
			lazyFetching:true,
            timeFormat: {
                    // for agendaWeek and agendaDay
                    agenda: 'h:mmt', // 5:00 - 6:30

                    // for all other views
                    '': 'h:mmt'            // 7p
            },
			eventSources: [
                    {
                        url: Routing.generate('fullcalendar_loader',{'user':$('#planning_user').val(),'show_inplace':$('#show_inplace:checked')}), 
                        //url: Routing.generate('fullcalendar_loader'), 

						type: 'POST',
                        error: function() {
                           alert('There was an error while fetching Google Calendar!');
                        },
                        success: function() {
                        	
                        }
                    }
			],
			eventRender: function(event, element) {
		        /*element.qtip({
		            content: event.description
		        });*/
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
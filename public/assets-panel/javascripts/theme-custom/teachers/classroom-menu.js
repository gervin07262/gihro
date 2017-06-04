var arrayUrl = window.location.href.split('/');
$(function () {
    /* initialize the external events
     -----------------------------------------------------------------*/
    function iniEvents(ele) {
      ele.each(function () {
        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        };
        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);
        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex: 1070,
          revert: true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        });
      });
    }
    iniEvents($('#external-events div.external-event'));
    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'hoy',
        month: 'mes',
        week: 'semana',
        day: 'dia'
      },
      events: { url:'/panelTeachers/classrooms/' + arrayUrl[5] + '/menus'},
      editable: false,
      droppable: false
    });
});

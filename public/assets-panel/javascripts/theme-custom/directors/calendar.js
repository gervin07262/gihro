function updateEvent (event) {
  var id = event.id;
  var title = event.title;
  var start = event.start.format('YYYY-MM-DD HH:mm');
  var end = event.end ? event.end.format('YYYY-MM-DD HH:mm') : 'NULL';
  var backgroundColor = event.backgroundColor;
  var allDay = event.allDay;

  crsfToken = $('input[name=_token]').val();
  $.ajax({
    url: '/panelDirectors/calendar/'+ id,
    data : {
      title: title,
      start: start,
      allDay: allDay,
      backgroundColor: backgroundColor
    },
    type: 'PUT',
    headers: {
      'X-CSRF-TOKEN': crsfToken
    },
    success: function(json) {
      console.log('Actualizado Correctamente');
    },
    error: function(json){
      console.log('Error al actualizar evento');
    }
  });
}

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
      events: { url:'/panelDirectors/calendar'},
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar !!!
      drop: function (date, allDay) {
        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject');
        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);
        allDay=true;
        // assign it the date that was reported
        copiedEventObject.start = date;
        copiedEventObject.allDay = allDay;
        copiedEventObject.backgroundColor = $(this).css('background-color');
        copiedEventObject.borderColor = $(this).css('border-color');
        // render the event on the calendar
        //$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove();
        }

        var title = copiedEventObject.title;
        var start = copiedEventObject.start.format('YYYY-MM-DD HH:mm');
        var backgroundColor = copiedEventObject.backgroundColor;
        crsfToken = $('input[name=_token]').val();
        $.ajax({
          url: '/panelDirectors/calendar',
          data : {
            title: title,
            start: start,
            allDay: allDay,
            backgroundColor: backgroundColor
          },
          type: 'POST',
          headers: {
            'X-CSRF-TOKEN': crsfToken
          },
          success: function(events) {
            $('#calendar').fullCalendar('refetchEvents');
          },
          error: function(json){
            console.log('Error al crear evento');
          }
        });
      },
      eventResize: function(event) {
        updateEvent(event);
      },
      eventDrop: function(event, delta) {
        updateEvent(event);
      },
      eventClick: function (event, jsEvent, view) {
        var id = event.id;
        crsfToken = $('input[name=_token]').val();
        var con = confirm("Esta seguro que desea eliminar el evento");
        if(con) {
            $.ajax({
              url: '/panelDirectors/calendar/' + id,
              headers: {
              'X-CSRF-TOKEN': crsfToken
              },
              type: "DELETE",
              success: function () {
                $('#calendar').fullCalendar('removeEvents', event._id);
                console.log("Evento eliminado");
              }
            });
        } else
           console.log("Cancelado");
      },
      eventMouseover: function( event, jsEvent, view ) {
        var title = event.title;
        var start = event.start.format('HH:mm');
        var backgroundColor = event.backgroundColor;
        var end = event.end ?  event.end.format('HH:mm') : 'No definido';
        var allDay = event.allDay ? 'Si' : 'No';
        var tooltip = `<div class="tooltipevent" style="width:200px;height:100px;color:white;background:${backgroundColor};position:absolute;z-index:10001;">
                        <center>${title}</center> Todo el dia: ${allDay}<br> Inicio: ${start}<br> Fin: ${end}
                      </div>`;
        $('body').append(tooltip);
        $(this).mouseover(function(e) {
          $(this).css('z-index', 10000);
          $('.tooltipevent').fadeIn('500');
          $('.tooltipevent').fadeTo('10', 1.9);
        }).mousemove(function(e) {
          $('.tooltipevent').css('top', e.pageY + 10);
          $('.tooltipevent').css('left', e.pageX + 20);
        });
      },
      eventMouseout: function(calEvent, jsEvent) {
        $(this).css('z-index', 8);
        $('.tooltipevent').remove();
      },
      dayClick: function(date, jsEvent, view) {
        if (view.name === "month") {
          $('#calendar').fullCalendar('gotoDate', date);
          $('#calendar').fullCalendar('changeView', 'agendaDay');
        }
      }
    });
    /* Add events to panel */
    var currentColor = "#3c8dbc"; //Red by default
    var colorChooser = $("#color-chooser-btn");
    $("#color-chooser > li > a").click(function (e) {
      e.preventDefault();
      //Save color
      currentColor = $(this).css("color");
      //Add color effect to button
      $('#add-new-event').css({"background-color": currentColor, "border-color": currentColor});
    });
    $("#add-new-event").click(function (e) {
      e.preventDefault();
      //Get value and make sure it is not null
      var val = $("#new-event").val();
      if (val.length == 0) {
        return;
      }
      //Create events
      var event = $("<div />");
      event.css({"background-color": currentColor, "border-color": currentColor, "color": "#fff"}).addClass("external-event");
      event.html(val);
      $('#external-events').prepend(event);
      //Add draggable funtionality
      iniEvents(event);
      //Remove event from text input
      $("#new-event").val("");
    });
  });

var arrayUrl = window.location.href.split('/');
$(function () {
    /* initialize the external events
     -----------------------------------------------------------------*/
    function iniEvents(ele) {
      ele.each(function () {
        // create an event Object (http://arshaw.com/fullcalendar/docs/event_data/event_Object/)
        // it doesn't need to have a start or endion
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        };
        // store the event Object in the DOM element so we can get to it later
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
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();
  //while(reload==false){
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
      events: { url: '/panelDirectors/classrooms/' + arrayUrl[5] + '/menus' },
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar !!!
      drop: function (date, allDay) { // this function is called when something is dropped
        // retrieve the dropped element's stored event Object
        var originaleventObject = $(this).data('eventObject');
        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedeventObject = $.extend({}, originaleventObject);
        allDay=true;
        // assign it the date that was reported
        copiedeventObject.start = date;
        copiedeventObject.allDay = allDay;
        copiedeventObject.backgroundColor = $(this).css("background-color");
        copiedeventObject.borderColor = $(this).css("border-color");
        // render the event on the calendar
        //$('#calendar').fullCalendar('renderevent', copiedeventObject, true);
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderevent/)
        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable events" list
          $(this).remove();
        }
        //Guardamos el evento creado en base de datos
        var title =copiedeventObject.title;
        var date = copiedeventObject.start.format("YYYY-MM-DD HH:mm");
        crsfToken = $('input[name=_token]').val();
        $.ajax({
          url: '/panelDirectors/classrooms/' + arrayUrl[5] + '/menus',
          data: {
            title: title,
            date: date
          },
          type: 'POST',
          headers: {
            'X-CSRF-TOKEN': crsfToken
          },
          success: function(events) {
            console.log('evento creado');
            $('#calendar').fullCalendar('refetchEvents');
          },
          error: function(json){
            console.log("Error al crear evento");
          }
        });
      },
      eventDrop: function(event, delta) {
        var id = event.id;
        var title = event.title;
        var date = event.start.format("YYYY-MM-DD HH:mm");

        crsfToken = $('input[name=_token]').val();
        $.ajax({
          url: '/panelDirectors/classrooms/' + arrayUrl[5] + '/menus/' + id,
          data: {
            title: title,
            date: date
          },
          type: 'PUT',
          headers: {
            'X-CSRF-TOKEN': crsfToken
          },
          success: function(json) {
            console.log("Menu actualizado correctamente");
          },
          error: function(json){
            console.log("Error al actualizar evento");
          }
        });
      },
      eventClick: function (event, jsevent, view) {
        var id = event.id
        crsfToken = $('input[name=_token]').val();
        var con = confirm("Esta seguro que desea eliminar el menu");
        if(con){
          $.ajax({
            url: '/panelDirectors/classrooms/' + arrayUrl[5] + '/menus/' + id,
            data: '',
            headers: {
              'X-CSRF-TOKEN': crsfToken
            },
            type: 'DELETE',
            success: function () {
            $('#calendar').fullCalendar('removeEvents', event._id);
              console.log("evento eliminado");
            }
          });
        } else
           console.log("Cancelado");
      },
      eventMouseover: function( event, jsevent, view ) {
        var title = event.title;
        var date = (event.start.format("HH:mm"));
        var backgroundColor = event.backgroundColor;
        //var tooltip = '<div class="tooltipevent" style="width:200px;height:100px;color:white;background:'+back+';position:absolute;z-index:10001;">'+'<center>'+ event.title +'</center></div>';
        var tooltip = `<div class="tooltipevent" style="width:200px;height:100px;color:white;background:${backgroundColor};position:absolute;z-index:10001;">
                        <center>${title}</center>
                      </div>`;
        $("body").append(tooltip);
        $(this).mouseover(function(e) {
          $(this).css('z-index', 10000);
          $('.tooltipevent').fadeIn('500');
          $('.tooltipevent').fadeTo('10', 1.9);
        }).mousemove(function(e) {
          $('.tooltipevent').css('top', e.pageY + 10);
          $('.tooltipevent').css('left', e.pageX + 20);
        });
      },
      eventMouseout: function(calevent, jsevent) {
        $(this).css('z-index', 8);
        $('.tooltipevent').remove();
      },
      dayClick: function(date, jsevent, view) {
            if (view.name === "month") {
                $('#calendar').fullCalendar('gotoDate', date);
                $('#calendar').fullCalendar('changeView', 'agendaDay');
            }
      }
    });
    /* Add events to panel */
    var currentColor = "#3c8dbc"; //Red by default
  /*   //Color chooser button
    var colorChooser = $("#color-chooser-btn");
    $("#color-chooser > li > a").click(function (e) {
      e.preventDefault();
      //Save color
      currColor = $(this).css("color");
      //Add color effect to button
      $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
    });*/
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

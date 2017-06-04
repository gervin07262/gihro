var partUrl = window.location.href.split('/');
// add new resource of kid
$('#save-new-kid').click(function(){
    var route = '/panelDirectors/classrooms/' + partUrl[5] + '/kids';
    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': $('input[name=_token]').val()},
        type: 'POST',
        dataType: 'json',
        data: {name:  $('#name').val(), surnames: $('#surnames').val(),
              email: $('#email').val()},
        success:function(msg){
            $("#msg-success").fadeIn();
        },
        error: function(msg) {
            $('#txt-error').text(msg.responseJSON);
            $('#msg-error').fadeIn();
        }
    });
});

function getDataKid(id) {
  var route  = '/panelDirectors/classrooms/' + partUrl[5] + '/kids/'+ id + '/edit';
  $.get(route, function(response) {
      $('#name').val(response.name);
      $('#surnames').val(response.surnames);
      $('#email').val(response.email);
      $('#id').val(response.id);
  });
}

$('#save-edit-kid').click(function() {
  var route = '/panelDirectors/classrooms/' + partUrl[5] + '/kids/'+ $('#id').val() ;
  $.ajax({
      url: route,
      headers: {'X-CSRF-TOKEN': $('input[name=_token]').val()},
      type: 'PUT',
      dataType: 'json',
      data: $('#form-edit-kid').serialize(),
      success:function(){
          $("#msg-success").fadeIn();
      },
      error: function(msg) {
          $('#txt-error').text(msg.responseJSON);
          $('#msg-error').fadeIn();
      }
  });
});

$('.modal-dismiss').click(function() {
  location.reload();
});

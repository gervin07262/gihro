// add new resource of teacher
$('#save-new-teacher').click(function(){
    var route = '/panelDirectors/teachers';
    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': $('input[name=_token]').val()},
        type: 'POST',
        dataType: 'json',
        data: $('#form-new-teacher').serialize(),
        success:function(){
            $("#msg-success").fadeIn();
        },
        error: function(msg) {
            $('#txt-error').text(msg.responseJSON);
            $('#msg-error').fadeIn();
        }
    });
});

function getDataTeacher(id) {
  var route  = '/panelDirectors/teachers/'+id+'/edit';
  $.get(route, function(response) {
      $('#name').val(response.name);
      $('#surnames').val(response.surnames);
      $('#email').val(response.email);
      $('#id').val(response.id);
  });
}

$('#save-edit-teacher').click(function() {
  var route = '/panelDirectors/teachers/'+ $('#id').val();
  $.ajax({
      url: route,
      headers: {'X-CSRF-TOKEN': $('input[name=_token]').val()},
      type: 'PUT',
      dataType: 'json',
      data: $('#form-edit-teacher').serializeArray(),
      success:function(msg){
          console.log(msg);
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

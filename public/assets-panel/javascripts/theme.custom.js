/* Add here all your JS customizations */
/******************** Directors ****************/
var constantUrl = 'http://localhost:8000/panelDirectors/';
$('.provinces').change(function(e){
    var $target = $(e.currentTarget);
    var optSelected = $target.find('option:selected').val();
    var route = constantUrl+'locations/'+optSelected;
    console.log($target.val());
    $.get(route,function(response){
        $('.locations').empty();
        for (var i=0; i<response.length; i++) {
            $('.locations').append('<option value="'+response[i].id+'">'+response[i].location+'</option>');
        }
    });
});



$('.modal-dismiss').click(function() {
	 	// Recargo la página para que se actualize el lsitado
	 	location.reload();
});

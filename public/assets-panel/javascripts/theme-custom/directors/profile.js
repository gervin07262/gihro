$('.provinces').change(function(e){
    var $target = $(e.currentTarget);
    var optSelected = $target.find('option:selected').val();
    var route = '/panelDirectors/locations/'+optSelected;
    $.get(route,function(response){
        $('.locations').empty();
        $.each(response, function(index, value) {
            $('.locations').append('<option value="'+ index +'">' + value + '</option>');
        });
    });
});

$('#searchbar').autocomplete({
    source : function(request, answer){
        $.ajax({
            url : 'http://ws.geonames.org/searchJSON',
            dataType : 'json',
            data : {
                name_startsWith : $('#searchbar').val()
            },
            success : function(datatest) {
                answer($.map(datatest.geonames, function(object){
                    return object.name + ', ' + object.countryName;
                }));
            }
        });
    }
});
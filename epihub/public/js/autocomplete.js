$('#searchbar').autocomplete({
    source: "{{ path('autocomplete') }}"
});
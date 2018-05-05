// Jquery
$(document).ready(function(){
    
    // Load state list
    loadList($('#state').get(0), 'script/loadList.php?getlist=states', 'name', 'code');
    
    // Clear error message
    //$('#contact-error').innerhtml = "";
});

// Load list elements from a JSON object
function loadList(selobj, url, valattr, nameattr) {
    $(selobj).empty();
    $.getJSON(url, {}, function(data) {
        $.each(data, function(i, obj) {
            $(selobj).append(
                $('<option></option>').val(obj[valattr])
                                      .html(obj[nameattr])
            );
        });
    });
}
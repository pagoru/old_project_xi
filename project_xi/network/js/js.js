$("#public").click(function() {
	var pu = $("#public").prop('value');
	if(pu === "public "){
		$("#public").prop('value', "private");
		$("#private").prop('disabled', false);
	} else {
		$("#public").prop('value', "public ");
		$("#private").prop('disabled', true);
	}
});

$(document).ready(function() {
    $("#private").keydown(function (e) {
    	var lenght = $("#private").val().length;
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            (e.keyCode == 65 && e.ctrlKey === true) || 
            (e.keyCode >= 35 && e.keyCode <= 40)) {
	        return;
        }
        if(lenght == 1 || lenght == 5 || lenght == 9){
        	$("#private").val($("#private").val() + "-");
        }
       
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});

$(document).ready(function() {
    $("#sms").keyup(function (e) {
    	var length = $("#sms").val().length;
    	$("#send").prop('value', length);
		if(length > 0){
        	$("#send").prop('disabled', false);
        } else {
        	$("#send").prop('disabled', true);
        }
    	return;
    });
});
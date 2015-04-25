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
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
            (e.keyCode == 65 && e.ctrlKey === true) || 
            (e.keyCode >= 35 && e.keyCode <= 40)) {
	        return;
        }
        if(lenght == 1 || lenght == 5 || lenght == 9){
        	$("#private").val($("#private").val() + "-");
        }
        if ((e.shiftKey || (e.keyCode == 190 || e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});

$(document).ready(function() {
    $("#sms").keyup(function (e) {
    	var length = 64 - $("#sms").val().length;
    	$("#chars").prop('value', length + " characters");
		if(length < 64 && length > -1){
        	$("#send").prop('disabled', false);
        } else {
        	$("#send").prop('disabled', true);
        }
    	return;
    });
});
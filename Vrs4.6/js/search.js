$(document).ready(function(){
	//
	$("#formbuscar").keypress(function(e) {
        if (e.which == 13) {
        	// alert(" Enter");
            return false;
        }
    });
    //
    $("#busca").keypress(function(e) {
        if (e.which == 13) {
        var texto = $(this).val();
		var dataString = 'palabra='+ texto;
		if(texto==''){}
		else{
			$.ajax({
				type: "POST",
				url: "php/consultaSearch.php",
				data: dataString,
				cache: false,
				success: function(html){
					$("#tablaMain").html(html).show();
				}
			});
		}
	}
	}); 		
});
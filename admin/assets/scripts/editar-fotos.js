var Editarfotos = function () {

    return {

        //main function to initiate the module
        init: function () {
            
               

            
			
			$('#borrarfoto').live('click', function (e) {
				e.preventDefault();

				if (confirm("Seguro que desea eliminar la foto?") == false) {
					return;
				}
				
				var idfoto = $(this).attr("foto-id");
				$.ajax({
					type:"POST",
					url: "borrarfoto.php",
					data:{id:idfoto}
				}).done(function(msg){
					if (msg == 0){
						//alert("Foto borrada.");
						location.reload();
					}else{
						alert(msg);
						location.reload();
					}
				});
				
				var nRow = $(this).parents('tr')[0];
				oTable.fnDeleteRow(nRow);
				
				
			});

       

            
        }

    };

}();
var TablaCategorias = function () {

    return {

        //main function to initiate the module
        init: function () {
            
            if (!jQuery().dataTable) {
                return;
            }

            // begin first table
            var oTable = $('#tabla_categorias').dataTable({
				//Que columnas son ordenables
                "aoColumns": [
                  null,
                  { "bSortable": false },
                  { "bSortable": false }
                ],
                "aLengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "Todos"] // change per page values here
                ],
                // set the initial value
                "iDisplayLength": 20,
				"sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ categorías por página",
                    "oPaginate": {
                        "sPrevious": "Anterior",
                        "sNext": "Siguiente"
                    }
                },
            });

            jQuery('#tabla_categoria .group-checkable').change(function () {
                var set = jQuery(this).attr("data-set");
                var checked = jQuery(this).is(":checked");
                jQuery(set).each(function () {
                    if (checked) {
                        $(this).attr("checked", true);
                    } else {
                        $(this).attr("checked", false);
                    }
                    $(this).parents('tr').toggleClass("active");
                });
                jQuery.uniform.update(set);

            });
			
			$('#borrarcategoria').live('click', function (e) {
				e.preventDefault();

				if (confirm("Seguro que desea eliminar la categoría?") == false) {
					return;
				}
				
				var idlugar = $(this).attr("categoria-id");
				$.ajax({
					type:"POST",
					url: "borrarcategorias.php",
					data:{id:idlugar}
				}).done(function(msg){
					if (msg == 0){
						//alert("Categoría borrada.");
					}else{
						alert(msg);
						location.reload();
					}
				});
				
				var nRow = $(this).parents('tr')[0];
				oTable.fnDeleteRow(nRow);
				
				
			});

            jQuery('#tabla_categoria tbody tr .checkboxes').change(function(){
                 $(this).parents('tr').toggleClass("active");
            });

            jQuery('#tabla_categoria_wrapper .dataTables_filter input').addClass("form-control input-medium"); // modify table search input
            jQuery('#tabla_categoria_wrapper .dataTables_length select').addClass("form-control input-small"); // modify table per page dropdown
            //jQuery('#tabla_albums_wrapper .dataTables_length select').select2(); // initialize select2 dropdown

            
        }

    };

}();
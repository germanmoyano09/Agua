var TablaLugares = function () {

    return {

        //main function to initiate the module
        init: function () {
            
            if (!jQuery().dataTable) {
                return;
            }

            // begin first table
            var oTable = $('#tabla_flyers').dataTable({
				//Que columnas son ordenables
                "aoColumns": [
                  null,
                  { "bSortable": false },
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
                    "sLengthMenu": "_MENU_ flyers por página",
                    "oPaginate": {
                        "sPrevious": "Anterior",
                        "sNext": "Siguiente"
                    }
                },
            });

            jQuery('#tabla_flyers .group-checkable').change(function () {
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
			
			$('#borrarflyer').live('click', function (e) {
				e.preventDefault();

				if (confirm("Seguro que desea eliminar el flyer?") == false) {
					return;
				}
				
				var idflyer = $(this).attr("flyer-id");
				$.ajax({
					type:"POST",
					url: "borrarflyers.php",
					data:{id:idflyer}
				}).done(function(msg){
					if (msg == 0){
						//alert("Flyer borrado.");
					}else{
						alert(msg);
						location.reload();
					}
				});
				
				var nRow = $(this).parents('tr')[0];
				oTable.fnDeleteRow(nRow);
				
				
			});

            jQuery('#tabla_flyers tbody tr .checkboxes').change(function(){
                 $(this).parents('tr').toggleClass("active");
            });

            jQuery('#tabla_flyers_wrapper .dataTables_filter input').addClass("form-control input-medium"); // modify table search input
            jQuery('#tabla_flyers_wrapper .dataTables_length select').addClass("form-control input-small"); // modify table per page dropdown
            //jQuery('#tabla_albums_wrapper .dataTables_length select').select2(); // initialize select2 dropdown

            
        }

    };

}();
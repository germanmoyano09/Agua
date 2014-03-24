var TablaLugares = function () {

    return {

        //main function to initiate the module
        init: function () {
            
            if (!jQuery().dataTable) {
                return;
            }

            // begin first table
            var oTable = $('#tabla_socio').dataTable({
				//Que columnas son ordenables
                "aoColumns": [
                  null,
				  null,
                  { "bSortable": false },
                  { "bSortable": false }
                ],
                "aLengthMenu": [
                    [20, 50, 100, -1],
                    [20, 50, 100, "Todos"] // change per page values here
                ],
                // set the initial value
                "iDisplayLength": 20,
				"sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ usuarios por página",
                    "oPaginate": {
                        "sPrevious": "Anterior",
                        "sNext": "Siguiente"
                    }
                },
            });

            jQuery('#tabla_lugares .group-checkable').change(function () {
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
			
			$('#borrarsocio').live('click', function (e) {
				e.preventDefault();

				if (confirm("Seguro que desea eliminar el usuario y todos sus datos?") == false) {
					return;
				}
				
				var idsocio = $(this).attr("socio-id");
				$.ajax({
					type:"POST",
					url: "borrarsocio.php",
					data:{id:idsocio}
				}).done(function(msg){
					if (msg == 0){
						alert("Socio borrado.");
					}else{
						alert(msg);
						location.reload();
					}
				});
				
				var nRow = $(this).parents('tr')[0];
				oTable.fnDeleteRow(nRow);
				
				
			});

            jQuery('#tabla_lugares tbody tr .checkboxes').change(function(){
                 $(this).parents('tr').toggleClass("active");
            });

            jQuery('#tabla_lugares_wrapper .dataTables_filter input').addClass("form-control input-medium"); // modify table search input
            jQuery('#tabla_lugares_wrapper .dataTables_length select').addClass("form-control input-small"); // modify table per page dropdown
            //jQuery('#tabla_albums_wrapper .dataTables_length select').select2(); // initialize select2 dropdown

            
        }

    };

}();
var Login = function () {

	var formularioRegistro = function(){
		$('.login-form').validate({
			errorElement: 'span', //default input error message container
			errorClass: 'help-block', // default input error message class
			focusInvalid: false, // do not focus the last invalid input
			ignore: "",
			rules: {
				
				nombre: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				nacimiento: {
					required: true
				},
				dni: {
					required: true
				},
				codigo: {
					required: true
				},
				sexo: {
					required: true
				}
				
			},
			
			messages: { // custom messages for radio buttons and checkboxes
				nombre: {
					required: "Ingrese su nombre"
				},
				email: {
					required: "Ingrese un email válido"
				},
				nacimiento: {
					required: "Ingrese su fecha de nacimiento"
				},
				dni: {
					required: "Ingrese su DNI"
				},
				codigo: {
					required: "Ingrese el código VIP"
				},
				sexo: {
					required: "Seleccione su sexo"
				}
			},
			
			errorPlacement: function (error, element) { // render error placement for each input type
				if (element.attr("name") == "sexo") { // for uniform radio buttons, insert the after the given container
					error.insertAfter("#form_sexo_error");
				} else if (element.attr("name") == "nacimiento") { // for uniform radio buttons, insert the after the given container
					error.insertAfter("#form_nacimiento_error");
				} else if (element.closest('.input-icon').size() === 1) {
					error.insertAfter(element.closest('.input-icon'));
				} else {
					error.insertAfter(element);
				}
			},

			invalidHandler: function (event, validator) { //display error alert on form submit   

			},

			highlight: function (element) { // hightlight error inputs
				$(element)
					.closest('.form-group').addClass('has-error'); // set error class to the control group
			},

			success: function (label) {
				label.closest('.form-group').removeClass('has-error');
				label.remove();
			},

			submitHandler: function (form) {
				agregarUsuarioVip();
			}
		});
		
		//Para validar datepicker despues de un cambio
		$('#fecha_nacimiento_picker').on('changeDate', function(ev) {
			if($('#fecha_nacimiento_picker').valid()){
			   $('#fecha_nacimiento_picker').closest('.form-group').removeClass('has-error');
			}
		});
		
	
	}
	
	


    return {
        init: function () {
        	formularioRegistro();
			
			$.backstretch([
		        "../admin/assets/img/bg/vip/1.jpg",
		        "../admin/assets/img/bg/vip/2.jpg",
		        "../admin/assets/img/bg/vip/3.jpg",
		        "../admin/assets/img/bg/vip/4.jpg"
		        ], {
		          fade: 1000,
		          duration: 8000
		    });
        }

    };

}();
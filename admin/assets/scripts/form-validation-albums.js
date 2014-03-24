var FormValidation = function () {

    var handleValidationLugar = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var form1 = $('#agregar_lugar');
            var error1 = $('.alert-danger', form1);
            var success1 = $('.alert-success', form1);

            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {
                    nombrelugar: {
                        minlength: 1,
                        required: true
                    },
					fotoportada: {
                        required: true
                    }
                },
				
				errorPlacement: function (error, element) { // render error placement for each input type
                    if (element.attr("name") == "fotoportada") { // for uniform radio buttons, insert the after the given container
                        error.insertAfter("#contenedor_imagen_upload");
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success1.hide();
                    error1.show();
                    App.scrollTo(error1, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) { //En caso de ser valiso el formulario
					enviarFormLugar();
                    //success1.show();
                    error1.hide();
                }
            });


    }

    var handleValidationAlbum = function() {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

            var form2 = $('#agregar_album');
            var error2 = $('.alert-error', form2);
            var success2 = $('.alert-success', form2);

            //IMPORTANT: update CKEDITOR textarea with actual content before submit
            form2.on('submit', function() {
                for(var instanceName in CKEDITOR.instances) {
                    CKEDITOR.instances[instanceName].updateElement();
                }
            })

            form2.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {
					lugar: {
                        required: true
                    },
                    fecha: {
                        required: true
                    }
                },

                messages: { // custom messages for radio buttons and checkboxes
                    lugar: {
                        required: "Debe seleciconar un lugar, si el lugar no existe agréguelo ántes de completar éste formulario."
                    },
                    fecha: {
                        required: "Debe seleccionar un fecha.",
                    }
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    if (element.attr("name") == "lugar") { // Poner el error despues del contenedor
                        error.insertAfter("#seleccion_lugar");
                    }else if (element.attr("name") == "fecha") { 
                        error.insertAfter("#datepicker_contenedor");
					}
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    success2.hide();
                    error2.show();
                    App.scrollTo(error2, -200);
                },

                highlight: function (element) { // hightlight error inputs
                   $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
					enviarFormAlbum();
                    //success2.show();
                    error2.hide();
                }

            });

    }

    return {
        //main function to initiate the module
        init: function () {

            handleValidationLugar();
            handleValidationAlbum();

        }

    };

}();
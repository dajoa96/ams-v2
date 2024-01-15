(function ($) {
    "use strict";

    //****************************** */
    // AREA DE ASIGNACIONES   ********/
    //****************************** */
    $(".schedule").on("click", programarcita);
    $("#frSchedule").on("submit", enviardata);
    $("#frContact").on("submit", enviarcontacto);
    
    //****************************** */
    // AREA DE FUNCIONES   ***********/
    //****************************** */
    //Se coloca en la seccion de programar una cita
    function programarcita(){                
        //Quita la clase de oculto
        $("#schedule").removeClass("d-none");
        //Coloca el select en el option deseado
        $("#SERVICES").val($(this).data("key"));
        //Centra el foco en el control de nombre
        $("#NOMBRE").focus();        
    }

    function enviardata(e){
        $("#mensajeapp").html("");
        e.preventDefault();   
        const submitBtn = $("#frSchedule [type=submit]");
        submitBtn.attr('disabled', true);

        grecaptcha.ready(function() {
            grecaptcha.execute('6Le17VEpAAAAAKmNah6R0vkIk1tfnx_8nnC5qnW_', {action: 'submit'}).then(function(token) {
                // Add your logic to submit to your backend server here.     
                const fD = new FormData();                            
                fD.append("NOMBRE", $("#NOMBRE").val());
                fD.append("EMAIL", $("#EMAIL").val());
                fD.append("PHONE", $("#PHONE").val()); 
                fD.append("CARMODEL", $("#CARMODEL").val());
                fD.append("SERVICES", $("#SERVICES").val());
                fD.append("FECHA", $("#FECHA").val());
                fD.append("TOKEN", $("#TOKEN").val());
                fD.append("LANG", getCurrentLangISO());
                fD.append("g-recaptcha-response", token);
                fD.append("action", $("#actionapp").val());
                const params = { ...Object.fromEntries(fD)};

                $.ajax({
                    data: params,
                    url: 'ctr.php',
                    type: 'post',                
                    datatype: 'json',        
                    success: async function (response) {                                    
                        //Valida el response
                        submitBtn.attr('disabled', false);
                        if (response == "") {
                            $("#mensajeapp").html(generaralerta("No response received from server", 'danger', true, 'alert-sm'));
                        } else {
                            if (isvalidJSON(response)) {
                                let rp = JSON.parse(response);
                                if (rp[0] == 0) {
                                    $("#mensajeapp").html(generaralerta(rp[1], 'success', true, 'alert-sm'));
                                    $('#frSchedule')[0].reset();
                                }
                                else 
                                $("#mensajeapp").html(generaralerta(rp[1], 'danger', true, 'alert-sm'));
                            } else {
                                $("#mensajeapp").html(generaralerta(response, 'danger', true, 'alert-sm'));
                            }
                        }
                    }, 
                    error: async function (response) {           
                        $("#mensajeapp").html(generaralerta("500 Error", 'danger', true, 'alert-sm'));                                    
                    } 
                });
            }).catch(e => submitBtn.attr('disabled', false))
        });
    }

    function enviarcontacto(e){
        $("#mensajes-contact").html("");
        e.preventDefault();
        const submitBtn = $("#frContact [type=submit]");
        submitBtn.attr('disabled', true);

        grecaptcha.ready(function() {
            grecaptcha.execute('6Le17VEpAAAAAKmNah6R0vkIk1tfnx_8nnC5qnW_', {action: 'submit'}).then(function(token) {
         
                const fD = new FormData();                            
                const Fecha = new Date();
                fD.append("NOMBRE", $("#CONTACT_NOMBRE").val());
                fD.append("EMAIL", $("#CONTACT_EMAIL").val());
                fD.append("CONTACT_MESSAGE", $("#CONTACT_MESSAGE").val());         
                fD.append("FECHA", Fecha.toDateString());         
                fD.append("HORA", Fecha.toTimeString());         
                fD.append("TOKEN", $("#TOKEN").val());
                fD.append("LANG", getCurrentLangISO());
                fD.append("action", $("#actioncontact").val());
                const params = { ...Object.fromEntries(fD)};

                $.ajax({
                    data: params,
                    url: 'ctr.php',
                    type: 'post',                
                    datatype: 'json',        
                    success: async function (response) {                                    
                        submitBtn.attr('disabled', false);
                        //Valida el response
                        if (response == "") {
                            $("#mensajes-contact").html(generaralerta("No response received from server", 'danger', true, 'alert-sm'));                    
                        } else {
                            if (isvalidJSON(response)) {
                                let rp = JSON.parse(response);
                                if (rp[0] == 0) {
                                    $("#mensajes-contact").html(generaralerta(rp[1], 'success', true, 'alert-sm'));
                                    $('#frContact')[0].reset();
                                }
                                else 
                                $("#mensajes-contact").html(generaralerta(rp[1], 'danger', true, 'alert-sm'));
                            } else {
                                $("#mensajes-contact").html(generaralerta(response, 'danger', true, 'alert-sm'));
                            }
                        }
                    }, 
                    error: async function (response) {           
                        $("#mensajes-contact").html(generaralerta("500 Error", 'danger', true, 'alert-sm'));                                    
                    } 
                });
            }).catch((e) => submitBtn.attr('disabled', false));
        });
    }

    function generaralerta(
    mensaje = null ,          // Mensaje a mostrar puede ser texto o HTML
    tipo = null,              // Tipo de alerta, success, danger, primary, etc.
    ocultable = true,         // Mostrar boton de ocultar alerta
    clasesadicionales = ""    // Clases adicionales
  ) {
    try {
        if (!mensaje || mensaje === '') throw new Error('No hay mensaje');
        const validTypes = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];
        // const { type } = cfg;
        const el = document.createElement('div');
        el.innerHTML = mensaje;
        if (ocultable !== false) {
            el.classList = 'alert-dismissible fade show';
            if (clasesadicionales != "") el.classList.add(clasesadicionales);
            el.setAttribute('role', 'alert');
            const dismissBtn = document.createElement('button');
            dismissBtn.classList = 'btn-close';
            dismissBtn.type = 'button';
            dismissBtn.setAttribute('data-bs-dismiss', 'alert');
            dismissBtn.setAttribute('aria-label', 'close');
            el.append(dismissBtn);
        }
        if (tipo && tipo !== '' && validTypes.includes(tipo.toLowerCase())) el.classList.add('alert-' + tipo);
        el.classList.add('alert');
        return el;
    } catch (error) {
        console.error('Generador de Alertas: ', error);
    }
}

function isvalidJSON(str) {
    try {
        JSON.parse(str);
        return true;
    } catch {
        return false;
    }
}
    
})(jQuery);


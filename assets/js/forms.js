(function ($) {
    "use strict";

    //****************************** */
    // AREA DE ASIGNACIONES   ********/
    //****************************** */
    $(".schedule").on("click", programarcita);
    $("#frSchedule").on("submit", enviardata);
    
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
        e.preventDefault();        
        const fD = new FormData();                            
        fD.append("NOMBRE", $("#NOMBRE").val());
        fD.append("EMAIL", $("#EMAIL").val());
        fD.append("PHONE", $("#PHONE").val()); 
        fD.append("CARMODEL", $("#CARMODEL").val());
        fD.append("SERVICES", $("#SERVICES").val());
        fD.append("FECHA", $("#FECHA").val());
        fD.append("TOKEN", $("#TOKEN").val());
        const params = { action: 'appoiment', ...Object.fromEntries(fD)};

        $.ajax({
            data: params,
            url: 'ctr.php',
            type: 'post',                
            datatype: 'json',        
            success: async function (response) {                                    
                console.log(response);
                //Valida el response                    
                if (response == "") {
                    let mensajeError = "Serve don´t response";                    
                } else {
                    if (response == 0) {
                        
                    } else {
                        let mensajeError = response;                        
                    }
                }
            }, 
            error: async function (response) {           
                let mensajeError = '500 Error';
            } 
        });
    }
    
})(jQuery);


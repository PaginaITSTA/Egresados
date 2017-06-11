function verTablaEncargado() {
	ocultarTablaAlumnos();
	ocultarContenidoInicial();
	$("#tablaTemporal").removeClass("hide");
	verTablaTemporal();
}

function ocultarTablaEncargado() {
	$("#tablaTemporal").addClass("hide");
}

function verContenidoInicial(){
	$("#contenidoInicial").removeClass("hide");
	ocultarTablaAlumnos();
	ocultarTablaEncargado();
}

function ocultarContenidoInicial(){
	$("#contenidoInicial").addClass("hide");
}

function ocultarTablaAlumnos(){
	$("#tablaAlumnos").addClass("hide");
}

function muestraTablaAlumnos(){
	ocultarContenidoInicial();
	ocultarTablaEncargado();
	verTablaAlumnos();
	$("#tablaAlumnos").removeClass("hide");
}

function verTablaAlumnos(){
	
	$.ajax({
		// La URL de la petición
        url: "controlador/fragmentTablaAlumnos.php",
        // la información a enviar
        data: {
            //busqueda: $("#busqueda2").val(),
            //parametro: $("#parametro2").val()
        },
        // especifica si será una petición POST o GET
        type: 'POST',
        // el tipo de información que se espera de respuesta
        dataType: 'html',
        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success: function (respuesta) {
            $("#tablaAlumnos").html(respuesta);
            //dashboard();
        },
        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto de la petición en crudo y código de estatus de la petición
        error: function (xhr, status) {
            alert('Disculpe, No coincide esta consulta en la base de datos');
        },

        // código a ejecutar sin importar si la petición falló o no
        complete: function (xhr, status) {
        //alert('Petición realizada');
        }
	});
}

function verTablaTemporal(){
	
	$.ajax({
        url: "controlador/fragmentTablaTemporal.php",
        data: {
        },
        type: 'POST',
        dataType: 'html',
        success: function (respuesta) {
            $("#tablaTemporal").html(respuesta);
        },
        error: function (xhr, status) {
            alert('Disculpe, No coincide esta consulta en la base de datos');
        },
        complete: function (xhr, status) {
        }
	});
}
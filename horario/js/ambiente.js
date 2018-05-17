	$(document).ready(function(){

 $('#Regional').change(function(){
            
          var  val= $('#Regional').val(); //recibe el id del departamento para filtrar los municipios
            $('#Centro').html('<option value="">Cargando...aguarde</option>'); // mensaje que se muestra mientras carga la operacion
        
         $.ajax({
                url: 'funciones/php/ListarCentroPorRegional.php?id='+val, // funcion php con el id del departamento como parametro "id"
                data: 'id='+val,
                type: 'GET',
                success: function(resp){
                    //si todo es exitoso:
                 $('#Centro').html(resp); // rellenamos la lista de municipios segun el id del departamento
                 }
            });
        });

 
 $('#Centro').change(function () {

     var val = $('#Centro').val();
     $('#Sede').html('<option value="">Cargando...aguarde</option>');

     $.ajax({
         url: 'funciones/php/ListarSedes.php?id='+val,
         data: 'id=' + val,
         type: 'POST',

         success: function (resp) {
             $('#Sede').html(resp);
         }
     });

 });

$('#AgregarAmbiente').click(function(){

        var regional = $("#Regional").val();
        
            if (regional == "") {
                alertify.error('Debe seleccionar una regional disponible  ');
                $("#Regional").focus();
                return false;
            }


    
        var centro = $("#Centro").val();
    
        if (centro == "") {
          alertify.error('Debe seleccionar un departamento');
          $("#Centro").focus();
          return false;
      }

      var sede = $("#Sede").val();
     
      if (sede == "") {
          alertify.error('Debe Introducir la sede del programa');
          $("#Sede").focus();
          return false;
      }
      var tipo = $("#Tipo").val();
    
      if (tipo == "") {
          alertify.error('Debe Seleccionar un Tipo de Ambiente para el ambiente');
          $("#Tipo").focus();
          return false;
      }
    
     var nombre = $('#Nombre').val();

      if (nombre =="") {
   		alertify.error('Debe Introducir un Nombre para el centro');
   		$("#Nombre").focus();
      	return false;
      }
    var cantidad = $('#Cantidad').val();

      if (cantidad =="") {
   		alertify.error('Debe Introducir un Cantidad de Aprendices para el programa');
   		$("#Cantidad").focus();
      	return false;
      }
      
      
        	
        $.ajax({    
            type: "GET",
            url: 'funciones/php/RegistrarAmbiente.php?regional='+regional+'&centro='+centro+'&sede='+sede+'&tipo='+tipo+'&nombre='+nombre+'&cantidad='+cantidad,
            data:'regional='+regional,
            success: function() {
            	$('#ModalRegistroAmbiente').modal('hide');
                alertify.success('Programa Registrada Exitosamente!'); //Mensaje de Datos Correctamente Insertados
                $('#tabla_ambiente').load("funciones/php/TablaAmbiente.php"); //Recargamos la Tabla(Para que se muestren los Nuevos Resultados)
                 //Limpiamos los Input
            }
        }); //Terminamos la Funcion Ajax
        return false; //Agregamos el Return para que no Recargue la Pagina al Enviar el Formulario  
    }); //Terminamos la Funcion Click
			// Javascript method's body can be found in assets/js/demos.js
$("#ambient").addClass("active");

            

		});
		
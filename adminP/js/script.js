 $(document).ready(function() {


     function readURL(input) {
         if (input.files && input.files[0]) {
             var reader = new FileReader();

             reader.onload = function(e) {
                 $('#preview').attr('src', e.target.result);
             }

             reader.readAsDataURL(input.files[0]); // convert to base64 string
         }
     }

     $("#imagen_proyecto").change(function() {
         readURL(this);
     });



     //  $.ajax({
     //      type: "POST",
     //      url: "controller/dashboard/consulPerfil.controlador.php",
     //      dataType: "json",
     //      success: function(data) {

     //          document.getElementById("preview").src = "views/assets/images/medicos/" + data['foto'];

     //          $('#nombre').val(data['nombre_completo']);
     //          $('#correo').val(data['correo']);

     //          $('#num_colegiatura').val(data['num_colegiatura']);
     //          $('#type_colegiatura_perfil').val(data['type_colegiatura_perfil']);
     //          $('#especialidad').val(data['especialidad']);
     //          $('#telefono').val(data['telefono']);
     //          $('#ubicacion').val(data['ubicacion']);
     //          $('#sobre_mi').val(data['sobre_mi']);
     //          $('#nombre_clinica').val(data['nombre_clinica']);
     //          $('#direccion_clinica').val(data['direccion_clinica']);
     //          $('#precio_consulta').val(data['precio_consulta']);
     //          $('#precio_online').val(data['precio_online']);
     //          $('#services').tagsinput('add', data['servicios']);
     //          $('#otros_nro_colegiatura').tagsinput('add', data['otros_nro_colegiatura']);
     //          $('#otras_especialidades').tagsinput('add', data['otras_especialidades']);
     //          $('#idiomas').tagsinput('add', data['idiomas']);
     //          $('#titulo').val(data['titulo']);
     //          $('#universidad').val(data['universidad']);
     //          $('#anio_exp').val(data['años']);
     //          $('#membresia').val(data['membresia']);

     //          if (data['check_tel'] == 1) {
     //              document.getElementById("check_tel").checked = true;

     //          } else {
     //              document.getElementById("check_tel").checked = false;
     //          }


     //          if (data['check_correo'] == 1) {
     //              document.getElementById("check_correo").checked = true;
     //          } else {
     //              document.getElementById("check_correo").checked = false;
     //          }



     //      }
     //  });

 });
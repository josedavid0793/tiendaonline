<!DOCTYPE html>
<html lan="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="estilo.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
<!--https://material.io/resources/icons/?search=phone&icon=local_phone&style=outline-->
<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">

<title>Formularios</title>


</head>
<body>

    <div class="row">
        <div class="col-sm-6 col-md-6 registro">
        
        <form id="formulario-online" method="post" action="registro.php" target="_black">
            <h2 class="titulo-registro brb">Nuevos Clientes</h2>
            <p class="pto">Bienvenido a tiendaonline Colombia. Registrate y sé parte de nuestra tienda de moda online.</p>
            <div class="div_form">
              <div class="label-float label-size">
               <label class="mtm" form="registro-email">Email:
                <span class="requerido">*</span>
               </label>
              </div>
              <div class="label-float input-size">
               <input type="email" name="email" id="registro-email" placeholder="Ingrese su correo electronico" required="">
              </div>
           </div>
        
           <div class="div_form">
             <div class="label-float label-size">
               <label class="mtm" form="registro-contraseña">Contraseña:
                  <span class="requerido">*</span>
                </label>
              </div>
              <div class="label-float input-size">
                <input type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña" required="">
               </div>
            </div>
           
           <div class="div_form">
              <div class="label-float label-size">
                 <label class="mtm">Repita su Contraseña:
                  <span class="requerido">*</span>
                 </label>
              </div>
              <div class="label-float input-size">
                <input type="password" name="contrasenaconfir" id="" placeholder="Repita su contraseña" required="">
              </div>
            </div>  
        
        <div class="div_form">
              <div class="label-float label-size">
                    <label class="mtm">Nombres:
                     <span class="requerido">*</span>
                    </label>
              </div>
              <div class="label-float input-size">
                 <input  type="text" name="nombres" id="" placeholder="Ingrese sus nombres" required="">
              </div>
        </div>
        
        <div class="div_form">
              <div class="label-float label-size">
                  <label class="mtm">Apellidos:
                   <span class="requerido">*</span>
                  </label>
              </div>
              <div class="label-float input-size">
                <input type="text" name="apellidos" id="" placeholder="Ingrese sus apellidos" required="">
             </div>
        </div>
        
        <div class="div_form">
              <div class="label-float label-size">
                   <label class="mtm">Documento:
                     <span class="requerido">*</span>
                    </label>
              </div>
           <div class="label-float documento-size">
                  <div class="label-float input-size1">
                     <input type="text" name="documento" id="" placeholder="número documento" required="">
                   </div>
          
                  <div class="label-float-rigth input-size1">
                        <label class="label-float mtm mlm">Tipo:</label>

                        <div class="label-float div-70">
                           <?php
                               include 'conexiondb.php';
                               $consulta = ("SELECT * FROM tipo_documento");
                               $res_consulta = $con->query($consulta);
                           ?>

                           <select name="tipodocumento" class="select-td">

                          <?php

                              
                               while($option =$res_consulta->fecth_array())
                               {
              
                           ?>
                             <option value="<?php echo $option['codigo_tp']?>"><?php echo $option['codigo_tp'];?>
                             </option>
                           <?php

                                   }
                           ?>

                        
                            </select>
                        </div>
                  </div>

              </div>
          </div>
          
          <div class="div_form">
               <div class="label-float label-size">
                  <label>Fecha de nacimiento
                     <span class="requerido">*</span>
                  </label>
               </div>
               <div class="label-float documento-size">
                   <div class="label-float wg32 mrs">
                       <input size="2" maxlength="2" type="date" name="fecha_nacimiento" id="" placeholder="Día" value="">
                   </div>
                   <!--<div class="label-float wg32 mrs">
                       <input size="2" maxlength="2" type="text" name="fecha_nacimiento" id="" placeholder="Mes" value="">
                   </div>
                   <div class="label-float wg32">
                       <select class="prn select-td">
                           <option selected="selected" disabled="">Seleccione</option>
                           <option>2007</option>
                           <option>2007</option>
                       </select>
                   </div>-->
               </div>
          </div>
   
         <input type="submit" value="Enviar">
    </form>
        
    </div>
        
        
       <div class="col-sm-6 col-md-6 registro">
        
        <form id="" method="post" action="" target="">
            <h2 class="titulo-registro brb">Ingreso Clientes</h2>
            <p class="pto">Bienvenido a tiendaonline Colombia. Registrate y sé parte de nuestra tienda de moda online.</p>
            <div class="div_form">
              <div class="label-float label-size">
               <label class="mtm" form="registro-email">Email:
                <span class="requerido">*</span>
               </label>
              </div>
              <div class="label-float input-size">
               <input type="email" name="email" id="registro-email" placeholder="Ingrese su correo electronico" required="">
              </div>
           </div>
        
           <div class="div_form">
             <div class="label-float label-size">
               <label class="mtm" form="registro-contraseña">Contraseña:
                  <span class="requerido">*</span>
                </label>
              </div>
              <div class="label-float input-size">
                <input type="password" name="contrasena" id="registro-contraseña" placeholder="Ingrese su contraseña" required="">
               </div>
            </div>


          <br>    
         <input type="submit" value="Enviar">
    </form>
        
    </div> 
        
    </div>
    
    



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/d7f8911c59.js"></script>

<script>
    $("#formulario-online").validate({
           rules: {
               contrasena: { 
                 required: true,
                    minlength: 6,
                    maxlength: 10,

               } , 

                   contrasenaconfir: { 
                    equalTo: "#contrasena",
                     minlength: 6,
                     maxlength: 10
               }


           },
     messages:{
         contrasena: { 
                 required:"Password Requerido",
                 minlength: "Minimo 6 caracteres",
                 maxlength: "Maximo 10 caracteres"
               },
       contrasenaconfir: { 
         equalTo: "El password debe ser igual al anterior",
         minlength: "Minimo 6 caracteres",
         maxlength: "Maximo 10 caracteres"
       }
     }

});
</script>
</body>


</html>

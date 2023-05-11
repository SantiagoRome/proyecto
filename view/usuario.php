<main>
    <section class="sectionRegistro">
        <h1>Registro</h1>
        <form action="index.php?action=verPerfil" id="registrarse" method="POST">
            <input type="text" placeholder="E-mail" name="email" id="e-mail" required>
            <input type="text" placeholder="Usuario" name="usuario" id="usuario" onchange="comprobarUsuario()" required>
            <input type="text" placeholder="Nombre" name="nombre" id="nombre" required>
            <input type="text" placeholder="Apellidos" name="apellidos" id="apellidos" required>
            <input type="date" name="fnac" id="fnac" required>
            <input type="password" placeholder="Contraseña (1-12, una mayuscula, un numero)" id="contrasena" name="contrasena" required> 
            <input type="password" placeholder="repite la contraseña" id="repetir" name="repetir" onchange="comprobarContrasena()" required>
            <p id="coincidencia"></p>
            <p id="existeUsuario"></p>
            <p id="errorEscritura"></p>
            <input type="submit" class="submitRegistro" id="botonRegistro" value="Registrarse" onclick="event.preventDefault();comprobarRegistro()">
        </form>
    </section>
    <section class="sectionInicioSesion">
        <h1>Inicio de sesión</h1>
        <form action="index.php?action=verPerfil" id="inicioDeSesion" name="inicioDeSesion" method="POST">
            <input type="text" placeholder="Usuario" name="usuario" id="usuarioIni">
            <input type="password" placeholder="Contraseña" name="contrasena" id="contrasenaIni"> 
            <p class="pErrorInicio" id="errorInicio" style="display: none;" >La contraseña o el usuario son incorrectos</p>
            <input class="submitRegistro" type="button" onclick="iniciarSesion()" value="Iniciar Sesion">
        </form>
    </section> 
</main>
<script>
    document.getElementById("fnac").max = new Date().toISOString().split("T")[0];
    function comprobarUsuario(){
            var nombreUsu=document.getElementById("usuario").value;
            const xhttp= new XMLHttpRequest();
            
           xhttp.onload = function(){
               resultado=this.responseText;
               if(resultado=="existe"){
                    document.getElementById("existeUsuario").innerHTML="el nombre de usuario ya esta escogido";
               }else{
                    document.getElementById("existeUsuario").innerHTML="";
                }
           }
           xhttp.open("GET","./view/ajax/comprobarUser.php?nombreUs="+nombreUsu);
           xhttp.send();
          
    }
    function comprobarContrasena(){
            var contrasena=document.getElementById("contrasena").value;
            var contrasenaRepetir=document.getElementById("repetir").value;
            if(contrasena!=contrasenaRepetir){
                document.getElementById("coincidencia").innerText="Las contraseñas no coinciden";
                document.getElementById('botonRegistro').disabled=true;    
            }else{
                document.getElementById("coincidencia").innerText="";
                document.getElementById('botonRegistro').disabled=false;
            }
        }
        function iniciarSesion(){          
            var contrasena=document.getElementById("contrasenaIni").value;
            var nombreUsu=document.getElementById("usuarioIni").value;
            const xhttp= new XMLHttpRequest();
            
           xhttp.onload = function(){
               resultado=this.responseText;
               if(resultado=="error"){
                    document.getElementById("errorInicio").style.display="initial";
                   
               }else if(resultado=="correcto"){
                    document.inicioDeSesion.submit();
                
                }
           }
           xhttp.open("GET","./view/ajax/iniciarSesion.php?contrasena="+contrasena+"&nombreUs="+nombreUsu);
           xhttp.send();
          
        }
        function comprobarRegistro(){

           var nombre=document.getElementById("nombre").value;
           var apellidos=document.getElementById("apellidos").value;
           var email=document.getElementById("e-mail").value;
           var fnac=document.getElementById("fnac").value;
           var contrasena=document.getElementById("contrasena").value;
           var usuario=document.getElementById("usuario").value;
           const xhttp= new XMLHttpRequest();

          xhttp.onload = function(){
                respuesta=this.responseText;
                console.log(respuesta);
               if(respuesta=="true"){
                    formulario=document.getElementById('registrarse');
                    formulario.submit();
               }else{
                   document.getElementById("errorEscritura").innerText=respuesta;
               }              
          }
          xhttp.open("GET","./view/ajax/comprobarFormulario.php?nombre="+nombre+"&apellidos="+apellidos+"&email="+email+"&fnac="+fnac+"&contrasena="+contrasena+"&usuario="+usuario);
          xhttp.send();  
       }
</script>
<main>
    <section class="sectionRegistro">
        <h1>Registro</h1>
        <form action="index.php?action=verPerfil" id="registrarse">
            <input type="text" placeholder="E-mail" name="e-mail" id="e-mail" required>
            <input type="text" placeholder="Usuario" name="usuario" id="usuario" onchange="comprobarUsuario()" required>
            <input type="text" placeholder="Nombre" name="nombre" id="nombre" required>
            <input type="text" placeholder="Apellidos" name="apellidos" id="apellidos" required>
            <input type="date"  id="fnac" required>
            <input type="password" placeholder="Contraseña (1-12, una mayuscula, un numero)" id="contrasena" name="contrasena" required> 
            <input type="password" placeholder="repite la contraseña" id="repetir" name="repetir" onchange="comprobarContrasena()" required>
            <label id="conincidencia"></label>
            <label id="existeUsuario"></label>
            <label id="errorEscritura"></label>
            <input type="button" value="Hola" onclick="comprobarRegistro()">
            <input type="hidden" name="action" value="verPerfil">
        </form>
    </section>
    <section class="sectionInicioSesion">
        <h1>Inicio de sesión</h1>
        <form action="index.php?action=verPerfil" id="inicioDeSesion" name="inicioDeSesion">
            <input type="text" placeholder="Usuario" name="usuario" id="usuarioIni">
            <input type="password" placeholder="Contraseña" name="contrasena" id="contrasenaIni"> 
            <label id="errorInicio" style="display: none;" >La contraseña o el usuario son incorrectos</label>
            <input type="hidden" name="action" value="verPerfil">
            <input type="button" onclick="iniciarSesion()" value="Iniciar Sesion">
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
                    document.getElementById("existeUsuario").innerHTML="el nombre de usuario ya esta escogido"
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
                document.getElementById("conincidencia").innerText="Las contraseñas no coinciden";    
            }else{
                document.getElementById("conincidencia").innerText=""; 
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
                    return false;
               }else if(resultado=="correcto"){
                    return true; 
                
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
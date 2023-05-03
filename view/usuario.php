<main>
    <section class="sectionRegistro">
        <h1>Registro</h1>
        <form action="index.php?action=verPerfil">
            <input type="text" placeholder="E-mail" name="e-mail">
            <input type="text" placeholder="Usuario" name="usuario">
            <input type="text" placeholder="Nombre" name="nombre">
            <input type="text" placeholder="Apellidos" name="apellidos">
            <input type="text" placeholder="Fecha de nacimiento (dd/mm/yyyy)">
            <input type="password" placeholder="Contraseña (1-12, una mayuscula, un numero)" id="contrasena" name="contrasena">
            <input type="password" placeholder="repite la contraseña" id="repetir" name="repetir" onchange="comprobarContrasena()">
            <label id="cambiar"> </label>
        </form>
    </section>
    <section class="sectionInicioSesion">
        <h1>Inicio de sesión</h1>
        <form action="index.php?action=verPerfil" id="inicioDeSesion" name="inicioDeSesion">
            <input type="text" placeholder="Usuario" name="usuario" id="usuarioIni">
            <input type="password" placeholder="Contraseña" name="contrasena" id="contrasenaIni"> 
            <?php
            if(isset($_GET['error'])){
                ?>
                <label>La contraseña o el usuario son incorrectos</label>
                <?php
            }
            ?>
            <input type="button" onclick="iniciarSesion()" value="Iniciar Sesion">
        </form>
        <form action="index.php?action=verUsuario&error=si" id="fallo" name="fallo">

        </form>
    </section> 
</main>
<script>
    function comprobarContrasena(){
            var contrasena=document.getElementById("contrasena").value;
            var contrasenaRepetir=document.getElementById("repetir").value;
            if(contrasena!=contrasenaRepetir){
                document.getElementById("cambiar").innerText="Las contraseñas no coinciden";    
            }else{
                document.getElementById("cambiar").innerText=""; 
            }
        }
        function iniciarSesion(){          
            var contrasena=document.getElementById("contrasenaIni").value;
            var nombreUsu=document.getElementById("usuarioIni").value;
            const xhttp= new XMLHttpRequest();
            
           xhttp.onload = function(){
               resultado=this.responseText;
               console.log(resultado+"a");
               if(resultado=="error"){
                let formulario=document.getElementById("fallo");
                console.log(num1);
                   formulario.submit();
                   console.log("hola?");
               }else if(resultado=="correcto"){
                 document.inicioDeSesion.submit();  
                console.log("hola!");
                }
           }
           xhttp.open("GET","./view/ajax/iniciarSesion.php?contrasena="+contrasena+"&nombreUs="+nombreUsu);
           xhttp.send();
          
        }
        function comprobarRegistro(){

           var nombre=document.getElementById("nombre").value;
           var apellidos=document.getElementById("apellidos").value;
           var email=document.getElementById("e-mail").value;
           var telefono=document.getElementById("telefono").value;
           var contrasena=document.getElementById("contrasena").value;
           var nombreUs=document.getElementById("nombreUs").value;
           const xhttp= new XMLHttpRequest();

          xhttp.onload = function(){
                existe=this.responseText;
                existe=existe.substr(0,(existe.length-2));
               if(existe=="true"){
                document.registro.submit();
               }else{
                   document.getElementById("4").innerText=existe;
                   document.getElementById("4").setAttribute("style","");
               }              
          }
          xhttp.open("GET","comprobarFormulario.php?nombre="+nombre+"&apellidos="+apellidos+"&email="+email+"&telefono="+telefono+"&contrasena="+contrasena+"&nombreUs="+nombreUs);
          xhttp.send();
         
       }
</script>
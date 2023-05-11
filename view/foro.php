<main>
    <h1>
    <?=$dataToView->getNombre()?>
    </h1>
    <article>
        <input type="textarea" placeholder="añade un comentario..." name="mensaje" id="mensaje">
        <input type="button" value="Enviar" onclick="crearMensaje()">
    </article>
    <?php
    $mensajes=$dataToView->getMensajes();
    listarMensajes($mensajes);
    function listarMensajes($mensajes){
        for($i=0;$i<count($mensajes);$i++){
        ?>
        <article class="articleForo" id="<?=$mensajes[$i]->getId()?>">
            <h2><?=$mensajes[$i]->getCreador()?></h2>
            <p class="textoMensaje">
                <?=$mensajes[$i]->getTexto()?>
            </p>
            <div class="botones">
            <?php
            if(!empty($mensajes[$i]->getMensajes())){
            ?>
                <p value="respuestas" onclick="verRespuestas('<?php echo $mensajes[$i]->getId()?>')">Ver respuestas<i class="fa-solid fa-caret-down" style="color: #ffffff;"></i></p>
            <?php
            }   
                if(isset($_SESSION["user"])){
                    if($mensajes[$i]->getCreador()==$_SESSION["user"] || $_SESSION["user"]=="Administrador"){
            ?>
                <input class="botonCerrar" type="button" onclick="borrar('<?=$mensajes[$i]->getId()?>')" value="borrar">
            <?php
                }
            }
            ?>
                <input type="button" onclick="contestar('<?=$mensajes[$i]->getId()?>')" value="contestar">
            </div>
            <div class="contestaciones oculto">
            <?php
            if(!empty($mensajes[$i]->getMensajes())){
                listarMensajes($mensajes[$i]->getMensajes());
            } ?> 
            </div>
        </article><br>
            <?php
            }
    }
        
    ?>
</main>
<script>
    function borrar(id){
            const xhttp= new XMLHttpRequest();
            xhttp.onload = function(){
               resultado=this.responseText;
                console.log(resultado);
               if(resultado=="error"){
                    console.log("error") ;
                   
               }else if(resultado=="correcto"){
                    location.reload();
                
                }
           }
           xhttp.open("GET","./view/ajax/borrarMensaje.php?mensaje="+id); 
           xhttp.send(); 
    }
    function crearMensaje(id=null){
        if(id==null){
        texto=document.getElementById("mensaje").value;
        foro=<?=$_GET['id']?>;
        console.log(foro);
        const xhttp= new XMLHttpRequest();
            xhttp.onload = function(){
               resultado=this.responseText;
                console.log(resultado);
               if(resultado=="correcto"){
                    location.reload();           
                }
           }
           xhttp.open("GET","./view/ajax/crearMensaje.php?mensaje="+texto+"&foro="+foro); 
           xhttp.send();
        }else{
            texto=document.getElementById("mensaje"+id).value;
            foro=<?=$_GET['id']?>;
            console.log(foro);
            const xhttp= new XMLHttpRequest();
                xhttp.onload = function(){
                resultado=this.responseText;
                console.log(resultado);
                if(resultado=="correcto"){
                    location.reload();           
                }
                }
           xhttp.open("GET","./view/ajax/crearMensaje.php?mensaje="+texto+"&foro="+foro+"&id="+id); 
           xhttp.send();
        }
    }
    function verRespuestas(id){
        articulo=document.getElementById(id);
            div=articulo.children[articulo.children.length-1];
            console.log(articulo);
            console.log(articulo.children);
            console.log(div);
            div.setAttribute("class","contestaciones");
            boton=articulo.children;
            boton=boton[2];
            boton=boton.children;
            boton=boton[0];
            boton.setAttribute("onclick","ocultarRespuestas("+id+")"); 
    }
    function ocultarRespuestas(idarticulo){
        articulo=document.getElementById(idarticulo);
        div=articulo.children[articulo.children.length-1];
        div.setAttribute("class","contestaciones oculto");
        boton=articulo.children;
        boton=boton[2];
        boton=boton.children;
        boton=boton[0];
        boton.setAttribute("onclick","verRespuestas("+idarticulo+")");

         
 
    }
    function contestar(id){
        articulo=document.getElementById(id);
        
        input=document.createElement("input");

        div=document.createElement("div");
        input.setAttribute("type","textarea");
        input.setAttribute("name","mensaje");
        input.setAttribute("id","mensaje"+id);
        input.setAttribute("Placeholder","añade un comentario...");
        boton=document.createElement("input");
        boton.setAttribute("type","button");
        boton.setAttribute("value","enviar");
        boton.setAttribute("onclick","crearMensaje("+id+")");
        
        botonCancelar=document.createElement("input");
        botonCancelar.setAttribute("type","button");
        botonCancelar.setAttribute("value","cancelar");
        botonCancelar.setAttribute("onclick","cancelarMensaje("+id+")");
        articulo.insertBefore(div,articulo.children[articulo.children.length-1]);
        div.appendChild(input);
        div.appendChild(botonCancelar);
        div.appendChild(boton);
    }
    function cancelarMensaje(id){
        articulo=document.getElementById(id);
        div=articulo.children[articulo.children.length-2];
        articulo.removeChild(div);
    }
</script>
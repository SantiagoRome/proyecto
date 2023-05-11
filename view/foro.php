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
    function crearMensaje(){
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
    }
    function verRespuestas(id){
        pasa=document.getElementById(id);
        console.log(id);
        console.log(pasa);
            boton=pasa.children;
            boton=boton[2];
            boton=boton.children;
            boton=boton[0];
            boton.setAttribute("onclick","ocultarRespuestas("+mensaje+","+id+")");
            console.log(boton);
            
        
    }
    function ocultarRespuestas(idarticulo,id){
        console.log(idarticulo);
        elementos=idarticulo.children;
        for(i=0;i<idarticulo.children.length;i++){
            console.log(elementos[i]);
            if(elementos[i].nodeName=="DIV"){
                boton=elementos[i].children
                boton=boton[0];
                console.log("hola");
                boton.setAttribute("onclick","verRespuestas("+id+",'"+idarticulo.getAttribute('id')+"')");
            }
            if(elementos[i].nodeName=="ARTICLE"){
                console.log("borraaaaaa");
                idarticulo.removeChild(elementos[i]);
            }
        }
         
 
    }
    function contestar(){
        
    }
</script>
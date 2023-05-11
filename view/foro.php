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
    if (!empty($mensajes)) {
        for($i=0;$i<count($mensajes);$i++){
        ?>
        <article class="articleForo" id="<?php echo "mensaje".$i?>">
            <h2><?=$mensajes[$i]->getCreador()?></h2>
            <p class="textoMensaje">
                <?=$mensajes[$i]->getTexto()?>
            </p>
            <div class="botones">
            <?php
            if(!empty($mensajes[$i]->getMensajes())){
            ?>
                <p value="respuestas" onclick="verRespuestas(<?php echo $mensajes[$i]->getId()?> ,'<?php echo 'mensaje'.$i ?>')">Ver respuestas<i class="fa-solid fa-caret-down" style="color: #ffffff;"></i></p>
            <?php
            }   
                if(isset($_COOKIE['user'])){
                    if($mensajes[$i]->getCreador()==$_COOKIE['user'] || $_COOKIE['user']=="Administrador"){
            ?>
                <input class="botonCerrar" type="button" onclick="borrar('<?=$mensajes[$i]->getId()?>')" value="borrar">
            <?php
                }
            }
            ?>
                <input type="button" onclick="contestar('<?=$mensajes[$i]->getId()?>')" value="contestar">
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
    function verRespuestas(id, mensaje){
        console.log(id);
        console.log(mensaje);
        const xhttp= new XMLHttpRequest();
            xhttp.onload = function(){
               resultado=this.response;
               console.log(resultado);
               for(i=0;i<resultado.length;i++){
                articulo=document.createElement('article');
                articulo.setAttribute("class","articuloForo");
                articulo.setAttribute("id",mensaje+"c"+i); 
                    h2=document.createElement('h2');
                    h2.innerText=resultado[i]['usuario'];
                    p=document.createElement('p');
                    p.setAttribute("class","pForo");
                    p.innerText=resultado[i]['texto'];
                    div=document.createElement('div');
                    div.setAttribute("class","botones");

            /*if(!empty($mensajes[$i]->getMensajes()))
                <p onclick="verRespuestas(<?php //echo $mensajes[$i]->getId()?> ,'')">Ver respuestas<i class="fa-solid fa-caret-down" style="color: #ffffff;"></i></p>
            }*/
            borrar=false;
            <?php if(isset($_COOKIE['user'])){ ?>
                if(resultado[i]['usuario']=="<?=$_COOKIE['user']?>" || "<?=$_COOKIE['user']?>"=="Administrador"){

                inputborrar=document.createElement('input');
                inputborrar.setAttribute("onclick","borrar("+resultado[i]['id']+")");
                inputborrar.value="borrar";
                inputborrar.setAttribute("type","button");
                borrar=true;
            }
            <?php
            }
            ?>
            inputcontestar=document.createElement('input');
            inputcontestar.setAttribute("onclick","contestar("+resultado[i]['id']+")");
            inputcontestar.value="contestar";
            inputcontestar.setAttribute("type","button");
            pregunta=document.getElementById(mensaje);
            pregunta.appendChild(articulo);
            articulo.appendChild(h2);
            articulo.appendChild(p);
            articulo.appendChild(div);
            if(borrar==true){
                div.appendChild(inputborrar);
            }
            div.appendChild(inputcontestar);
           }
            boton=pregunta.children;
            boton=boton[2];
            boton=boton.children;
            boton=boton[0];
            boton.setAttribute("onclick","ocultarRespuestas("+mensaje+","+id+")");
            console.log(boton);
            
        }
           xhttp.open("GET","./view/ajax/cargarRespuestas.php?mensaje="+id); 
           xhttp.responseType='json';
           xhttp.send();
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
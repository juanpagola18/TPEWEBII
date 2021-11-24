"use strict";

document.addEventListener("DOMContentLoaded", function(){
    const url= "api/comments";

    let listaComentarios = document.querySelector('#comments-list');
    let btnAgregarComment = document.querySelector('#cargarComment');

    
    
    async function mostrar(){
        
            
            let comentario = document.querySelector("#input_id_comment");
            listaComentarios.innerHTML = "";
            
            
            let id_user = document.querySelector("#id_admin").value;
            if (id_user != 2){
                btnAgregarComment.addEventListener("click", cargarComentario); 
            }
         
            try {
                
                let response = await fetch(`${url}/${comentario.value}`, {
                    method: "GET",
                });
                
                if (response.status===200){

                    let comments = await response.json();
                    
                    for (const comment of comments ){
                    
                   
                   let comentario = `<td class="">${comment.comment}</td>`;
                   let puntuacion = `<td> ${comment.punctuation}</td>`;
                   let usuario = `<td> ${comment.nick}</td>`;
                   let fecha = `<td> ${comment.date}</td>`;
                   let btnBorrar = `<td class="creado"><button class="btnBorrar btn btn-danger" data-id=${comment.id_comment}>Borrar</button></td>`;
            if (id_user == 1){
                  
             listaComentarios.innerHTML += `<tr class="item">${ comentario + puntuacion + usuario + fecha + btnBorrar}</tr>`;
             btnAgregarComment.addEventListener("click", cargarComentario);

            }
            else if (id_user ==  2) {
                listaComentarios.innerHTML += `<tr class="item">${ comentario + puntuacion + usuario + fecha}</tr>`;
                

            }
            else {
                listaComentarios.innerHTML += `<tr class="item">${ comentario + puntuacion + usuario + fecha}</tr>`;
                btnAgregarComment.addEventListener("click", cargarComentario);

            }
                }
                obtener_id_botones();
            }
                else
                listaComentarios.innerHTML = "<p>No hay comentarios actualmente<p>"
            } catch (error) {
                listaComentarios.innerHTML = error;
            };
            
        }
        
        
        function obtener_id_botones() {
            let botones_eliminar = document.querySelectorAll(".btnBorrar");
            
            for (let i = 0; i < botones_eliminar.length; i++) {
                botones_eliminar[i].addEventListener("click", function (e) {
                    let comentario_a_eliminar = this;
                    let id_comentario = comentario_a_eliminar.dataset.id;
                    borrar_datos(id_comentario);
                });
            }
        }   

        function borrar_datos(id_comentario) {

            let id = id_comentario;
            
            fetch(url + "/" + id, {
                method: "DELETE",
                
               
            })
                .then(function (r) {
                    if (!r.ok) {
                        console.log("Error");
                    }
                    return r.json;
                })
                .then(function () {
                    console.log("El comentario fue borrado exitosamente");
                    mostrar();
                })
                .catch(function (e) {
                    console.log("Error");
                });
        }
        
        async function cargarComentario() {

            let id_user = document.querySelector("#id_session").value;
            
            
            if (id_user > 0) {
    
                let comment = document.querySelector("#comentario").value;
                let punctuation = document.querySelector("#valuacion").value;
                let id_user = document.querySelector("#id_session").value;
                let id_player = document.querySelector("#input_id_comment").value;
    
    
                let comentarioNuevo = {
                    comment: comment,
                    punctuation: punctuation,
                    id_user: id_user,
                    id_player: id_player
                };
    
                console.log(comentarioNuevo);

                if ((comment.length === 0)||(punctuation=="Como puntuaria al jugador?")) {
                    alert("Complete todos los datos");
                    return;
                }
    
    
                try {
                    let res = await fetch(url, {
                        "method": "POST",
                        "headers": { "Content-type": "application/json" },
                        "body": JSON.stringify(comentarioNuevo)
                    });
                    let json = await res.json();
            
                    console.log(json);
                } catch (error) {
                    console.log(error);
                }
              
                mostrar();
                }
            

            else {
                alert("Inicia sesion para poder comentar");
            }
        }

    mostrar();
    });


    



   
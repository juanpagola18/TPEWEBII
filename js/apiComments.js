function getProductID() {
    let urlParts = window.location.href.split('/');
    return parseInt(urlParts[urlParts.length - 1]);
}


function getComments() {
    //Inicio de mi lista de comentarios
    listComments.error = false;
    listComments.loading = true;
    listComments.notComment=false;
    listComments.productComments = [];
    //Obtengo de que Producto se cargan los comentarios
    let productID = getProductID();
    fetch('api/comments/'+productID)
    .then( response =>{ 
        if (response.status == 200)
        {
            return response.json();
            
        }else{
            return null;
        }
    })
    .then (productComments => {
        if (productComments == null)
        {
            // Hubo un error
            listComments.error = true;
        }
        else{
            if (productComments == "No existen comentarios") {
            listaComentarios.notComment=true;
            }
            else {
                // Obtengo todos los comentarios de un producto y lo guardo en la lista de comentarios
                listComments.productComments = productComments;
            }
        }
        // Termina la carga de informacion
        listComments.loading = false;
        
    })
    .catch(exception => console.log(exception));
}

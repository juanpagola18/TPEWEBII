{include file="templates/header.tpl"}
<div class="container">
    <button><a class="btn btn-primary" href='players'>Volver</a></button>
    <div>
        <ul class="list-group">
            <li class="list-group-item">Nombre: {$player->nombre}</li>
            <li class="list-group-item">Partidos Jugados: {$player->partidosJugados}</li>
            <li class="list-group-item">Goles: {$player->goles}</li>
            <li class="list-group-item">Equipo: {$player->nombreEquipo}</li>
            <input id="input_id_comment" type="hidden" value="{$player->id}">
            
        </ul>
    </div>
   
      <section id = seccionComentario}>
      <table class="table">
      <thead>
                <th  scope="row">Comentario</th>
                <th  scope="row">Puntaje</th>
                <th scope="row">Usuario</th>
            </thead>

            <tbody id="comments-list">
                    
            </tbody>
      </table>
      
    {if ($smarty.session)}
     <div clas="enviarComentario">
        <h1>Agregue su comentario</h1>
            <select id="valuacion" aria-label="Default select example">
                <option selected>Como puntuaria al jugador?</option>
                <option value="1">1 - Mediocre</option>
                <option value="2">2 - Jugador malo</option>
                <option value="3">3 - Jugador promedio</option>
                <option value="4">4 - Buen jugador</option>
                <option value="5">5 - Jugador destacado</option>
            </select>
        <div class="mb-3">
            <label for="comentario" class="form-label">Su comentario</label>
            <input type="email" class="form-control" id="comentario" placeholder="Escriba su comentario">
        </div>
        <button class="btn btn-dark" id="cargarComment">Enviar Comentario </a>
    <div>    
     

    {/if}
     </section>
</div>
<script type="text/javascript" src="js/apiComments.js"></script> 
{include file="templates/footer.tpl"}
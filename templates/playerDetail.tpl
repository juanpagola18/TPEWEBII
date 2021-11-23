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
    {if ($smarty.session)}
      <section id = seccionComentario}>
      <table >
      <thead>
                <th>Comentario</th>
                <th>Puntaje</th>
                <th>Usuario</th>
            </thead>

            <tbody id="comments-list">
                    
            </tbody>
      </table>
      
      </section>
    {/if}
</div>
<script type="text/javascript" src="js/apiComments.js"></script> 
{include file="templates/footer.tpl"}
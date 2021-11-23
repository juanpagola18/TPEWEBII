{include file="templates/header.tpl"}
<div class="container">
    <button><a class="btn btn-primary" href='players'>Volver</a></button>
    <div>
        <ul class="list-group">
            <li class="list-group-item">Nombre: {$player->nombre}</li>
            <li class="list-group-item">Partidos Jugados: {$player->partidosJugados}</li>
            <li class="list-group-item">Goles: {$player->goles}</li>
            <li class="list-group-item">Equipo: {$player->nombreEquipo}</li>
        </ul>
    </div>
</div>
{include file="templates/footer.tpl"}
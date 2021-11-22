{include file="templates/header.tpl"}
<div class="">
    <button><a href='players'>Volver</a></button>
    <div class="">
        <ul>
            <li>Nombre: {$player->nombre}</li>
            <li>Partidos Jugados: {$player->partidosJugados}</li>
            <li>Goles: {$player->goles}</li>
            <li>Equipo: {$player->nombreEquipo}</li>
        </ul>
    </div>
</div>
{include file="templates/footer.tpl"}
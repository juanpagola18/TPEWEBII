<h1 class="">Jugadores</h1>
<div class="">

    <form action="selectEquipos" method=POST>
    
        <select name= "equipo">
            {foreach from=$teams item=team}
                <option value='{$team->id_equipo}'>{$team->nombreEquipo}</option>
            {/foreach}
        </select>
        <button type="submit"> Ver categoria seleccionada</button>
        <button><a href='players'>Ver todos </a></button>
    </form>
</div>
    

<table class="">
    <thead>
        <th>Nombre</th>
        <th>Partidos Jugados</th>
        <th>Goles</th>
        <th>Nombre Equipo</th>
        <th>Detalle</th>

    </thead>
    <tbody>
        {foreach from=$players item=player}    
            <tr>
            <td>{$player->nombre}</td>
            <td>{$player->partidosJugados}</td>
            <td>{$player->goles}</td>
            <td>{$player->nombreEquipo}</td>
            <td><a href="showPlayer/{$player->id}">Ver mas</a></td>
        </tr> 
        {/foreach}
        
    </tbody>
</table>
<h1 class="">Jugadores</h1>
<div class="">
{* Cargar el select de equipos 
    <form action="" method=POST>
    
        <select name= "input_team">
            {foreach from=$teams item=team}
                <option value='{$team->team_id}'>{$team->name}</option>
            {/foreach}
        </select>
        <button type="submit"> Ver categoria seleccionada</button>
        <button><a href='fighters'>Ver todos </a></button>
    </form>
</div>
    *}

<table class="">
    <thead>
        <th>Nombre</th>
        <th>Partidos Jugados</th>
        <th>Goles</th>
        <th>Detalle</th>

    </thead>
    <tbody>
        {foreach from=$players item=player}    
            <tr>
            <td>{$player->nombre}</td>
            <td>{$player->partidosJugados}</td>
            <td>{$player->goles}</td>
            <td><a href="showPlayer/{$player->id}">Ver mas</a></td>
        </tr> 
        {/foreach}
        
    </tbody>
</table>
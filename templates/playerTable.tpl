<h1 class="text-center">Jugadores</h1>
<div class=>

    <form class="mb-3" action="selectEquipos" method=POST>
    
        <select class="form-control" name= "equipo">
            {foreach from=$teams item=team}
                <option value='{$team->id_equipo}'>{$team->nombreEquipo}</option>
            {/foreach}
        </select>
        <button class="btn btn-primary" type="submit"> Ver categoria seleccionada</button>
        <button class="btn btn-light" ><a class="btn btn-dark" href='players'>Ver todos </a></button>
    </form>
</div>  
    

<table class="table">
    <thead>
        <th scope="row">Nombre</th>
        <th scope="row">Partidos Jugados</th>
        <th scope="row">Goles</th>
        <th scope="row">Nombre Equipo</th>
        <th scope="row">Detalle</th>

    </thead>
    <tbody>
        {foreach from=$players item=player}    
            <tr>
            <td>{$player->nombre}</td>
            <td>{$player->partidosJugados}</td>
            <td>{$player->goles}</td>
            <td>{$player->nombreEquipo}</td>
            <td><a class="btn btn-warning" href="showPlayer/{$player->id}">Ver mas</a></td>
        </tr> 
        {/foreach}
        
    </tbody>
</table>
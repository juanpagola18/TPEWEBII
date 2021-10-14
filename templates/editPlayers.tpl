<h1 class="text-center">Editar Jugadores</h1>
    

<table class="table">
    <thead>
        <th scope="row">Nombre</th>
        <th scope="row">Partidos Jugados</th>
        <th scope="row">Goles</th>
        <th scope="row">Nombre Equipo</th>
        <th scope="row">Borrar</th>
        <th scope="row">Editar</th>

    </thead>
    <tbody>
        {foreach from=$players item=player}    
            <tr>
            <td>{$player->nombre}</td>
            <td>{$player->partidosJugados}</td>
            <td>{$player->goles}</td>
            <td>{$player->nombreEquipo}</td>
            <td><a class="btn btn-danger" href="deletePlayer/{$player->id}">Borrar</a></td>
            <td><a class="btn btn-primary" href="editPlayerMenu/{$player->id}">Editar</a></td>
        </tr> 
        {/foreach}
        
    </tbody>

</table>

    <div class=>
        <form action="addPlayer" method=POST>
            <h2>Agregar Jugador</h2>
            <div class="container-fluid">
                <label>Nombre y Apellido</label>
                <input name="name" type="text" placeholder="Nombre y Apellido..." required>
                <label>Partidos Jugados</label>
                <input name="playedGames" type="text" placeholder="Partidos..." required>
                <label>Goles</label>
                <input name="score" type="number" placeholder="Goles..." required>
                <select name= "team">
                {foreach from=$teams item=team}
                    <option value='{$team->id_equipo}'>{$team->nombreEquipo}</option>
                {/foreach}
                </select>
            <button class="btn btn-secondary">CARGAR</button>  
            </div>      
        </form>   
    </div>


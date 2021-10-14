<h1 class="">Editar Jugadores</h1>
    

<table class="">
    <thead>
        <th>Nombre</th>
        <th>Partidos Jugados</th>
        <th>Goles</th>
        <th>Nombre Equipo</th>
        <th>Borrar</th>
        <th>Editar</th>

    </thead>
    <tbody>
        {foreach from=$players item=player}    
            <tr>
            <td>{$player->nombre}</td>
            <td>{$player->partidosJugados}</td>
            <td>{$player->goles}</td>
            <td>{$player->nombreEquipo}</td>
            <td><a href="delete/{$player->id}">Borrar</a></td>
            <td><a href="edit/{$player->id}">Editar</a></td>
        </tr> 
        {/foreach}
        
    </tbody>

</table>

    <div class="">
        <form action="addPlayer" method=POST>
            <h2>Agregar Peleadores</h2>
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
            

            <button>CARGAR</button>        
        </form>   
    </div>


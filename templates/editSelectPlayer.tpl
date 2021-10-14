<h1 class="">Editar Jugadores</h1>
    

<table class="">
    <thead>
        <th>Nombre</th>
        <th>Partidos Jugados</th>
        <th>Goles</th>
        <th>Nombre Equipo</th>


    </thead>
    <tbody>   
            <tr>
            <td>{$player->nombre}</td>
            <td>{$player->partidosJugados}</td>
            <td>{$player->goles}</td>
            <td>{$player->nombreEquipo}</td>
            
        </tr> 
        
    </tbody>
</table>
        <div class="">
            <form action="editPlayer/{$player->id}", method=POST>
                <h2>Editar Jugador</h2>
                <label>Nombre y Apellido</label>
                <input name="newName" type="text" placeholder="Nombre y Apellido..." required>
                <label>Partidos Jugados</label>
                <input name="newPlayedGames" type="text" placeholder="Partidos..." required>
                <label>Goles</label>
                <input name="newScore" type="number" placeholder="Goles..." required>
                <select name= "newTeam">
                {foreach from=$teams item=team}
                    <option value='{$team->id_equipo}'>{$team->nombreEquipo}</option>
                {/foreach}
                </select>
                

                <button>EDITAR</button>        
            </form>   
        </div>
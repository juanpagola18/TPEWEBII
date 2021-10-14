<h1 class="">Equipos</h1>

<table class="">
    <thead>
        <th>Equipo</th>
        <th>Pais</th>
        <th>Campeonatos Ganados</th>
        

    </thead>
    <tbody>
            <tr>
            <td>{$team->nombreEquipo}</td>
            <td>{$team->pais}</td>
            <td>{$team->campeonatos}</td>
  
    </tbody>
</table>
<div class="">
        <form action="editTeam/{$team->id_equipo}" method=POST>
            <h2>Agregar Equipo</h2>
            <label>Nombre del Equipo</label>
            <input name="newTeamName" type="text" placeholder="Nombre equipo..." required>
            <label>Pais</label>
            <input name="newCountry" type="text" placeholder="Pais..." required>
            <label>Campeonatos Ganados</label>
            <input name="newChampionships" type="number" placeholder="Campeonatos..." required>

            <button>CARGAR EQUIPO</button>        
        </form>   
    </div>
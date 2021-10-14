<h1 class="text-center">Equipos</h1>

<table class="table">
    <thead>
        <th scope="row">Equipo</th>
        <th scope="row">Pais</th>
        <th scope="row">Campeonatos Ganados</th>
        

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
            <h2>Editar Equipo</h2>
            <label>Nombre del Equipo</label>
            <input name="newTeamName" type="text" placeholder="Nombre equipo..." required>
            <label>Pais</label>
            <input name="newCountry" type="text" placeholder="Pais..." required>
            <label>Campeonatos Ganados</label>
            <input name="newChampionships" type="number" placeholder="Campeonatos..." required>

            <button class="btn btn-secondary">MODIFICAR EQUIPO</button>        
        </form>   
    </div>
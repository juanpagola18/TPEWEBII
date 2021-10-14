<h1 class="card text-center">Equipos</h1>

<table class="table">
    <thead>
        <th scope="col">Equipo</th>
        <th scope="col">Pais</th>
        <th scope="col">Campeonatos Ganados</th>
        

    </thead>
    <tbody>
        {foreach from=$teams item=team}    
            <tr>
            <td>{$team->nombreEquipo}</td>
            <td>{$team->pais}</td>
            <td>{$team->campeonatos}</td>
            
        </tr> 
        {/foreach}
        
    </tbody>
</table>
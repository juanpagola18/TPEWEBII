<h1 class="">Equipos</h1>

<table class="">
    <thead>
        <th>Equipo</th>
        <th>Pais</th>
        <th>Campeonatos Ganados</th>
        

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
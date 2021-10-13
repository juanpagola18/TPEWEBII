<h1 class="">Equipos</h1>
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
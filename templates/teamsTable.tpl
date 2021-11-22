{include file="templates/header.tpl"}
<h1 class="card text-center">Equipos</h1>

<table class="table">
    <thead>
        <th scope="col">Equipo</th>
        <th scope="col">Pais</th>
        <th scope="col">Campeonatos Ganados</th>
        {if ($smarty.session)}
        <th scope="row">Borrar</th>
        <th scope="row">Editar</th>
        {/if}

    </thead>
    <tbody>
        {foreach from=$teams item=team}    
            <tr>
            <td>{$team->nombreEquipo}</td>
            <td>{$team->pais}</td>
            <td>{$team->campeonatos}</td>
            {if ($smarty.session)}
            <td><a class="btn btn-danger" href="deleteTeam/{$team->id_equipo}">Borrar</a></td>
            <td><a class="btn btn-primary" href="editTeamMenu/{$team->id_equipo}">Editar</a></td>
            {/if}
        </tr> 
        {/foreach}
        
    </tbody>

</table>
{if ($smarty.session)}
        <div class="t">
        <form action="addTeam" method=POST>
            <h2>Agregar Equipo</h2>
            <label>Nombre del Equipo</label>
            <input name="teamName" type="text" placeholder="Nombre equipo..." required>
            <label>Pais</label>
            <input name="country" type="text" placeholder="Pais..." required>
            <label>Campeonatos Ganados</label>
            <input name="championships" type="number" placeholder="Campeonatos..." required>

            <button>CARGAR EQUIPO</button>        
        </form>   
    </div>
{/if}
{include file="templates/footer.tpl"}

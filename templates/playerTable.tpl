{include file="templates/header.tpl"}
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
        {if ($smarty.session)}
        <th scope="row">Borrar</th>
        <th scope="row">Editar</th>
        {/if}
       

    </thead>
    <tbody>
        {foreach from=$players item=player}    
            <tr>
            <td>{$player->nombre}</td>
            <td>{$player->partidosJugados}</td>
            <td>{$player->goles}</td>
            <td>{$player->nombreEquipo}</td>
            <td><a class="btn btn-warning" href="showPlayer/{$player->id}">Ver mas</a></td>
            {if ($smarty.session)}
            <td><a class="btn btn-danger" href="deletePlayer/{$player->id}">Borrar</a></td>
            <td><a class="btn btn-primary" href="editPlayerMenu/{$player->id}">Editar</a></td>
            {/if}
        </tr> 
        {/foreach}
        
    </tbody>
</table>
  {if ($smarty.session)}
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
    
    
    {/if}
{include file="templates/footer.tpl"}
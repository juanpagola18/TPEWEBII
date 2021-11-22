{include 'templates/header.tpl'}
<h1 class="card text-center">Lista de Usuarios</h1>

    <table class="table">
            
        <thead>
            <tr>
                <th scope="col">USUARIOS</th>
                <th scope="col">ROL</th>
                <th scope="col">ACCIONES</th>
                <th scope="col">BORRAR</th>
                    </tr>
                </thead>
                    <tbody id="body-tbl-users">
                    
                    {foreach from=$listaUsuarios item=user}
                    <tr>
                        <td>{$user->usuario}</td>
                        {if $user->rol == 1}
                        <td>{"Admin"}</td>
                        {else}
                        <td>{"Usuario"}</td>
                        {/if}
                        {if {$user->rol}==1}
                        <td><button onclick="location.href='bajaAdmin/{$user->id_user}'">Quitar Admin</button></td>
                        {else}
                        <td><button onclick="location.href='altaAdmin/{$user->id_user}'">Hacer Admin</button></td>
                        {/if}
                        <td><button onclick="location.href='removeUser/{$user->id_user}'">ELIMINAR</button></td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>
{include 'templates/footer.tpl'}
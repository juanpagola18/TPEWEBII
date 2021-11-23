<?php
/* Smarty version 3.1.39, created on 2021-11-23 11:58:23
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\TPEWEBII\templates\editSelectPlayer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619cc94fa09832_08011286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19ba831b35e2692161d259fb8668c30afa03978c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\TPEWEBII\\templates\\editSelectPlayer.tpl',
      1 => 1637664248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619cc94fa09832_08011286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="text-center">Editar Jugadores</h1>
    

<table class="table">
    <thead>
        <th scope="row">Nombre</th>
        <th scope="row">Partidos Jugados</th>
        <th scope="row">Goles</th>
        <th scope="row">Nombre Equipo</th>


    </thead>
    <tbody>   
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['player']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['player']->value->partidosJugados;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['player']->value->goles;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['player']->value->nombreEquipo;?>
</td>
            
        </tr> 
        
    </tbody>
</table>
        <div class="">
            <form action="editPlayer/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
", method=POST>
                <h2>Editar Jugador</h2>
                <label>Nombre y Apellido</label>
                <input name="newName" type="text" placeholder="Nombre y Apellido..." required>
                <label>Partidos Jugados</label>
                <input name="newPlayedGames" type="text" placeholder="Partidos..." required>
                <label>Goles</label>
                <input name="newScore" type="number" placeholder="Goles..." required>
                <select name= "newTeam">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
                    <option value='<?php echo $_smarty_tpl->tpl_vars['team']->value->id_equipo;?>
'><?php echo $_smarty_tpl->tpl_vars['team']->value->nombreEquipo;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                

                <button class="btn btn-secondary">EDITAR JUGADOR</button>        
            </form>   
        </div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.39, created on 2021-10-14 19:20:03
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\templates\editPlayers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616866c37c2cb9_76695864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ea6b4a6e654bc71478889ab3b4c3fb6e5a60d4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\templates\\editPlayers.tpl',
      1 => 1634231806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616866c37c2cb9_76695864 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="">Editar Jugadores</h1>
    

<table class="">
    <thead>
        <th>Nombre</th>
        <th>Partidos Jugados</th>
        <th>Goles</th>
        <th>Nombre Equipo</th>
        <th>Borrar</th>
        <th>Editar</th>

    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>    
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['player']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['player']->value->partidosJugados;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['player']->value->goles;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['player']->value->nombreEquipo;?>
</td>
            <td><a href="deletePlayer/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">Borrar</a></td>
            <td><a href="editPlayerMenu/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">Editar</a></td>
        </tr> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </tbody>

</table>

    <div class="">
        <form action="addPlayer" method=POST>
            <h2>Agregar Jugador</h2>
            <label>Nombre y Apellido</label>
            <input name="name" type="text" placeholder="Nombre y Apellido..." required>
            <label>Partidos Jugados</label>
            <input name="playedGames" type="text" placeholder="Partidos..." required>
            <label>Goles</label>
            <input name="score" type="number" placeholder="Goles..." required>
            <select name= "team">
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
            

            <button>CARGAR</button>        
        </form>   
    </div>

<?php }
}

<?php
/* Smarty version 3.1.39, created on 2021-10-14 16:15:39
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\templates\editSelectPlayer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61683b8b7dc566_63739977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c710b941ba7f9d82279f9c6687e2498717899c95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\templates\\editSelectPlayer.tpl',
      1 => 1634220872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61683b8b7dc566_63739977 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="">Editar Jugadores</h1>
    

<table class="">
    <thead>
        <th>Nombre</th>
        <th>Partidos Jugados</th>
        <th>Goles</th>
        <th>Nombre Equipo</th>


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
                

                <button>EDITAR</button>        
            </form>   
        </div><?php }
}

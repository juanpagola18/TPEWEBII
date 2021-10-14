<?php
/* Smarty version 3.1.39, created on 2021-10-14 20:25:56
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\templates\editTeams.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616876341c0ec8_64461818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ceba6903fbb8faaa8bb96d9773fc2fddcf773b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\templates\\editTeams.tpl',
      1 => 1634235944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616876341c0ec8_64461818 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="">Equipos</h1>

<table class="">
    <thead>
        <th>Equipo</th>
        <th>Pais</th>
        <th>Campeonatos Ganados</th>
        

    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>    
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['team']->value->nombreEquipo;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['team']->value->pais;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['team']->value->campeonatos;?>
</td>
            <td><a href="deleteTeam/<?php echo $_smarty_tpl->tpl_vars['team']->value->id_equipo;?>
">Borrar</a></td>
            <td><a href="editTeamMenu/<?php echo $_smarty_tpl->tpl_vars['team']->value->id_equipo;?>
">Editar</a></td>
            
        </tr> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </tbody>
</table>
<div class="">
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
    </div><?php }
}

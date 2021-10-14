<?php
/* Smarty version 3.1.39, created on 2021-10-15 00:38:34
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\templates\teamsTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168b16a5e9302_67325960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4808a2c789f4d6032ceaafc8beb2974c67695a0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\templates\\teamsTable.tpl',
      1 => 1634251113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168b16a5e9302_67325960 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="card text-center">Equipos</h1>

<table class="table">
    <thead>
        <th scope="col">Equipo</th>
        <th scope="col">Pais</th>
        <th scope="col">Campeonatos Ganados</th>
        

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
            
        </tr> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </tbody>
</table><?php }
}

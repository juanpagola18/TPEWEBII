<?php
/* Smarty version 3.1.39, created on 2021-10-13 02:36:26
  from 'C:\xampp\htdocs\proyectos\PagolaWebII\templates\teamsTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61662a0aae2823_10521665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4d985679216f11dabdf990c2bb6a525c0dea697' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PagolaWebII\\templates\\teamsTable.tpl',
      1 => 1634084336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61662a0aae2823_10521665 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="">Equipos</h1>
<div class="">

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
            
        </tr> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </tbody>
</table><?php }
}

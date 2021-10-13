<?php
/* Smarty version 3.1.39, created on 2021-10-13 16:00:54
  from 'C:\xampp\htdocs\proyectos\PagolaWebII\templates\playerTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6166e696d76504_87822915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b921f7a8fd6218b5bf96a8c6c356f4ab4da1f844' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PagolaWebII\\templates\\playerTable.tpl',
      1 => 1634133653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6166e696d76504_87822915 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="">Jugadores</h1>
<div class="">

<table class="">
    <thead>
        <th>Nombre</th>
        <th>Partidos Jugados</th>
        <th>Goles</th>
        <th>Detalle</th>

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
            <td><a href="showPlayer/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">Ver mas</a></td>
        </tr> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </tbody>
</table><?php }
}

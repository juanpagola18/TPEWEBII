<?php
/* Smarty version 3.1.39, created on 2021-10-13 22:37:05
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\templates\playerDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61674371b4fa45_11171661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecdcfccc997e5b880ad3d411cd8ad4cbd31adb9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\templates\\playerDetail.tpl',
      1 => 1634157402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61674371b4fa45_11171661 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="">
    <button><a href='players'>Volver</a></button>
    <div class="">
        <ul>
            <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['player']->value->nombre;?>
</li>
            <li>Partidos Jugados: <?php echo $_smarty_tpl->tpl_vars['player']->value->partidosJugados;?>
</li>
            <li>Goles: <?php echo $_smarty_tpl->tpl_vars['player']->value->goles;?>
</li>
            <li>Equipo: <?php echo $_smarty_tpl->tpl_vars['player']->value->nombreEquipo;?>
</li>
        </ul>
    </div>
</div>
<?php }
}

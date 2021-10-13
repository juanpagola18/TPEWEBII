<?php
/* Smarty version 3.1.39, created on 2021-10-13 19:37:13
  from 'C:\xampp\htdocs\proyectos\PagolaWebII\templates\playerDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616719496d0625_19413605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38ffd3d0998fedeeccfc2d0a4577ba8590435b02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PagolaWebII\\templates\\playerDetail.tpl',
      1 => 1634146631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616719496d0625_19413605 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li>Equipo: <?php echo $_smarty_tpl->tpl_vars['player']->value->id_equipo;?>
</li>
        </ul>
    </div>
</div>
<?php }
}

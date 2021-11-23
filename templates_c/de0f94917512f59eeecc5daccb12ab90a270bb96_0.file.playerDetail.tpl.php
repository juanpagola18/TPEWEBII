<?php
/* Smarty version 3.1.39, created on 2021-11-23 16:42:01
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\TPEWEBII\templates\playerDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d0bc906ac45_36703073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de0f94917512f59eeecc5daccb12ab90a270bb96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\TPEWEBII\\templates\\playerDetail.tpl',
      1 => 1637682116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/vue/comments.vue' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619d0bc906ac45_36703073 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <button><a class="btn btn-primary" href='players'>Volver</a></button>
    <div>
        <ul class="list-group">
            <li class="list-group-item">Nombre: <?php echo $_smarty_tpl->tpl_vars['player']->value->nombre;?>
</li>
            <li class="list-group-item">Partidos Jugados: <?php echo $_smarty_tpl->tpl_vars['player']->value->partidosJugados;?>
</li>
            <li class="list-group-item">Goles: <?php echo $_smarty_tpl->tpl_vars['player']->value->goles;?>
</li>
            <li class="list-group-item">Equipo: <?php echo $_smarty_tpl->tpl_vars['player']->value->nombreEquipo;?>
</li>
        </ul>
    </div>
    <?php if (($_SESSION)) {?>
      <section id = seccionComentario}>
            <?php $_smarty_tpl->_subTemplateRender('file:templates/vue/comments.vue', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

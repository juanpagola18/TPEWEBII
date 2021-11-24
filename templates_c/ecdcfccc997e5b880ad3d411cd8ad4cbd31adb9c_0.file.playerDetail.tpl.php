<?php
/* Smarty version 3.1.39, created on 2021-11-24 10:08:14
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\templates\playerDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e00fe7958e7_86606137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecdcfccc997e5b880ad3d411cd8ad4cbd31adb9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\templates\\playerDetail.tpl',
      1 => 1637744887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619e00fe7958e7_86606137 (Smarty_Internal_Template $_smarty_tpl) {
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
            <input id="input_id_comment" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">
            
        </ul>
    </div>
    <?php if (($_SESSION)) {?>
      <section id = seccionComentario}>
      <table >
      <thead>
                <th>Comentario</th>
                <th>Puntaje</th>
                <th>Usuario</th>
            </thead>

            <tbody id="comments-list">
                    
            </tbody>
      </table>
      
      </section>
    <?php }?>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="js/apiComments.js"><?php echo '</script'; ?>
> 
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

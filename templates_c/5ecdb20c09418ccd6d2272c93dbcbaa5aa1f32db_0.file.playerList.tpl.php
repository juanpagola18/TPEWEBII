<?php
/* Smarty version 3.1.39, created on 2021-10-05 23:50:33
  from 'C:\xampp\htdocs\proyectos\PagolaWebII\templates\playerList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615cc8a92c2cb3_46300560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ecdb20c09418ccd6d2272c93dbcbaa5aa1f32db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PagolaWebII\\templates\\playerList.tpl',
      1 => 1633470629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615cc8a92c2cb3_46300560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\proyectos\\PagolaWebII\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <div class="row mt-4">

        
        <div class="col-md-4">
        <a class="btn btn-warning" href="logout">Logout </a>
            <h2>Crear Tarea</h2>
            <form class="form-alta" action="createTask" method="post">
                <input placeholder="titulo" type="text" name="title" id="title" required>
                <textarea placeholder="descripcion" type="text" name="description" id="description"> </textarea>
                <input placeholder="prioridad" type="number" name="priority" id="priority">
                <input type="checkbox" name="done" id="done">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
        </div>
        <div class="col-md-8">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

            <ul class="list-group">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
                    <li class="
                        list-group-item
                        <?php if ($_smarty_tpl->tpl_vars['task']->value->finalizada) {?> finalizada <?php }?>
                        ">
                            <a href="viewTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_tarea;?>
"><?php echo $_smarty_tpl->tpl_vars['task']->value->titulo;?>
</a> | <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['task']->value->descripcion,30);?>

                            <a class="btn btn-danger" href="deleteTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_tarea;?>
">Borrar</a>
                            <?php if (!$_smarty_tpl->tpl_vars['task']->value->finalizada) {?>
                                <a class="btn btn-success" href="updateTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_tarea;?>
">Done</a>
                            <?php } else { ?>
                                <!-- <a class="btn btn-success" href="updateTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_tarea;?>
">Restore</a> -->
                            <?php }?>
                            
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

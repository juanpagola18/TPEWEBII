<?php
/* Smarty version 3.1.39, created on 2021-11-23 11:54:51
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\TPEWEBII\templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619cc87b04bd04_34361786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0472f4517afb1c5ab0270ae4a16107be27b242aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\TPEWEBII\\templates\\usuarios.tpl',
      1 => 1637664248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619cc87b04bd04_34361786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="card text-center">Lista de Usuarios</h1>

    <table class="table">
            
        <thead>
            <tr>
                <th scope="col">USUARIOS</th>
                <th scope="col">ROL</th>
                <th scope="col">ACCIONES</th>
                <th scope="col">BORRAR</th>
                    </tr>
                </thead>
                    <tbody id="body-tbl-users">
                    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaUsuarios']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->usuario;?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->rol == 1) {?>
                        <td><?php echo "Admin";?>
</td>
                        <?php } else { ?>
                        <td><?php echo "Usuario";?>
</td>
                        <?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->rol;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
                        <td><button onclick="location.href='bajaAdmin/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
'">Quitar Admin</button></td>
                        <?php } else { ?>
                        <td><button onclick="location.href='altaAdmin/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
'">Hacer Admin</button></td>
                        <?php }?>
                        <td><button onclick="location.href='removeUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
'">ELIMINAR</button></td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

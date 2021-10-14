<?php
/* Smarty version 3.1.39, created on 2021-10-14 00:19:27
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61675b6f4486e7_07396138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cfd45b2e6a1837d0b97a00c677fff7fce1a9c8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\templates\\login.tpl',
      1 => 1634163528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61675b6f4486e7_07396138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <div class="row mt-4">
        <div class="col-md-4">
            <h2>Log In</h2>
            <form class="form-alta" action="verify" method="post">
                <input placeholder="email" type="text" name="email" id="email" required>
                <input placeholder="password" type="password" name="password" id="password" required>
                <input type="submit" class="btn btn-primary" value="Login">
            </form>
        </div>
        <p>No tenes usuario?<button><a href='register'>Registrate</a></button></p>
        <button><a href='logout'>Desloguearse</a></button>
    </div>
    <h4 class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
    
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

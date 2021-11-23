<?php
/* Smarty version 3.1.39, created on 2021-11-23 11:53:50
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\TPEWEBII\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619cc83e0a4842_09817828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6f35cf1217b98882d1394ca0a927cb071ce8386' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\TPEWEBII\\templates\\login.tpl',
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
function content_619cc83e0a4842_09817828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
<div class="container">
    <?php if (empty($_SESSION['usuario'])) {?>
    <div class="row">
        <div class="col">
            <h2>Log In</h2>
            <form class="form-alta" action="verify" method="post">
                <input placeholder="email" type="text" name="email" id="email" required>
                <input placeholder="password" type="password" name="password" id="password" required>
                <input type="submit" class="btn btn-primary" value="Login">
            </form>
        
        <p class="card-body">No tenes usuario?<button class="btn btn-secondary"><a  href='register' class="btn btn-secondary">Registrate</a></button></p>
       <?php }?>

        <button class="btn btn-danger"><a href='logout'>Desloguearse</a></button>
        </div>
    </div>
    
    <h4 class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
    
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

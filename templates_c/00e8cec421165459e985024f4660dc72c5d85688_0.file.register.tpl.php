<?php
/* Smarty version 3.1.39, created on 2021-10-13 22:48:36
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616746240bf0f7_41651889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00e8cec421165459e985024f4660dc72c5d85688' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\templates\\register.tpl',
      1 => 1634155982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616746240bf0f7_41651889 (Smarty_Internal_Template $_smarty_tpl) {
?>    <main class="main-contacto login">
        <h1>Registro de usuario</h1>
        <p>Los campos con (*) son obligatorios</p>
        <form action="registerUser" method="POST" class="formulario">
            <label for="nick">Nick (*)</label>
            <input type="text" name="nick" placeholder="usuario">
            <label for="input_user">Email (*)</label>
            <input type="email" name="input_user" placeholder="bocajuniors@gmail.com.ar">
            <label for="password">Contraseña (*)</label>
            <input type="password" name="input_password">
            <div> 
               
            </div>
            <input type="submit" class="boton" value="Registrarme">
        </form>      
    </main><?php }
}

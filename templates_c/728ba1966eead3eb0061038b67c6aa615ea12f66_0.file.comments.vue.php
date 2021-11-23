<?php
/* Smarty version 3.1.39, created on 2021-11-23 21:50:30
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\templates\vue\comments.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d5416030e35_97109699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '728ba1966eead3eb0061038b67c6aa615ea12f66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\templates\\vue\\comments.vue',
      1 => 1637700513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619d5416030e35_97109699 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <tr v-for="comment in comments">
        <td>{{comment.comment}}</td>
        <td>{{comment.punctuation}}</td>
           
    </tr>
<?php }
}

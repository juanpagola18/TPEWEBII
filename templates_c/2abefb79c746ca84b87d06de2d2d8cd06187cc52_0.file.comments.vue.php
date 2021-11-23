<?php
/* Smarty version 3.1.39, created on 2021-11-23 16:42:01
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\TPEWEBII\templates\vue\comments.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d0bc9149da8_42722897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2abefb79c746ca84b87d06de2d2d8cd06187cc52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\TPEWEBII\\templates\\vue\\comments.vue',
      1 => 1637680936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619d0bc9149da8_42722897 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <tr v-for="comment in comments">
        <td>{{comment.comment}}</td>
        <td>{{comment.score}}</td>
        <td v-if="user == 'admin'"><button v-on:click="deleteComment" class="btn_delete" v-bind:id="`${comment.id_comment}`">Borrar</button></td>   
    </tr>
<?php }
}

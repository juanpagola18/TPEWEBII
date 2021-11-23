<?php
/* Smarty version 3.1.39, created on 2021-11-23 16:22:06
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\TPEWEBII\templates\vue\comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d071e912155_83171796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3114021b89720ba8189e6b9a6927c41e5af71cf0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\TPEWEBII\\templates\\vue\\comments.tpl',
      1 => 1637680859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619d071e912155_83171796 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <tr v-for="comment in comments">
        <td>{{comment.comment}}</td>
        <td>{{comment.score}}</td>
        <td v-if="user == 'admin'"><button v-on:click="deleteComment" class="btn_delete" v-bind:id="`${comment.id_comment}`">Borrar</button></td>   
    </tr>
<?php }
}

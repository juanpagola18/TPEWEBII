<?php
/* Smarty version 3.1.39, created on 2021-11-23 21:26:13
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\templates\editSelectTeam.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d4e65f10a55_05108382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c953ca04aad1de9e712c66c1b9f9764ec80b452c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\templates\\editSelectTeam.tpl',
      1 => 1637698273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619d4e65f10a55_05108382 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="text-center">Equipos</h1>

<table class="table">
    <thead>
        <th scope="row">Equipo</th>
        <th scope="row">Pais</th>
        <th scope="row">Campeonatos Ganados</th>
        

    </thead>
    <tbody>
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['team']->value->nombreEquipo;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['team']->value->pais;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['team']->value->campeonatos;?>
</td>
  
    </tbody>
</table>
<div class="">
        <form action="editTeam/<?php echo $_smarty_tpl->tpl_vars['team']->value->id_equipo;?>
" method=POST>
            <h2>Editar Equipo</h2>
            <label>Nombre del Equipo</label>
            <input name="newTeamName" type="text" placeholder="Nombre equipo..." required>
            <label>Pais</label>
            <input name="newCountry" type="text" placeholder="Pais..." required>
            <label>Campeonatos Ganados</label>
            <input name="newChampionships" type="number" placeholder="Campeonatos..." required>

            <button class="btn btn-secondary">MODIFICAR EQUIPO</button>        
        </form>   
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

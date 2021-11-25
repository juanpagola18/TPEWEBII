<?php
/* Smarty version 3.1.39, created on 2021-11-25 15:06:38
  from 'C:\xampp\htdocs\proyectos\git clone\TPEWEBII\templates\teamsTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619f986ed27556_33674927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92f3496d345c2f9332d44740832df75de6a20a4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\git clone\\TPEWEBII\\templates\\teamsTable.tpl',
      1 => 1637848870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619f986ed27556_33674927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="card text-center">Equipos</h1>

<table class="table">
    <thead>
        <th scope="col">Equipo</th>
        <th scope="col">Pais</th>
        <th scope="col">Campeonatos Ganados</th>
        <?php if (($_SESSION)) {?>
        <th scope="row">Borrar</th>
        <th scope="row">Editar</th>
        <?php }?>

    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>    
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['team']->value->nombreEquipo;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['team']->value->pais;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['team']->value->campeonatos;?>
</td>
            <?php if (($_SESSION)) {?>
            <td><a class="btn btn-danger" href="deleteTeam/<?php echo $_smarty_tpl->tpl_vars['team']->value->id_equipo;?>
">Borrar</a></td>
            <td><a class="btn btn-primary" href="editTeamMenu/<?php echo $_smarty_tpl->tpl_vars['team']->value->id_equipo;?>
">Editar</a></td>
            <?php }?>
        </tr> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </tbody>

</table>
<?php if (($_SESSION)) {?>
        <div class="t">
        <form action="addTeam" method=POST>
            <h2>Agregar Equipo</h2>
            <label>Nombre del Equipo</label>
            <input name="teamName" type="text" placeholder="Nombre equipo..." required>
            <label>Pais</label>
            <input name="country" type="text" placeholder="Pais..." required>
            <label>Campeonatos Ganados</label>
            <input name="championships" type="number" placeholder="Campeonatos..." required>

            <button>CARGAR EQUIPO</button>        
        </form>   
    </div>
<?php }
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

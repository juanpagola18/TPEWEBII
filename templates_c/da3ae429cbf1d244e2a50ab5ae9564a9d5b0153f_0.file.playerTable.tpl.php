<?php
/* Smarty version 3.1.39, created on 2021-11-24 21:43:01
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\templates\playerTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ea3d57efc05_25185401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da3ae429cbf1d244e2a50ab5ae9564a9d5b0153f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\templates\\playerTable.tpl',
      1 => 1637786571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619ea3d57efc05_25185401 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="text-center">Jugadores</h1>
<div class=>

    <form class="mb-3" action="selectEquipos" method=POST>
    
        <select class="form-control" name= "equipo">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
                <option value='<?php echo $_smarty_tpl->tpl_vars['team']->value->id_equipo;?>
'><?php echo $_smarty_tpl->tpl_vars['team']->value->nombreEquipo;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <button class="btn btn-primary" type="submit"> Ver categoria seleccionada</button>
        <button class="btn btn-light" ><a class="btn btn-dark" href='players'>Ver todos </a></button>
    </form>
</div>  
    

<table class="table">
    <thead>
        <th scope="row">Nombre</th>
        <th scope="row">Partidos Jugados</th>
        <th scope="row">Goles</th>
        <th scope="row">Nombre Equipo</th>
        <th scope="row">Detalle</th>
        <?php if (($_SESSION)) {?>
        <th scope="row">Borrar</th>
        <th scope="row">Editar</th>
        <?php }?>
       

    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>    
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['player']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['player']->value->partidosJugados;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['player']->value->goles;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['player']->value->nombreEquipo;?>
</td>
            <input id="input_id_comment" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">
            <td><a class="btn btn-warning" href="showPlayer/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">Ver mas</a></td>
            <?php if (($_SESSION)) {?>
            <td><a class="btn btn-danger" href="deletePlayer/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">Borrar</a></td>
            <td><a class="btn btn-primary" href="editPlayerMenu/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">Editar</a></td>
            <?php }?>
        </tr> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </tbody>
</table>
  <?php if (($_SESSION)) {?>
  <div class=>
        <form action="addPlayer" method=POST>
            <h2>Agregar Jugador</h2>
            <div class="container-fluid">
                <label>Nombre y Apellido</label>
                <input name="name" type="text" placeholder="Nombre y Apellido..." required>
                <label>Partidos Jugados</label>
                <input name="playedGames" type="text" placeholder="Partidos..." required>
                <label>Goles</label>
                <input name="score" type="number" placeholder="Goles..." required>
                <select name= "team">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
                    <option value='<?php echo $_smarty_tpl->tpl_vars['team']->value->id_equipo;?>
'><?php echo $_smarty_tpl->tpl_vars['team']->value->nombreEquipo;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <button class="btn btn-secondary">CARGAR</button>  
            </div>      
        </form>   
    </div>
    
    
    <?php }
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

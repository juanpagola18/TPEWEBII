<?php
/* Smarty version 3.1.39, created on 2021-11-25 15:05:53
  from 'C:\xampp\htdocs\proyectos\git clone\TPEWEBII\templates\playerDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619f9841332fc9_00700766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8d7f82394826178f59c014dd8c4f95d86442e5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\git clone\\TPEWEBII\\templates\\playerDetail.tpl',
      1 => 1637849055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619f9841332fc9_00700766 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <button><a class="btn btn-primary" href='players'>Volver</a></button>
    <div>
        <ul class="list-group">
            <li class="list-group-item">Nombre: <?php echo $_smarty_tpl->tpl_vars['player']->value->nombre;?>
</li>
            <li class="list-group-item">Partidos Jugados: <?php echo $_smarty_tpl->tpl_vars['player']->value->partidosJugados;?>
</li>
            <li class="list-group-item">Goles: <?php echo $_smarty_tpl->tpl_vars['player']->value->goles;?>
</li>
            <li class="list-group-item">Equipo: <?php echo $_smarty_tpl->tpl_vars['player']->value->nombreEquipo;?>
</li>
            <input id="input_id_comment" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">
            
        </ul>
    </div>
    
      <section id = seccionComentario}>
      <table class="table">
      <thead>
                <th  scope="row">Comentario</th>
                <th  scope="row">Puntaje</th>
                <th scope="row">Usuario</th>
                <th scope="row">Fecha</th>
            </thead>

            <tbody id="comments-list">
                    
            </tbody>
      </table>
      <?php if (($_SESSION)) {?>
              <button class="btn btn-warning" id="filtrarComment"> Filtrar por puntaje</button>
        <select class="filtrarValor">
                <option value="1">1 - Mediocre</option>
                <option value="2">2 - Jugador malo</option>
                <option value="3">3 - Jugador promedio</option>
                <option value="4">4 - Buen jugador</option>
                <option value="5">5 - Jugador destacado</option>
        </select>
      <button class="btn btn-dark" id="mostrarTodos"> Mostrar todos</button>
     <div clas="enviarComentario">
        <h1>Agregue su comentario</h1>
            <select id="valuacion" aria-label="Default select example">
                <option selected>Como puntuaria al jugador?</option>
                <option value="1">1 - Mediocre</option>
                <option value="2">2 - Jugador malo</option>
                <option value="3">3 - Jugador promedio</option>
                <option value="4">4 - Buen jugador</option>
                <option value="5">5 - Jugador destacado</option>
            </select>
        <div class="mb-3">
            <label for="comentario" class="form-label">Su comentario</label>
            <input type="email" class="form-control" id="comentario" placeholder="Escriba su comentario">
        </div>
        <button class="btn btn-dark" id="cargarComment">Enviar Comentario </button>
    <div>    
     

    <?php }?>
     </section>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="js/apiComments.js"><?php echo '</script'; ?>
> 
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
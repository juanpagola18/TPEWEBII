<?php
/* Smarty version 3.1.39, created on 2021-11-23 11:44:13
  from 'C:\xampp\htdocs\proyectos\TPEWEBII\TPEWEBII\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619cc5fd4efd70_91125429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11f0f7b967c118811240c97f7c3e642675473f1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEWEBII\\TPEWEBII\\templates\\header.tpl',
      1 => 1637664248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619cc5fd4efd70_91125429 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Jugadores 2021</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            
                 <a class="navbar-brand" href="home">INICIO</a>
            
          
                <a class="navbar-brand" href="teams">EQUIPOS</a>
          
            
                <a class="navbar-brand" href="players">JUGADORES</a>
            
            <?php if (empty($_SESSION['usuario'])) {?>
          
                <a class="navbar-brand" href="loginForm">REGISTRO</a>
         
            <?php } else { ?>
            
                <a class="navbar-brand" href="logout">CERRAR SESION</a>
          
            
            <?php if (($_SESSION['rol'] == 1)) {?>
             
                 <a class="navbar-brand" href="usuarios">USUARIOS</a>
            <?php }?> 
                <a class="navbar-brand"> <?php echo $_SESSION['usuario'];?>
 </a>

            
            
            <?php }?>

            
        </div>    
    </nav><?php }
}

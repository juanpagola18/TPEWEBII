<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}" />
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
            
            {if empty($smarty.session.usuario)}
          
                <a class="navbar-brand" href="loginForm">REGISTRO</a>
               <input id="id_admin" type="hidden" value="2">
         
            {else}
               
                <a class="navbar-brand" href="logout">CERRAR SESION</a>
               <input id="id_admin" type="hidden" value="{$smarty.session.rol}">
               <input id="id_session" type="hidden" value="{$smarty.session.id}">
            {if ($smarty.session.rol == 1)}
             
                 <a class="navbar-brand" href="usuarios">USUARIOS</a>
            {/if} 
                <a class="navbar-brand"> {$smarty.session.usuario} </a>

            
            
            {/if}

            
        </div>    
    </nav>
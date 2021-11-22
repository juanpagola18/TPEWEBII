{include file="templates/header.tpl"}   
<main class="main-contacto login">
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
</main>
    {include file="templates/footer.tpl"}
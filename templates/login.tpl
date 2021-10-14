{include file='templates/header.tpl'}

<div class="container">
    
    <div class="row">
        <div class="col">
            <h2>Log In</h2>
            <form class="form-alta" action="verify" method="post">
                <input placeholder="email" type="text" name="email" id="email" required>
                <input placeholder="password" type="password" name="password" id="password" required>
                <input type="submit" class="btn btn-primary" value="Login">
            </form>
        
        <p class="card-body">No tenes usuario?<button class="btn btn-secondary"><a  href='register' class="btn btn-secondary">Registrate</a></button></p>
        <button class="btn btn-danger"><a href='logout'>Desloguearse</a></button>
        </div>
    </div>
    <h4 class="alert-danger">{$error}</h4>
    
</div>

{include file='templates/footer.tpl'}
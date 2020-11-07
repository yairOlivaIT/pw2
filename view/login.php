{{> header}}
    <h1>Login</h1>
<div class="row">
    <div class="col-md-8 m-auto">
        <form action="/user/login" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Ingrese su email">
            </div>
            <div class="form-group">
                <label for="password">Contaseña</label>
                <input type="password" id="password" name="password"  class="form-control" placeholder="Ingrese su contraseña">
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Ingresar">
        </form>
        {{#error}}
            <div class="alert alert-danger" role="alert">
                {{error}}
            </div>
        {{/error}}
    </div>
</div>
{{> footer}}
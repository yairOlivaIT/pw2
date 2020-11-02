{{> header}}
<h1>Registro</h1>
<div class="row">
    <div class="col-md-8 m-auto">
        <form action="">
            <div class="form-group">
                <label for="nombre_apellido">Nombre y apellido</label>
                <input type="text" id="nombre_apellido" name="nombre_apellido" class="form-control" placeholder="Ingrese nombre y apellido">
            </div>
            <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" id="dni" name="dni" class="form-control" placeholder="Ingrese su dni">
            </div>
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de nacimiento</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control">
            </div>
            <div class="form-group">
                <label for="tipo_licencia">Tipo de licencia</label>
                <select name="tipo_licencia" id="tipo_licencia" class="form-control">
                    <option value="" selected disabled>Seleccione su tipo de licencia</option>
                    <option value="b1">B.1</option>
                    <option value="b2">B.2</option>
                    <option value="b3">B.3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Ingrese su email">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su contraseña">
            </div>
            <div class="form-group">
                <label for="password_repet">Confirme su contraseña</label>
                <input type="password" name="password_repet" id="password_repet" class="form-control" placeholder="Vuelva a ingresar su contraseña">
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Registrarme">
        </form>
    </div>
</div>
{{> footer}}
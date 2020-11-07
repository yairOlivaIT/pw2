{{> headerInterno}}
    <h2>Empleados</h2>
<div class="mt-4">
    <a href=""></a>
    <form action="#" method="POST">
        <div class="d-md-flex">
            <input type="text" name="buscar" placeholder="Ingrese el DNI del empleado" class="form-control mb-2 col-md-10">
            <button class="btn btn-primary mb-2 ml-md-2 w-100">Buscar</button>
        </div>
    </form>
</div>
<div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Nombre y apellido</th>
                <th scope="col">Dni</th>
                <th scope="col">Tipo de licencia</th>
                <th scope="col">Rol</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th><a href="/empleado/show/1">Cosme Fulanito</a></th>
                <th>40123456</th>
                <th>B1</th>
                <th>Chofer</th>
                <th>
                    <div class="d-flex">
                        <a href="/empleado/edit/1" class="btn btn-primary mr-2 h-75">Editar</a>
                        <a href="/empleado/viajes/1" class="btn btn-success mr-2 h-75">Viajes</a>
                        <button type='button' class='btn btn-danger mr-2' data-toggle='modal' data-target='#exampleModalCenter'>
                            Eliminar
                        </button>
                    </div>
                </th>
                <div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                    <div class='modal-dialog modal-dialog-centered' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='exampleModalLongTitle'>Eliminar empleado</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body'>
                                <div class='alert alert-danger' role='alert'>
                                    Desea eliminar a Cosme Fulanito ?
                                </div>
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>
                                <form class='mr-2' action='#' method='post'>
                                    <input type='hidden' name='id' value=''>
                                    <input type='submit' class='btn btn-danger' value='Eliminar'>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            </tbody>
        </table>
    </div>
</div>
{{> footer}}

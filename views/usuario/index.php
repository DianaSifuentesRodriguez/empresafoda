<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
    <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  </head>
<body>
    <?php require_once 'views/sidebar.php' ?>
    <div class="content-wrapper">
      <div class="container ml-3 mt-3">  
        <section class="content-header">
        </section>
            <section class ="content">
               <div class="card">
                  <h5 class="card-header">Registrar Usuarios</h5>
                    <div class="card-body">
                      <div class="form-group row ml-5">
                        <label for="inputreg" class="col-sm-1.5 col-form-label">Nombre:</label>
                        <div class="col-sm-3">
                          <input type="tex" class="form-control" id="inputreg">
                        </div>
                        <label for="inputreg" class="col-sm-1.5 col-form-label ml-5">Email:</label>
                        <div class="col-sm-3">
                          <input type="tex" class="form-control" id="inputreg">
                        </div>
                      </div>
                      <div class="form-group row ml-5">
                        <label for="inputreg" class="col-sm-1.5 col-form-label">Apellidos:</label>
                        <div class="col-sm-3">
                          <input type="tex" class="form-control" id="inputreg">
                        </div>
                        <label for="inputreg" class="col-sm-1.5 col-form-label ml-5">Domicilio:</label>
                        <div class="col-sm-3">
                          <input type="tex" class="form-control" id="inputreg">
                        </div>
                      </div>
                      <div class="form-group row ml-5">
                        <label for="inputreg" class="col-sm-1 col-form-label">Dni:</label>
                        <div class="col-sm-3">
                          <input type="tex" class="form-control" id="inputreg">
                        </div>
                        <label for="inputreg" class="col-sm-1.5 col-form-label ml-5">Teléfono:</label>
                        <div class="col-sm-3">
                          <input type="tex" class="form-control" id="inputreg">
                        </div>
                      </div>
                    </div>
            </section>
            <section class ="content">
               <div class="card">
                  <h5 class="card-header">Acceso</h5>
                    <div class="card-body">
                      <div class="form-group row ml-5">
                        <label for="inputreg" class="col-sm-1.5 col-form-label">Usuario:</label>
                        <div class="col-sm-3">
                          <input type="tex" class="form-control" id="inputreg">
                        </div>
                      </div>
                      <div class="form-group row ml-5">
                        <label for="inputPassword" class="col-sm-1.5 col-form-label">Contraseña:</label>
                        <div class="col-sm-3">
                          <input type="Password" class="form-control" id="inputreg">
                        </div>
                        <div class="col-sm-1">
                        </div>
                        <div class="col-sm-3">
                         <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Seleccionar Rol
                          </button>
                          <div class="dropdown-menu"   aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Administrador</a>
                            <a class="dropdown-item" href="#">Admin-Empresa</a>
                            <a class="dropdown-item" href="#">Trabajador</a>
                            <a class="dropdown-item" href="#">Usuario</a>
                          </div>
                        </div>
                       </div>
                      </div>
                      <div class="form-group row ml-5">
                        <div class="col ml-auto">
                          <button type="button" class="btn btn-info">REGISTRAR</button>
                          <button type="button" class="btn btn-danger">CANCELAR</button>
                        </div>
                      </div>
                    </div>
                </div>   
            </section>
      </div>
    </div>
<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/dist/js/demo.js"></script>
</body>
</html>

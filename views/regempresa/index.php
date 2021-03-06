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
                  <h5 class="card-header">Registrar Empresas</h5>
                    <div class="card-body">
                      <div class="form-group row ml-5">
                        <label for="inputreg" class="col-sm-1.5 col-form-label">Ruc:</label>
                        <div class="col-sm-3">
                          <input type="tex" class="form-control" id="idruc">
                        </div>
                        <label for="inputreg" class="col-sm-1.5 col-form-label ml-5">Nombre Comercial:</label>
                        <div class="col-sm-3">
                          <input type="tex" class="form-control" id="idnomc">
                        </div>
                      </div>
                      <div class="form-group row ml-5">
                        <label for="inputreg" class="col-sm-1.5 col-form-label">Razón Social:</label>
                        <div class="col-sm-3">
                          <input type="tex" class="form-control" id="idrsocial">
                        </div>
                        <label for="inputreg" class="col-sm-1.5 col-form-label ml-5">Tipo de Contribuyente:</label>
                        <div class="col-sm-3">
                          <input type="tex" class="form-control" id="idtipoc">
                        </div>
                      </div>
                      <div class="form-group row ml-5">
                        <label for="inputreg" class="col-sm-1.5 col-form-label ml-3">Email:</label>
                        <div class="col-sm-3">
                          <input type="tex" class="form-control" id="idemail">
                        </div>
                        <label for="inputreg" class="col-sm-1.5 col-form-label ml-3">Teléfono:</label>
                        <div class="col-sm-3">
                          <input type="tex" class="form-control" id="idtel">
                        </div>
                        <label for="inputreg" class="col-sm-1.5 col-form-label ml-3">Dirección:</label>
                        <div class="col-sm-3">
                          <input type="tex" class="form-control" id="iddirec">
                        </div>
                      </div>
                    </div>
            </section>
            <section class ="content">
               <div class="card">
                  <h5 class="card-header">Información Institucional</h5>
                    <div class="card-body">
                      <div class="form-group row ml-5 ">
                        <div class="col-col-sm-4 col-md-4 col-lg-4 text-center">
                          <label for="inputreg" class="col col-form-label">Misión</label>
                        </div>
                        <div class="col-col-sm-4 col-md-4 col-lg-4 text-center">
                          <label for="inputreg" class="col col-form-label">Misión</label>
                        </div>
                      </div>
                      <div class="form-group row ml-5">
                        <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>  
                        </div>
                      </div>
                      <div class="form-group row ml-5">
                        <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                          <label for="inputreg" class="col col-form-label">Propuesta de Valor</label>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                          <label for="inputreg" class="col col-form-label">Factor Diferenciador</label>
                        </div>
                      </div>
                      <div class="form-group row ml-5">
                        <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>  
                        </div>
                      </div>
                      <div class="form-group row ml-5 mt-5">
                        <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                          <label for="inputreg" class="col col-form-label">Objetivos Estrategicos</label>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 text-center ">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        </div>
                      </div>
                      <div class="form-group row ml-5 mt-5">
                        <div class="col-sm-4 col-md-4 col-lg-15 text-center">
                          <button type="button" class="btn btn-info" onclick="registrarEmpresa()">REGISTRAR</button>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>

function insertEmpresa(){
    var ruc = document.getElementById('idruc').value;
    var nomc = document.getElementById('idnomc').value;
    var rsocial = document.getElementById('idrsocial').value;
    var tipoc = document.getElementById('idtipoc').value;
    var email = document.getElementById('idemail').value;
    var direc = document.getElementById('iddirec').value;
    var tel = document.getElementById('idtel').value;
  
    var fm= new FormData();
    fm.append("Ruc",ruc);
    fm.append("NombreComercial",nomc);
    fm.append("RazonSocial",rsocial);
    fm.append("TipoContribuyente",tipoc);
    fm.append("Email",email);
    fm.append("Direccion",direc);
    fm.append("Telefono",tel);

    var url= "http://localhost/empresafoda/regempresa/insertEmpresa/"
    httpRequest(url,fm,function(){
        console.log(this.responseText);
        //if 
        showSave();
    });
}
function httpRequest(url,fr,callback){
    const http = new XMLHttpRequest();
    http.open("POST",url);
    http.send(fr);
    http.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            callback.apply(http);
        }
    }
}
function showSave() {
     Swal.fire({
            icon: 'success',
            title: 'EL REGISTRO SE GUARDO CORRECTAMENTE',
            showConfirmButton: false
            })
                     
    }
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                  <h5 class="card-header">Listar Empresas</h5>
                    <div class="card-body">
                    <div class= "row ">
                       <div class="col-4 input-group" >
                       <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                       <span class= "input-group-btn"><button type="button" class="btn"><i class="fas fa-search"></i></button></span>
                       </div>
                    </div>
                         <table class="table" id="lista_empresa">
                          <thead>
                            <tr>
                              <th scope="col">RUC</th>
                              <th scope="col">NOMBRE COMERCIAL</th>
                              <th scope="col">EMAIL</th>
                              <th scope="col">TELEFONO</th>
                              <th scope="col">DIRECCION</th>
                              <th scope="col">VER</th>
                              <th scope="col">EDITAR</th>
                              <th scope="col">ELIMINAR</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                          </tbody>
                        </table>
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

<script>
function httpRequest(url,callback){
    
    const http = new XMLHttpRequest();
    http.open("GET",url);
    http.send();
    http.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            callback.apply(http);
        }
    }
    
    }
  function getEmpresa(){
    var url="http://localhost/empresafoda/listarempresa/getEmpresa/";
    httpRequest(url,function(){
      var emp=JSON.parse(this.responseText);
      var tabla= $("#lista_empresa tbody");
      for(var item of emp){
        var tr = '<tr>';
        tr= tr+ '<td>' + item.Ruc +'</td>';
        tr= tr+ '<td>' + item.NombreComercial +'</td>';
        tr= tr+ '<td>' + item.Email +'</td>';
        tr= tr+ '<td>' + item.Telefono +'</td>';
        tr= tr+ '<td>' + item.Direccion +'</td>';
        //ultimos 3
        tr = tr + '<td><button type="button" class="btn btn-info">VER</button></td>';
        tr = tr + '<td><button type="button" class="btn btn-warning">EDITAR</button></td>';
        tr = tr + '<td><button type="button" class="btn btn-danger">ELIMINAR</button></td>';
        tabla.append(tr);
      }
    })
  
  }
  getEmpresa();
</script>







</body>
</html>

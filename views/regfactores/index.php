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
                  <h5 class="card-header">Registrar Factores</h5>
                    <div class="card-body">
                     <div class = "row ml-5">
                         <div class = "col-4 sm-3 ml-5 ">
                            <div class="dropdown mt-3">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Factores Internos
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">Debilidades</button>
                                <button class="dropdown-item" type="button">Fortalezas</button>
                              </div>
                            </div>
                            <div class="form-group mt-4">
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Escribe aquí"></textarea>
                            </div>
                            <table class="table table-hover">
                          <thead>
                            <tr class="table-warning">
                              <th scope="col">N°</th>
                              <th scope="col">Debilidades</th>
                              <th scope="col">Fortalezas</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                            
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              
                            </tr>
                          </tbody>
                        </table>
                         </div>
                         <div class = "col-4 sm-3 ml-5">
                            <div class="dropdown mt-3">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Factores Externos
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">Amenazas</button>
                                <button class="dropdown-item" type="button">Oportunidades</button>
                              </div>
                            </div>
                            <div class="form-group mt-4">
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Escribe aquí"></textarea>
                            </div>
                         <table class="table table-hover">
                          <thead>
                            <tr class="table-info">
                              <th scope="col">N°</th>
                              <th scope="col">Amenazas</th>
                              <th scope="col">Oportunidades</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                            
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              
                            </tr>
                          </tbody>
                        </table>
                        </div>
                     </div>
                    </div>
               </div>
            </section>
            </section>
            <section class ="content">
               <div class="card">
                  <h5 class="card-header">Registrar Estrategias FA-FO-DA-DO</h5>
                    <div class="card-body">
                     <div class = "row ml-5">
                         <div class = "col-4 sm-3 ml-5 ">
                            <div class="dropdown mt-3">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Factores Internos
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">Debilidades</button>
                                <button class="dropdown-item" type="button">Fortalezas</button>
                              </div>
                            </div>
                            <div class="form-group mt-5">
                              <select multiple class="form-control" id="exampleFormControlSelect2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                         </div>
                         <div class = "col-4 sm-3 ml-5">
                            <div class="dropdown mt-3">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Factores Externos
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">Amenazas</button>
                                <button class="dropdown-item" type="button">Oportunidades</button>
                              </div>
                            </div>                           
                            <div class="form-group mt-5">
                              <select multiple class="form-control" id="exampleFormControlSelect2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                        </div>  
                     </div>
                     <div class = "row ml-5">
                        <div class = "col-6 sm-3 ml-5">
                           <div class="form-group mt-4">
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe aquí la estrategia"></textarea>
                           </div>
                        </div>
                        <div class = "col-4 sm-3 ml-2 mt-5" >
                        <button type="button" class="btn btn-warning">Registrar</button>
                        <button type="button" class="btn btn-danger">Cancelar</button>
                          </div>
                        </div>
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






















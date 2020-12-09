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
                  <h5 class="card-header">Listar Estrategias FA-FO-DA-DO</h5>
                    <div class="card-body">
                     <div class = "row ml-5">
                       <div class = "col-4 sm-3 ml-5 ">
                            <div class="dropdown mt-3">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               ESTRATEGIAS
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">FA</button>
                                <button class="dropdown-item" type="button">FO</button>
                                <button class="dropdown-item" type="button">DA</button>
                                <button class="dropdown-item" type="button">DO</button>
                              </div>
                            </div>
                       </div>
                     </div>
                     <div class = "row ml-5 mt-5 ">
                       <div class = "col-7 sm-3 ml-5 ">
                      <table class="table ml-5">
                          <thead class="table-warning">
                            <tr>
                              <th scope="col">N°</th>
                              <th scope="col">Estrategias</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>                             
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>                             
                            </tr>
                          </tbody>
                        </table>
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

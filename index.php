<?php 
$title='Datuar';
$page='planilla';
if(!empty($url)){
  $url = $_GET['url'];
}else{
  $url = './json/data.txt';
}
$response = file_get_contents($url);
$data_json = json_decode($response,true);
$data = $data_json['data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Planilla informativa datuar" />
    <meta name="keywords" content="Datuar"/>
    <meta name="author" content="http://www.estudiochento.com.ar" />
    <title><?php echo $title?></title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" /> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500|Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
</head>
<body>

<header>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg" id="mainNav">
        <div class="container">
            <div class="navbar-brand">
                <a href="index.php">
                    <img class="logo" src="assets/img/logo-header.png" alt="Datuar">
                </a>
            </div>
        </div>
    </nav>
</header>


<div class="container">
    <div class="row">
      <div class="col-8 grid-margin stretch-card m-auto">
        <div class="card mt-3">
            <div class="card-body">
                <div class="title-section"><h1>Gestor de informes</h1></div>
                <p class="pt-3">Bienvenido al gestor de Informes de Datuar.</p>
                <div class="row  border-t py-3">
                  <div class="col-6 text-center">
                    <a href="importar.php" class="btn btn-light px-3 py-2">
                      <i class="material-icons custom-icons">attach_file</i>
                      <br><span class="small">Cargar archivo</span>
                    </a>
                  </div>
                  <div class="col-6 text-center">
                    <a href="planilla.php" class="btn btn-light px-3 py-2">
                      <i class="material-icons custom-icons">visibility</i>
                      <br><span class="small">Ver planilla DEMO</span>
                    </a>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>



<!-- Core theme JS-->
<script src="assets/js/scripts.js"></script>
</body>
</html>
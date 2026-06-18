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
                <div class="title-section"><h1>Cargar Json</h1></div>
                <form action="planilla.php" method="post" enctype="multipart/form-data">
                    <div class="d-block p-3">
                        <label for="fileTest">Cargar JSON archivo:</label>
                        <input class="form-control" id="fileTest" name="fileTest" type="file">
                    </div>
                    <div class="d-block p-3">
                        <label for="fileTest">Cargar JSON por URL:</label>
                        <input class="form-control" id="url" name="url" type="text" placeholder="https://">
                    </div>
                    <div class="d-block p-3">
                        <label for="fileTest">Cargar JSON por input:</label>
                        <textarea class="form-control small" id="dataField" name="dataField" rows="9"></textarea>
                    </div>
                    <div class="d-block p-3 text-center">
                        <button type="submit" class="btn btn-dark">Importar</button>
                    </div>
                </form>
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
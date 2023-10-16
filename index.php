<?php
    date_default_timezone_set('America/Sao_Paulo');

    $data = date('d/m/Y');
    $horario = date('H:i:s');
    $ip = $_SERVER['REMOTE_ADDR']; 
    $pais = 'não identificado';

    $accessKey = '04b2fef2576a8b';
    $apiUrl = "https://ipinfo.io/{$ip}/json?token={$accessKey}";
    $response = file_get_contents($apiUrl);
    
    if ($response === false) {
        echo "Não foi possivel obter informação sobre o local do IP " . $ip;
    } else {
        $ipInfo = json_decode($response);
        if (isset($ipInfo->country))
            $pais = $ipInfo->country;
    }
?>
<!doctype html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script>
        //dark-light mode
        document.addEventListener('DOMContentLoaded', function () {
            const button = document.getElementById('btnSwitch');
            
            button.addEventListener('click', function () {   
                if (document.documentElement.getAttribute('data-bs-theme') == 'dark') {
                    document.documentElement.setAttribute('data-bs-theme','light')
                }
                else {
                    document.documentElement.setAttribute('data-bs-theme','dark')
                }
            });
            
        });
        
    </script>
  </head>
  <body>
    <div class="container mt-5 d-flex align-items-center">
        <di v class="row align-items-center">
            <div class="form-check form-switch mb-2 ">
                <input class="form-check-input" type="checkbox" id="btnSwitch">
                <label class="form-check-label" for="btnSwitch">Dark Mode</label>
            </div>
            <h1>Projeto WEB</h1>
            <h2>Redes de Computadores</h2>

            <div class="card w-50 mt-4">
                <div class="card-body">
                    <p class="fw-bold">Informações</p>
                    <p id="ip"> IP: <?php echo   $ip; ?></p>
                    <p id="data">Data: <?php echo $data; ?></p>    
                    <p id="hora">Hora: <?php echo $horario; ?></p>
                    <p id="hora">Local: <?php echo $pais; ?></p>
                </div>
            </div>
        </div>        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
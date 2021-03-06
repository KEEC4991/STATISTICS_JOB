<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>DEMO - GRAFICAS</title>
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!-- M-CHART dependencias -->
        <script src="//www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="//www.amcharts.com/lib/3/serial.js"></script>
        <script src="//www.amcharts.com/lib/3/themes/light.js"></script>

        <script src="https://www.amcharts.com/lib/3/xy.js"></script>
        <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/start.css">
        <script src="/js/start.js"></script>

        <style>

        </style>
    </head>
    <body>
        <div id="app">
            <!-- BARRA DE NAVEGACION -->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
                <a class="navbar-brand" href="#">DEMO - GRAFICAS</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" id="li_a_inicio" href="/">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/reporte">REPORTE</a>
                    </li>
                </ul>
            </nav>
            <div>
            </div>

            <!-- PANEL DE BOTON INICIO/PAUSA DE GENERACION -->
            <div id="panel_general_s" class="panel_general_l">
                <div id="panel_boton_generador">
                    <input id="boton_inicio_toggle" type="button" class="btn btn-warning" value="INICIAR"> 
                </div>
                <div id="panel_central_grafico">
                </div>
            </div>

            <!-- PANEL DE GENERACION DE PARA GRAFICOS -->
            <div id="contenedor_grafico">
                <div id="chartdiv"></div>
                <input id="boton_valor_generado" type="button" class="btn btn-primary" value="INICIAR"> 
            </div>
             
        </div>
    </body>
</html>

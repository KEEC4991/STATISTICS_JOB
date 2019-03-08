//Variable que almacenará el valor de solicitud aleatoria. Almacenara un interval
var intervalo_Solicitud = 0;
var numeros_Generados = [];
var contador_Generados = 0;

// Variables para el chart de graficación
var chart;
var series;
var bullet;

//Funcion que inicia el proceso de generacion de los valores enteros, de forma aleatoria

function iniciar(){

    //SOLICITUD DEL NUMERO A CADA SEGUNDO
    intervalo_Solicitud =  setInterval(solicitar_Numero,500);
    console.log("iniciar");
}

//Funcion que solicita un valor y realiza el almacenamiento del mismo

function solicitar_Numero(){
                
    // Solicitud Ajax - Numero random generado por el controlador

    $.ajax({
        type : 'GET',
        url: 'http://35.185.119.169/generacion_random',
        'success': function(res){

                //Impresion de respuesta
                //console.log(res);

                //Insert del valor generado al arreglo del chart : numeros_Generados
                var nuevo_Registro = { 'date' : contador_Generados, 'visits' : res['valor'] };

                if(numeros_Generados.length == 100){
                    numeros_Generados.shift();
                    chart.dataProvider.shift();
                }
                
                var elem2 = document.getElementById("boton_valor_generado");
                elem2.value = res['valor'];

                //Corrimiento y actualizacion del grafico
                chart.dataProvider.push( nuevo_Registro );
                chart.validateData();
                chart.zoomToIndexes(chart.dataProvider.length - 50, chart.dataProvider.length - 1);

                //Aumento del contador de registros
                contador_Generados ++;
            },
        'error': function(){
            console.log("Error");
        }
    });
}

//Funcion para pausar la solicitud de numeros de forma aleatoria

function pausar(){

    clearInterval(intervalo_Solicitud);
    console.log("pausa");
}



function grafica_Resultados(){
    //Crecaciónn del Chart
    // mChart v.3
    chart = AmCharts.makeChart( "chartdiv", {
        "type": "serial",
        "theme": "light",
        "zoomOutButton": {
            "backgroundColor": '#000000',
            "backgroundAlpha": 0.15
        },
        "dataProvider": [],
        "categoryField": "date",
        "categoryAxis": {
            "minPeriod": "DD",
            "dashLength": 1,
            "gridAlpha": 0.15,
            "axisColor": "#DADADA"
        },
        "graphs": [ {
            "id": "g1",
            "valueField": "visits",
            "bullet": "round",
            "bulletBorderColor": "#FFFFFF",
            "bulletBorderThickness": 1,
            "lineThickness": 1,
            "lineColor": "#b5030d",
            "negativeLineColor": "#0352b5",
            "hideBulletsCount": 50
        } ],
        "chartCursor": {
            "cursorPosition": "mouse"
        },
        "chartScrollbar": {
            "graph": "g1",
            "scrollbarHeight": 40,
            "color": "#FFFFFF",
            "autoGridCount": true
        }
    } )

}

//Acciones al cargar la pagina

window.onload = function(){

    //Toggle de boton : INICIAR -> PAUSAR -> INICIAR ... 

    grafica_Resultados();

    $('#boton_start').click(function(){
        window.location.href = "/start";
    });

    $("#boton_inicio_toggle").click(function(){

        var elem = document.getElementById("boton_inicio_toggle");

        if(elem.value == "INICIAR"){
            iniciar();
            elem.value = "PAUSAR";
        }else{
            pausar();
            elem.value = "INICIAR";
        }
    });

};

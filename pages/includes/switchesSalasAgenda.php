<?php

switch ($CorSala) {
    case "sala1": $Style = "background-color:rgb(242,128,0);color:rgb(255,255,255);";
        break;
    case "sala2": $Style = "background-color:rgb(68,157,9);color:rgb(255,255,255);";
        break;
    case "sala3": $Style = "background-color:rgb(22,143,77);color:rgb(255,255,255);";
        break;
    case "sala4": $Style = "background-color:rgb(105,14,28);color:rgb(255,255,255);";
        break;
    case "sala5": $Style = "background-color:rgb(21,104,145);color:rgb(255,255,255);";
        break;
    case "sala6": $Style = "background-color:rgb(22,16,106);color:rgb(255,255,255);";
        break;
}
include 'pages/includes/switchHoraEntradaSaida.php';
switch ($qtdHorario) {
    case 0.5: $Height = "height:22px;";
        break;
    case 1: $Height = "height:44px;padding-top:10px!important;";
        break;
    case 1.5: $Height = "height:66px;padding-top:20px!important;";
        break;
    case 2: $Height = "height:88px;padding-top:30px!important;";
        break;
    case 2.5: $Height = "height:110px;padding-top:40px!important;";
        break;
    case 3: $Height = "height:110px;padding-top:50px!important;";
        break;
}
switch ($horarioEntrada) {
    case 8: $Spacing = "position:absolute;top:38px;";
        break;
    case 8.5: $Spacing = "position:absolute;top:60px;";
        break;
    case 9: $Spacing = "position:absolute;top:82px;";
        break;
    case 9.5: $Spacing = "position:absolute;top:104px;";
        break;
    case 10: $Spacing = "position:absolute;top:126px;";
        break;
    case 10.5: $Spacing = "position:absolute;top:148px;";
        break;
    case 11: $Spacing = "position:absolute;top:170px;";
        break;
    case 11.5: $Spacing = "position:absolute;top:192px;";
        break;
    case 12: $Spacing = "position:absolute;top:214px;";
        break;
    case 12.5: $Spacing = "position:absolute;top:236px;";
        break;
    case 13: $Spacing = "position:absolute;top:258px;";
        break;
    case 13.5: $Spacing = "position:absolute;top:280px;";
        break;
    case 14: $Spacing = "position:absolute;top:302px;";
        break;
    case 14.5: $Spacing = "position:absolute;top:324px;";
        break;
    case 15: $Spacing = "position:absolute;top:346px;";
        break;
    case 15.5: $Spacing = "position:absolute;top:368px;";
        break;
    case 16: $Spacing = "position:absolute;top:390px;";
        break;
    case 16.5: $Spacing = "position:absolute;top:412px;";
        break;
    case 17: $Spacing = "position:absolute;top:437px;";
        break;
    case 17.5: $Spacing = "position:absolute;top:456px;";
        break;
    case 18: $Spacing = "position:absolute;top:478px;";
        break;
    case 18.5: $Spacing = "position:absolute;top:500px;";
        break;
    case 19: $Spacing = "position:absolute;top:522px;";
        break;
    case 19.5: $Spacing = "position:absolute;top:544px;";
        break;
    case 20: $Spacing = "position:absolute;top:566px;";
        break;
    case 20.5: $Spacing = "position:absolute;top:588px;";
        break;
    case 21: $Spacing = "position:absolute;top:610px;";
        break;
    case 21.5: $Spacing = "position:absolute;top:632px;";
        break;
}
<?php

switch ($tempoAula) {
    case 0.5 :
        $QueryUpdate1Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $horarioEntrada";
        $QueryUpdate1RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $horarioEntrada";
        $ExeQrUpdate1Registro = mysql_query($QueryUpdate1Registro);
        $ExeQrUpdate1RegistroProf = mysql_query($QueryUpdate1RegistroProf);
        echo $compartilharAula."<br>";
        echo $professor."<br>";
        if ($compartilharAula = 1) {
            $ExeQrUpdate1RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $horarioEntrada");
            $ExeQrUpdate1RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $horarioEntrada");
            echo "Aula registrada para compartilhar com outros alunos<br>";
        }
        if ($ExeQrUpdate1Registro) {
            echo "Registro do horário" . $horarioEntrada . "atualizado! <br>";
            echo "<b>Inserindo registro para acompanhamento na agenda... </b><br>";
        } else {
            echo mysql_error();
        }

        break;
    case 1:
        $Entrada2 = $horarioEntrada + 0.5;
        $QueryUpdate1Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $horarioEntrada";
        $QueryUpdate2Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $Entrada2";
        $QueryUpdate1RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $horarioEntrada";
        $QueryUpdate2RegistroProf = "UPDATE $salaDeAula SET SET professor = '$professor' WHERE entrada = $Entrada2";

        $ExeQrUpdate1Registro = mysql_query($QueryUpdate1Registro);
        $ExeQrUpdate2Registro = mysql_query($QueryUpdate2Registro);
        $ExeQrUpdate1RegistroProf = mysql_query($QueryUpdate1RegistroProf);
        $ExeQrUpdate2RegistroProf = mysql_query($QueryUpdate2RegistroProf);
        echo $compartilharAula;
        if ($compartilharAula = 1) {
            $ExeQrUpdate1RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $horarioEntrada");
            $ExeQrUpdate2RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $Entrada2");
            $ExeQrUpdate1RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $horarioEntrada");
            $ExeQrUpdate2RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $Entrada2");
            echo "Aula registrada para compartilhar com outros alunos<br>";
        }

        if ($ExeQrUpdate1Registro && $ExeQrUpdate2Registro) {
            echo "Registro do horário" . $horarioEntrada . "atualizado! <br>";
            echo "Registro do horário" . $Entrada2 . "atualizado! <br>";
            echo "<b>Inserindo registro para acompanhamento na agenda... </b><br>";
        } else {
            echo mysql_error();
        }

        break;
    case 1.5:
        $Entrada2 = $horarioEntrada + 0.5;
        $Entrada3 = $Entrada2 + 0.5;
        $QueryUpdate1Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $horarioEntrada";
        $QueryUpdate2Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $Entrada2";
        $QueryUpdate3Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $Entrada3";
        $QueryUpdate1RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $horarioEntrada";
        $QueryUpdate2RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $Entrada2";
        $QueryUpdate3RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $Entrada3";

        $ExeQrUpdate1Registro = mysql_query($QueryUpdate1Registro);
        $ExeQrUpdate2Registro = mysql_query($QueryUpdate2Registro);
        $ExeQrUpdate3Registro = mysql_query($QueryUpdate3Registro);
        $ExeQrUpdate1RegistroProf = mysql_query($QueryUpdate1RegistroProf);
        $ExeQrUpdate2RegistroProf = mysql_query($QueryUpdate2RegistroProf);
        $ExeQrUpdate3RegistroProf = mysql_query($QueryUpdate3RegistroProf);
        
        echo $compartilharAula;
        if ($compartilharAula = 1) {
            $ExeQrUpdate1RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $horarioEntrada");
            $ExeQrUpdate2RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $Entrada2");
            $ExeQrUpdate3RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $Entrada3");
            $ExeQrUpdate1RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $horarioEntrada");
            $ExeQrUpdate2RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $Entrada2");
            $ExeQrUpdate3RegistroCompartilharMAteria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $Entrada3");
            echo "Aula registrada para compartilhar com outros alunos<br>";
        }

        if ($ExeQrUpdate1Registro && $ExeQrUpdate2Registro && $ExeQrUpdate3Registro) {
            echo "Registro do horário" . $horarioEntrada . "atualizado! <br>";
            echo "Registro do horário" . $Entrada2 . "atualizado! <br>";
            echo "Registro do horário" . $Entrada3 . "atualizado! <br>";
            echo "<b>Inserindo registro para acompanhamento na agenda... </b><br>";
        } else {
            echo mysql_error();
        }

        break;
    case 2:
        $Entrada2 = $horarioEntrada + 0.5;
        $Entrada3 = $Entrada2 + 0.5;
        $Entrada4 = $Entrada3 + 0.5;
        $QueryUpdate1Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $horarioEntrada";
        $QueryUpdate2Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $Entrada2";
        $QueryUpdate3Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $Entrada3";
        $QueryUpdate4Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $Entrada4";
        $QueryUpdate1RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $horarioEntrada";
        $QueryUpdate2RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $Entrada2";
        $QueryUpdate3RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $Entrada3";
        $QueryUpdate4RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $Entrada4";

        $ExeQrUpdate1Registro = mysql_query($QueryUpdate1Registro);
        $ExeQrUpdate2Registro = mysql_query($QueryUpdate2Registro);
        $ExeQrUpdate3Registro = mysql_query($QueryUpdate3Registro);
        $ExeQrUpdate4Registro = mysql_query($QueryUpdate4Registro);
        $ExeQrUpdate1RegistroProf = mysql_query($QueryUpdate1RegistroProf);
        $ExeQrUpdate2RegistroProf = mysql_query($QueryUpdate2RegistroProf);
        $ExeQrUpdate3RegistroProf = mysql_query($QueryUpdate3RegistroProf);
        $ExeQrUpdate4RegistroProf = mysql_query($QueryUpdate4RegistroProf);
        echo $compartilharAula;
        if ($compartilharAula = 1) {
            $ExeQrUpdate1RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $horarioEntrada");
            $ExeQrUpdate2RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $Entrada2");
            $ExeQrUpdate3RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $Entrada3");
            $ExeQrUpdate4RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $Entrada4");
            $ExeQrUpdate1RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $horarioEntrada");
            $ExeQrUpdate2RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $Entrada2");
            $ExeQrUpdate3RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $Entrada3");
            $ExeQrUpdate4RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $Entrada4");
            echo "Aula registrada para compartilhar com outros alunos<br>";
        }

        if ($ExeQrUpdate1Registro && $ExeQrUpdate2Registro && $ExeQrUpdate3Registro && $ExeQrUpdate4Registro) {
            echo "Registro do horário" . $horarioEntrada . "atualizado! <br>";
            echo "Registro do horário" . $Entrada2 . "atualizado! <br>";
            echo "Registro do horário" . $Entrada3 . "atualizado! <br>";
            echo "Registro do horário" . $Entrada4 . "atualizado! <br>";
            echo "<b>Inserindo registro para acompanhamento na agenda... </b><br>";
        } else {
            echo mysql_error();
        }

        break;
    case 2.5:
        $Entrada2 = $horarioEntrada + 0.5;
        $Entrada3 = $Entrada2 + 0.5;
        $Entrada4 = $Entrada3 + 0.5;
        $Entrada5 = $Entrada4 + 0.5;
        $QueryUpdate1Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $horarioEntrada";
        $QueryUpdate2Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $Entrada2";
        $QueryUpdate3Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $Entrada3";
        $QueryUpdate4Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $Entrada4";
        $QueryUpdate5Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $Entrada5";
        $QueryUpdate1RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $horarioEntrada";
        $QueryUpdate2RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $Entrada2";
        $QueryUpdate3RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $Entrada3";
        $QueryUpdate4RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $Entrada4";
        $QueryUpdate5RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $Entrada5";

        $ExeQrUpdate1Registro = mysql_query($QueryUpdate1Registro);
        $ExeQrUpdate2Registro = mysql_query($QueryUpdate2Registro);
        $ExeQrUpdate3Registro = mysql_query($QueryUpdate3Registro);
        $ExeQrUpdate4Registro = mysql_query($QueryUpdate4Registro);
        $ExeQrUpdate5Registro = mysql_query($QueryUpdate5Registro);
        $ExeQrUpdate1RegistroProf = mysql_query($QueryUpdate1RegistroProf);
        $ExeQrUpdate2RegistroProf = mysql_query($QueryUpdate2RegistroProf);
        $ExeQrUpdate3RegistroProf = mysql_query($QueryUpdate3RegistroProf);
        $ExeQrUpdate4RegistroProf = mysql_query($QueryUpdate4RegistroProf);
        $ExeQrUpdate5RegistroProf = mysql_query($QueryUpdate5RegistroProf);
        
        echo $compartilharAula;
        if ($compartilharAula = 1) {
            $ExeQrUpdate1RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $horarioEntrada");
            $ExeQrUpdate2RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $Entrada2");
            $ExeQrUpdate3RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $Entrada3");
            $ExeQrUpdate4RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $Entrada4");
            $ExeQrUpdate5RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $Entrada5");
            $ExeQrUpdate1RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $horarioEntrada");
            $ExeQrUpdate2RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $Entrada2");
            $ExeQrUpdate3RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $Entrada3");
            $ExeQrUpdate4RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $Entrada4");
            $ExeQrUpdate5RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $Entrada5");
            echo "Aula registrada para compartilhar com outros alunos<br>";
        }

        if ($ExeQrUpdate1Registro && $ExeQrUpdate2Registro && $ExeQrUpdate3Registro && $ExeQrUpdate4Registro && $ExeQrUpdate5Registro) {
            echo "Registro do horário" . $horarioEntrada . "atualizado! <br>";
            echo "Registro do horário" . $Entrada2 . "atualizado! <br>";
            echo "Registro do horário" . $Entrada3 . "atualizado! <br>";
            echo "Registro do horário" . $Entrada4 . "atualizado! <br>";
            echo "Registro do horário" . $Entrada5 . "atualizado! <br>";
            echo "<b>Inserindo registro para acompanhamento na agenda... </b><br>";
        } else {
            echo mysql_error();
        }

        break;
    case 3:
        $Entrada2 = $horarioEntrada + 0.5;
        $Entrada3 = $Entrada2 + 0.5;
        $Entrada4 = $Entrada3 + 0.5;
        $Entrada5 = $Entrada4 + 0.5;
        $Entrada6 = $Entrada5 + 0.5;
        $QueryUpdate1Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $horarioEntrada";
        $QueryUpdate2Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $Entrada2";
        $QueryUpdate3Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $Entrada3";
        $QueryUpdate4Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $Entrada4";
        $QueryUpdate5Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $Entrada5";
        $QueryUpdate6Registro = "UPDATE $salaDeAula SET status = 1 WHERE entrada = $Entrada6";
        $QueryUpdate1RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $horarioEntrada";
        $QueryUpdate2RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $Entrada2";
        $QueryUpdate3RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $Entrada3";
        $QueryUpdate4RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $Entrada4";
        $QueryUpdate5RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $Entrada5";
        $QueryUpdate6RegistroProf = "UPDATE $salaDeAula SET professor = '$professor' WHERE entrada = $Entrada6";

        $ExeQrUpdate1Registro = mysql_query($QueryUpdate1Registro);
        $ExeQrUpdate2Registro = mysql_query($QueryUpdate2Registro);
        $ExeQrUpdate3Registro = mysql_query($QueryUpdate3Registro);
        $ExeQrUpdate4Registro = mysql_query($QueryUpdate4Registro);
        $ExeQrUpdate5Registro = mysql_query($QueryUpdate5Registro);
        $ExeQrUpdate6Registro = mysql_query($QueryUpdate6Registro);
        $ExeQrUpdate1RegistroProf = mysql_query($QueryUpdate1RegistroProf);
        $ExeQrUpdate2RegistroProf = mysql_query($QueryUpdate2RegistroProf);
        $ExeQrUpdate3RegistroProf = mysql_query($QueryUpdate3RegistroProf);
        $ExeQrUpdate4RegistroProf = mysql_query($QueryUpdate4RegistroProf);
        $ExeQrUpdate5RegistroProf = mysql_query($QueryUpdate5RegistroProf);
        $ExeQrUpdate6RegistroProf = mysql_query($QueryUpdate6RegistroProf);
        echo $compartilharAula;
        if ($compartilharAula = 1) {
            $ExeQrUpdate1RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $horarioEntrada");
            $ExeQrUpdate2RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $Entrada2");
            $ExeQrUpdate3RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $Entrada3");
            $ExeQrUpdate4RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $Entrada4");
            $ExeQrUpdate5RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $Entrada5");
            $ExeQrUpdate6RegistroCompartilhar = mysql_query("UPDATE $salaDeAula SET compartilhada = 1 WHERE entrada = $Entrada6");
            $ExeQrUpdate1RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $horarioEntrada");
            $ExeQrUpdate2RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $Entrada2");
            $ExeQrUpdate3RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $Entrada3");
            $ExeQrUpdate4RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $Entrada4");
            $ExeQrUpdate5RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $Entrada5");
            $ExeQrUpdate6RegistroCompartilharMateria = mysql_query("UPDATE $salaDeAula SET materia = '$materiaAula' WHERE entrada = $Entrada6");
            echo "Aula registrada para compartilhar com outros alunos<br>";
        }

        if ($ExeQrUpdate1Registro && $ExeQrUpdate2Registro && $ExeQrUpdate3Registro && $ExeQrUpdate4Registro && $ExeQrUpdate5Registro && $ExeQrUpdate6Registro) {
            echo "Registro do horário" . $horarioEntrada . "atualizado! <br>";
            echo "Registro do horário" . $Entrada2 . "atualizado! <br>";
            echo "Registro do horário" . $Entrada3 . "atualizado! <br>";
            echo "Registro do horário" . $Entrada4 . "atualizado! <br>";
            echo "Registro do horário" . $Entrada5 . "atualizado! <br>";
            echo "Registro do horário" . $Entrada6 . "atualizado! <br>";
            echo "<b>Inserindo registro para acompanhamento na agenda... </b><br>";
        } else {
            echo mysql_error();
        }

        break;
}
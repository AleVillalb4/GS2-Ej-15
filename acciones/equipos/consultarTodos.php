<?php

header('Content-Type: application/json');

require_once '../../modelo/equipo.php';
require_once '../../modelo/jugador.php';
require_once '../equipos/responses/consultarTodosResponse.php';

$jug= new Jugador();
$jug->Nombre='Pedro Gonzalez';
$jug->Posicion='Delantero';
$jug->Debut='17 de agosto de 2005';
$jug->Goles = 10;

$jug1= new Jugador();
$jug1->Nombre='Daniel Sanchez';
$jug1->Posicion='Delantero';
$jug1->Debut='16 de diciembre de 2010';
$jug1->Goles = 0;

$jug2= new Jugador();
$jug2->Nombre='Juan Perez';
$jug2->Posicion='Defensor';
$jug2->Debut='17 de setiembre de 2019';
$jug2->Goles = 10;


$equi = new Equipo(); 
$equi-> Id= 1;
$equi->Nombre='Equipo 1';
$equi->ListJugadores[]=$jug;
$equi->ListJugadores[]=$jug1;
$equi->ListJugadores[]=$jug2;
$equi->Fundacion='3 de noviembre de 1903 (118 años)';
$equi->Presidente='Javier Perez';



$jug3= new Jugador();
$jug3->Nombre='Ignacio gonzalez';
$jug3->Posicion='Arquero';
$jug3->Debut='17 de enero de 2020';
$jug3->Goles = 1;

$jug4= new Jugador();
$jug4->Nombre='Ariel Cosentino';
$jug4->Posicion='Mediocampista';
$jug4->Debut='16 de diciembre de 2001';
$jug4->Goles = 2;

$jug5= new Jugador();
$jug5->Nombre='Diego Dominguez';
$jug5->Posicion='Defensor';
$jug5->Debut='15 de febrero de 2018';
$jug5->Goles = 5;

$jug6= new Jugador();
$jug6->Nombre='Gustavo Santos';
$jug6->Posicion='Delantero';
$jug6->Debut='16 de diciembre de 2009';
$jug6->Goles = 3;

$equi2 = new Equipo(); 
$equi2-> Id= 2;
$equi2->Nombre='Equipo 2';
$equi2->ListJugadores = array();
$equi2->Fundacion= '5 de abril de 1923';
$equi2->Presidente= 'Ignacio Quinteros';
$equi2->ListJugadores[]=$jug3;
$equi2->ListJugadores[]=$jug4;
$equi2->ListJugadores[]=$jug5;
$equi2->ListJugadores[]=$jug6;

$resp = new ConsultarTodosResponse();
$resp->ListEquipos[]=$equi;
$resp->ListEquipos[]=$equi2;


echo json_encode($resp);
<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/SportNetv1.0/direccion.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/SportNetv1.0/DAO/escuelaDAO.php");
/**
* 
*/



function buscarCoordenadas(direccion $obj){

        	$direccion="";
        	$direccion = $obj->getCalle();
        	$direccion .= $obj->getNumero();
        	$direccion .= ' ' ;
        	$direccion .= $obj->getComuna();

                $aux= urlencode($direccion);
                 
                $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$aux.'&sensor=false');
                 
                $output= json_decode($geocode);
                 
                $lat = $output->results[0]->geometry->location->lat;
                $long = $output->results[0]->geometry->location->lng;

                $coordenadas = $lat;
                $coordenadas .=' ';
                $coordenadas .=$long;

                return $coordenadas;


	}

function calcularDistacia(){

                $html = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?origins=Santa+Isabel+6150+cerro+navia&destinations=Nueva+Extremadura+5270+Quinta+Normal&mode=driving&language=es-ES&key=AIzaSyBb1wFH0HCVnnBa0xIA5vP2HZtKrjnya1w");

                $json = json_decode($html,true);

                $distancia = $json['rows'][0]['elements'][0]['distance']['value'];

                return $distancia;

        }


function buscarEscuela($espe){

                $especialidad ="";

                if ($espe == "Futbol") {
                        $especialidad = "Futbol";
                }
                elseif($espe == "Taekwondo"){
                        $especialidad = "Taekwondo";
                }
                elseif($espe == "Natacion"){
                        $especialidad = "Natación";
                }
                elseif($espe == "Tenis"){
                        $especialidad = "tenis";
                }

                
       
                $escuela = new escuelaDAO();

                $a = $escuela->selectEscuela($especialidad);

                return $a;


        }













?>
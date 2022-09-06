<?php
/**
 * Obtiene el arreglo de desarroladores
 */
function getDevelopers()
{
    $d1 = new stdClass();
    $d1->id = "lucio";
    $d1->name = "Lucio ingargiola";
    $d1->email = "lucioingargiola@hotmail.com";
    $d1->role = "Actual estudiante de Desarrollo de Aplicaciones Informaticas ";

    $developers = [$d1];
    return  $developers;
}
/**
 * Obtengo desarrolladores por id
 */

 function getDevelopersById($id){
    $developers = getDevelopers();
        foreach($developers as $developer){
            if($id == $developer -> id)
            return $developer;
        }
        return null; 
 }
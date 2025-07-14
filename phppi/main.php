<?php
//connect to db
function connect_db_mysqli($host, $username, $password, $database){
    $mysqli = mysqli_connect($host, $username, $password, $database);
    return $mysqli;
}
//print data in arrays (could be overrided by print_r) uses auto <pre> recemmeded for html envirement
function printdata($Data){
    $d = "<pre>" . $Data . "</pre>";
    return print_r($d, true);
}
function echodate($type)
{
    //could be Y or Y/M or Y/M/D as long as php date command supports
    $r = date($type);
    return $r;
}
function datetimezone($input){
    date_default_timezone_set($input);
}
// for bootstrap auto include(with link)
function getbootstrap(){
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">';
    echo '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>';
    echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>';
}
//redirect usage
function redirect($location){
    header("Location: $location");
}
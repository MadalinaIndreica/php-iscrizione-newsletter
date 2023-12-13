<?php 
session_start();

$message = "";
$useremail ="";



function emailValidator($useremail){

    return filter_var($useremail, FILTER_VALIDATE_EMAIL);

}
if (isset($_POST['email'])) {
    $useremail = $_POST['email'];
    if (empty($useremail)) {
        $message = "Inserisci un indirizzo email!";
    } elseif (!emailValidator($useremail)) {
        $message = "Indirizzo email non valido!";
    } else {
        $message = "Indirizzo email valido";
        
    }
}

?>
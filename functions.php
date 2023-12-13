<?php 
session_start();

$message = "";
$useremail ="";
$alert = "";



function emailValidator($useremail){

    return filter_var($useremail, FILTER_VALIDATE_EMAIL);

}
if (isset($_POST['email'])) {
    $useremail = $_POST['email'];
    if (empty($useremail)) {
        $message = "Inserisci un indirizzo email!";
        $alert = "alert-danger";
    } elseif (!emailValidator($useremail)) {
        $message = "Indirizzo email non valido!";
        $alert = "alert-danger";
    } else {
        $message = "Indirizzo email valido";
        $alert = "alert-success";
        
    }
}

?>
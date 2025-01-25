<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $to = "your-email@example.com"; 
    $subject = "Ny melding fra kontakt skjema";
    $body = "Navn: $name\nE-post: $email\nMelding:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Takk for meldingen! Vi vil kontakte deg snart.";
    } else {
        echo "Noe gikk galt. Vennligst prøv igjen.";
    }
}
?>

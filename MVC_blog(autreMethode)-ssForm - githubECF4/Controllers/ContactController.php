<?php

namespace App\Controllers;

class Contact extends Controller 
{
    // Affichage de la vue contact
    public function index() 
    {
        $this->render("home/contact");
    }

    // Méthode pour l'envoi du mail 
    public function send() 
    {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $to = "marmontel.amandine@hotmail.fr";
    $subject = "Nouveau message de $name";
    $headers = "From: $email";

    $body = "Nom: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        $this->redirectedToRoute('contact', 'index', 'success');
    } else {
        $this->redirectedToRoute('contact', 'index', 'error');
    }
}
}
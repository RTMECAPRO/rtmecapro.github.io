<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $service = $_POST["service"];
    $date = $_POST["date"];
    $message = $_POST["message"];

    // Configuration de l'email
    $destinataire = "rtmecapro@outlook.fr"; // Remplacez par votre adresse email
    $sujet = "Nouvelle réservation de rendez-vous";
    $contenu = "Nom: $nom\n";
    $contenu .= "Email: $email\n";
    $contenu .= "Téléphone: $telephone\n";
    $contenu .= "Service: $service\n";
    $contenu .= "Date de rendez-vous: $date\n";
    $contenu .= "Message: $message\n";

    // Envoi de l'email
    $headers = "From: $email \r\n";
    mail($destinataire, $sujet, $contenu, $headers);

    // Redirection vers une page de confirmation
    header("Location: confirmation.html");
    exit;
} else {
    // Si le formulaire n'a pas été soumis, rediriger vers une autre page par exemple
    header("Location: reservation.html");
    exit;
}
?>


<?php

namespace App\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function view($viewname)
{
    return require_once(__DIR__."/../Views/".$viewname.".php");
}


class PageController
{
    public static function home()
    {
        return view('home');
    }

    public static function contact()
    {
        return view('contact');
    }

    public static function about()
    {
        return view('about');
    }

    public static function partnership()
    {
        return view('partenaire');
    }

    public static function techno()
    {
        return view('techno');
    }

    public static function tri()
    {
        return view('tri');
    }

    public static function camion()
    {
        return view('camion');
    }

    public static function notFound()
    {
        return view('pageNotFound');
    }

    public static function impact()
    {
        return view('impact');
    }

    public static function environmentImpact()
    {
        return view('impact-enviro');
    }

    public static function socialImpact()
    {
        return view('impact-social');
    }

    public static function economicImpact()
    {
        return view('impact-eco');
    }


    public static function sendContactMail()
    {
        header('Content-Type: application/json');

        // Initialisation de la réponse JSON
        $response = [
            'status' => 'error',
            'message' => 'Requête invalide.'
        ];

        // Collecte des données du formulaire
        $nom = htmlspecialchars(trim($_POST['fullname'] ?? ''));
        $email = htmlspecialchars(trim($_POST['email'] ?? ''));
        $message = htmlspecialchars(trim($_POST['message'] ?? ''));

        // Vérification des champs
        if (empty($nom) || empty($email) || empty($message)) {
            $response['message'] = 'Veuillez remplir tous les champs du formulaire.';
            echo json_encode($response);
            exit();
        }

        // Validation de l'adresse e-mail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response['message'] = 'L\'adresse e-mail n\'est pas valide.';
            echo json_encode($response);
            exit();
        }

        $mail = new PHPMailer(true);
        try {
            // Paramètres du serveur SMTP pour votre hébergement
            $mail->isSMTP();
            $mail->Host       = 'mail.alexcode.online';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'noreply@alexcode.online';
            $mail->Password   = '.M@;z47vT?i4dO3G'; // Remplacez par le vrai mot de passe
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Notez SMTPS car le port est 465
            $mail->Port       = 465;
            $mail->CharSet = 'UTF-8';

            // Expéditeur et adresse de réponse
            $mail->setFrom('noreply@alexcode.online', 'Formulaire Alexcode'); // Expéditeur : utiliser la même adresse que le Username
            $mail->addReplyTo($email, $nom);
            
            // Destinataire
            $mail->addAddress('contact@alexcode.online');

            // Contenu de l'e-mail
            $mail->isHTML(false);
            $mail->Subject = "Nouvelle demande de contact de la part de $nom";
            $mail->Body    = "Nom: $nom\nEmail: $email\n\nMessage:\n$message";

            $mail->send();
            
            // Envoi réussi
            $response['status'] = 'success';
            $response['message'] = 'Votre message a été envoyé avec succès !';
        } catch (Exception $e) {
            // Envoi échoué
            $response['message'] = "Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";
        }

        // Envoi de la réponse JSON au client (JavaScript)
        echo json_encode($response);
        exit();
    }
}



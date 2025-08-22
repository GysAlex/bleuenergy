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

    public static function project()
    {
        return view('projet');
    }

    public static function about()
    {
        return view('about');
    }

    public static function usine()
    {
        return view('usine');
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

        // Collecte des données du formulaire corrigé
        $nom = htmlspecialchars(trim($_POST['name'] ?? '') . ' ' . trim($_POST['surname'] ?? ''));
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
        // Paramètres du serveur SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'fokoalex5@gmail.com';
        $mail->Password   = 'password';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->CharSet = 'UTF-8';

        // Destinataires
        $mail->setFrom('fokoalex5@gmail.com', 'Formulaire BleueEnergy');
        $mail->addAddress('fokoalex5@gmail.com'); //Test
        // $mail->addAddress('da@bleueenergy.com');
        $mail->addReplyTo($email, $nom);

        // Activer le format HTML
        $mail->isHTML(true);

        // Création du corps de l'e-mail en HTML et Markdown
        $htmlBody = "
        <div style='font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: auto; border: 1px solid #ddd; border-radius: 8px; overflow: hidden;'>
            <div style='background-color: #004d40; color: white; padding: 20px; text-align: center;'>
                <h2 style='margin: 0;'>Nouvelle Demande de Contact</h2>
            </div>
            <div style='padding: 20px;'>
                <p>Bonjour,</p>
                <p>Vous avez reçu une nouvelle demande de contact via votre site web BleueEnergy.</p>
                
                <table style='width: 100%; border-collapse: collapse; margin-top: 20px;'>
                    <tr>
                        <td style='padding: 10px; border: 1px solid #ddd; background-color: #f2f2f2; width: 30%; font-weight: bold;'>Nom</td>
                        <td style='padding: 10px; border: 1px solid #ddd;'>{$nom}</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px; border: 1px solid #ddd; background-color: #f2f2f2; font-weight: bold;'>E-mail</td>
                        <td style='padding: 10px; border: 1px solid #ddd;'><a href='mailto:{$email}'>{$email}</a></td>
                    </tr>
                </table>

                <div style='margin-top: 20px;'>
                    <p style='font-weight: bold; margin-bottom: 5px;'>Message :</p>
                    <div style='border: 1px solid #ddd; padding: 15px; border-radius: 5px; background-color: #fafafa;'>
                        <p style='margin: 0;'>{$message}</p>
                    </div>
                </div>
                
                <p style='margin-top: 30px; font-size: 12px; color: #888;'>Ceci est un e-mail automatique, merci de ne pas y répondre directement. Utilisez le lien de réponse pour contacter l'expéditeur.</p>
            </div>
            <div style='background-color: #004d40; color: white; padding: 10px; text-align: center; font-size: 12px;'>
                &copy; 2025 BleueEnergy. Tous droits réservés.
            </div>
        </div>";

        // Définir le sujet et le corps
        $mail->Subject = "Nouvelle demande de contact de la part de {$nom}";
        $mail->Body    = $htmlBody;

        $mail->send();
        
        // Envoi réussi
        $response['status'] = 'success';
        $response['message'] = 'Votre message a été envoyé avec succès !';

        }catch (Exception $e) {
            // Envoi échoué
            $response['message'] = "Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";
        }

        // Envoi de la réponse JSON au client (JavaScript)
        echo json_encode($response);
        exit();
    }
}



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


    public static function contactSend()
    {
        $response = [];

        try {
            $nom = trim($_POST['nom'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $telephone = trim($_POST['telephone'] ?? '');
            $sujet = trim($_POST['sujet'] ?? '');
            $message = trim($_POST['message'] ?? '');

            if (empty($nom) || empty($email) || empty($sujet) || empty($message)) {
                throw new Exception("Veuillez remplir tous les champs obligatoires.");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception("L'adresse e-mail n'est pas valide.");
            }

            // 2. Configuration et envoi de l'e-mail avec PHPMailer
            $mail = new PHPMailer(true);

            // Paramètres du serveur SMTP
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'fokoalex5@gmail.com'; // Votre adresse Gmail
            $mail->Password   = 'TestPassword'; // Votre mot de passe d'application
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;
            $mail->CharSet    = 'UTF-8';

            // Destinataires et expéditeur
            $mail->setFrom('fokoalex5@gmail.com', 'Formulaire BleueEnergy');
            $mail->addAddress('fokoalex5@gmail.com'); // Destinataire de l'e-mail
            $mail->addReplyTo($email, $nom);

            // Contenu de l'e-mail (au format HTML, comme défini précédemment)
            $mail->isHTML(true);
            $mail->Subject = "Nouvelle demande de contact: " . ucfirst($sujet);
            
            // Le corps HTML de l'e-mail
            $htmlBody = "
            <div style='font-family: sans-serif; line-height: 1.6; color: #4b5563; max-width: 600px; margin: 20px auto; border: 1px solid #e5e7eb; border-radius: 5px; overflow: hidden; background: linear-gradient(45deg, #F9FAFB, #EFF6FF);'>
                <div style='background: linear-gradient(90deg, #166534cc, #036aa1cc); color: white; padding: 25px; text-align: center;'>
                    <h2 style='margin: 0; font-size: 28px;'>Nouveau Message</h2>
                </div>
                <div style='padding: 30px;'>
                    <p style='font-size: 16px;'>Bonjour, M. Biheng</p>
                    <p style='font-size: 16px;'>Vous avez reçu un nouveau message via le formulaire de contact de BleueEnergy.</p>

                    <div style='margin-top: 25px; border: 1px solid #d1d5db; border-radius: 3px; background-color: white; padding: 15px;'>
                        <h3 style='font-size: 18px; color: #166534; margin-top: 0;'>Détails de l'expéditeur :</h3>
                        <p style='margin-bottom: 8px;'><strong style='color: #4b5563;'>Nom :</strong> {$nom}</p>
                        <p style='margin-bottom: 8px;'><strong style='color: #4b5563;'>E-mail :</strong> <a href='mailto:{$email}' style='color: #036aa1; text-decoration: none;'>{$email}</a></p>
                        <p style='margin-bottom: 8px;'><strong style='color: #4b5563;'>Téléphone :</strong> {$telephone}</p>
                        <p style='margin-bottom: 8px;'><strong style='color: #4b5563;'>Sujet :</strong> " . ucfirst($sujet) . "</p>
                    </div>

                    <div style='margin-top: 25px; border: 1px solid #d1d5db; border-radius: 3px; background-color: white; padding: 15px;'>
                        <h3 style='font-size: 18px; color: #166534; margin-top: 0;'>Message :</h3>
                        <p style='margin-top: 10px; white-space: pre-line;'>{$message}</p>
                    </div>

                    <p style='margin-top: 35px; font-size: 12px; color: #9ca3af;'>Ceci est un e-mail automatique, veuillez répondre directement à l'expéditeur en utilisant l'adresse e-mail fournie.</p>
                </div>
                <div style='background-color: #f3f4f6; color: #6b7280; padding: 15px; text-align: center; font-size: 12px; border-top: 1px solid #e5e7eb;'>
                    &copy; 2025 BleueEnergy. Tous droits réservés.
                </div>
            </div>";

            $mail->Body = $htmlBody;
            $mail->send();

            // 3. Réponse en cas de succès
            $response = ['status' => 'success', 'message' => 'Votre message a été envoyé avec succès !'];

        } catch (Exception $e) {
            // 4. Réponse en cas d'erreur
            $response = ['status' => 'error', 'message' => "Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}"];
        } catch (Exception $e) {
            // Gestion des erreurs de validation
            $response = ['status' => 'error', 'message' => $e->getMessage()];
        }

        echo json_encode($response);
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
        $mail->Password   = 'TestPassword';
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
        <div style='font-family: sans-serif; line-height: 1.6; color: #4b5563; max-width: 600px; margin: 20px auto; border: 1px solid #e5e7eb; border-radius: 5px; overflow: hidden; background: linear-gradient(45deg, #F9FAFB, #EFF6FF);'>
        <div style='background: linear-gradient(90deg, #166534cc, #036aa1cc); color: white; padding: 25px; text-align: center;'>
            <h2 style='margin: 0; font-size: 28px;'>Nouveau Message</h2>
        </div>
        <div style='padding: 30px;'>
            <p style='font-size: 16px;'> Bonjour, M. Biheng </p>
            <p style='font-size: 16px;'>Vous avez reçu un nouveau message via le formulaire de contact de BleueEnergy.</p>

            <div style='margin-top: 25px; border: 1px solid #d1d5db; border-radius: 3px; background-color: white; padding: 15px;'>
                <h3 style='font-size: 18px; color: #166534; margin-top: 0;'>Détails de l'expéditeur :</h3>
                <p style='margin-bottom: 8px;'><strong style='color: #4b5563;'>Nom :</strong> {$nom}</p>
                <p style='margin-bottom: 8px;'><strong style='color: #4b5563;'>E-mail :</strong> <a href='mailto:{$email}' style='color: #036aa1; text-decoration: none;'>{$email}</a></p>
            </div>

            <div style='margin-top: 25px; border: 1px solid #d1d5db; border-radius: 3px; background-color: white; padding: 15px;'>
                <h3 style='font-size: 18px; color: #166534; margin-top: 0;'>Message :</h3>
                <p style='margin-top: 10px; white-space: pre-line;'>{$message}</p>
            </div>

            <p style='margin-top: 35px; font-size: 12px; color: #9ca3af;'>Ceci est un e-mail automatique, veuillez répondre directement à l'expéditeur en utilisant l'adresse e-mail fournie.</p>
        </div>
        <div style='background-color: #f3f4f6; color: #6b7280; padding: 15px; text-align: center; font-size: 12px; border-top: 1px solid #e5e7eb;'>
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



<?php

namespace App\Http\Controllers\Auth;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class AuthMailController extends Controller
{
        public $mail;
        public $code;
 

        public function initvalues($email, $code)
        {
          //destiny
            
            $this->code =  $code;   


            //mail config
            $this->mail = new PHPMailer();
            $this->mail->CharSet = 'UTF-8';
            $this->mail->isSMTP();
            $this->mail->Host = 'smtp.gmail.com';
            $this->mail->SMTPAuth = true;
            $this->mail->Username = 'albrt0409@gmail.com';
            $this->mail->Password = 'xnkpourjyycpqxla';
            $this->mail->SMTPSecure = 'tls';
            $this->mail->Port = 587;
            $this->mail->isHTML(true);
            $this->mail->setFrom('albrt0409@gmail.com', 'albert');
            $this->mail->addAddress($email, 'Destino');
        }

        public function bodymessver()
        {
            $user = User::find(session('sign_id'));
            $htmlbodymess = '
        
                        <!DOCTYPE html>
                        <html lang="es">
                        <head>
                        <meta charset="UTF-8" />
                        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                        <title>Bienvenido</title>
                        </head>
                        <body style="margin:0; padding:0; font-family:Arial, sans-serif; background-color:#f4f4f4;">
                        <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f4f4; padding:20px 0;">
                            <tr>
                            <td align="center">
                                <table width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 8px rgba(0,0,0,0.1);">
                                <!-- Encabezado con imagen -->
                                <tr>
                                    <td style="background-color:#54b4ff; padding:20px; text-align:center;">
                                    <img src="https://cdn-icons-png.flaticon.com/512/8865/8865871.png" alt="Bienvenido" height="100" style="border-radius:50%;"/>
                                    </td>
                                </tr>
                                <!-- Contenido principal -->
                                <tr>
                                    <td style="padding:30px; text-align:center; color:#333;">
                                    <h1 style="margin-top:0; color:#54b4ff;">¡Bienvenido a Chordhub '.$user->name.'!</h1>
                                    <p style="font-size:16px; line-height:1.5;">Gracias por unirte a nosotros. Estamos emocionados de tenerte aquí. Explora nuestras funciones y mantente atento a las novedades.
                                    <br>
                                    Ten en cuenta que este código únicamente es válido durante 60 minutos. En caso de que no logres completar el registro en el tiempo permitido deberás registrarte nuevamente!
                                    </p>
                                     <p style="font-size:16px; line-height:1.5;"><b>Tú código de verificación: </b>'. $this->code .'</p>

                                                    
                                           <a href="http://127.0.0.1:8000/verificacion-usuario/'.session('session_uid').'"><button name="submitemail">Verifica tu email</button></a>
 
                                    
                                    </td>
                                </tr>
                                <!-- Pie de página -->
                                <tr>
                                    <td style="background-color:#f1f1f1; padding:20px; text-align:center; font-size:12px; color:#777;">
                                    <p style="margin:0;">¿Tienes preguntas? Contáctanos en <a href="mailto:albrt0409@gmail.com" style="color:#4CAF50; text-decoration:none;">albrt0409@gmail.com</a></p>
                                    <p style="margin:10px 0 0;">&copy; 2025 Chordhub. Todos los derechos reservados.</p>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            </tr>
                        </table>
                        </body>
                        </html>
                        ';
                    
                return $htmlbodymess;
        }

        public function bodymessrestore()
        {
            $htmlbodymessrestore = '
        
                        <!DOCTYPE html>
                        <html lang="es">
                        <head>
                        <meta charset="UTF-8" />
                        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                        <title>Bienvenido</title>
                        </head>
                        <body style="margin:0; padding:0; font-family:Arial, sans-serif; background-color:#f4f4f4;">
                        <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f4f4; padding:20px 0;">
                            <tr>
                            <td align="center">
                                <table width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 8px rgba(0,0,0,0.1);">
                                <!-- Encabezado con imagen -->
                                <tr>
                                    <td style="background-color:#54b4ff; padding:20px; text-align:center;">
                                    <img src="https://cdn-icons-png.flaticon.com/512/8865/8865871.png" alt="Bienvenido" height="100" style="border-radius:50%;"/>
                                    </td>
                                </tr>
                                <!-- Contenido principal -->
                                <tr>
                                    <td style="padding:30px; text-align:center; color:#333;">
                                    <h1 style="margin-top:0; color:#54b4ff;">¡Proceso de reestablecimiento de contraseña!</h1>
                                    <p style="font-size:16px; line-height:1.5;">Parece que deseas recuperar tú contraseña, ingresa al link e introduce el código que te damos, luego podrás cambiar tu contraseña!.</p>
                                     <p style="font-size:16px; line-height:1.5;"><b>Tú código de verificación: </b>'. $this->code .'</p>

                                     
                                           <a href="http://127.0.0.1:8000/restaurar/codigo"><button name="submitemail">Verifica tu email</button></a>
                                  
                                    </td>
                                </tr>
                                <!-- Pie de página -->
                                <tr>
                                    <td style="background-color:#f1f1f1; padding:20px; text-align:center; font-size:12px; color:#777;">
                                    <p style="margin:0;">¿Tienes preguntas? Contáctanos en <a href="mailto:albrt0409@gmail.com" style="color:#4CAF50; text-decoration:none;">albrt0409@gmail.com</a></p>
                                    <p style="margin:10px 0 0;">&copy; 2025 Chordhub. Todos los derechos reservados.</p>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            </tr>
                        </table>
                        </body>
                        </html>
                        ';
                    
                return $htmlbodymessrestore;
        }
    
        public function sendVerificationMail()
        {
             $this->mail->Subject = 'Código de verificación de Chordhub';
             $this->mail->Body = $this->bodymessver();
           
             if ($this->mail->send()) 
             {
                return true;
             } 
             else 
             {
                return false;
             }

        }

        public function sendRestoreMail()
        {
             $this->mail->Subject = 'Código de restauración de contraseña de Chordhub';
             $this->mail->Body = $this->bodymessrestore();
           
             if ($this->mail->send()) 
             {
                return true;
             } 
             else 
             {
                return false;
             }
        }    //
}
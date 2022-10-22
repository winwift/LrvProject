<?php

namespace App\Http\Controllers;



use App\Mail\CustomerMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Customer;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    public function sendMail(Request $request) 
    {

    $name = $request->name;
    $email = $request->email; 
    $phone = $request->phone; 
    $message = $request->message;   

    $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
    ]);


     
    

    require '../vendor/autoload.php';

    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'lz.property.maintenance@gmail.com';                     //SMTP username
    $mail->Password   = 'wrcziayzesxeagne';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addReplyTo($email, $name);
    $mail->addAddress('lz.property.maintenance@gmail.com');               //Name is optional


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $email .'  Phone:'.$phone;
    $mail->Body    = "Name: $name <br>Phone: $phone<br> Email: $email<br>Message: $message";

    $mail->send();
    return redirect(url()->previous() .'#contact')
            ->with('success', 'Email has been send!')
            ->withInput();
} catch (Exception $e) {
    return redirect(url()->previous() .'#contact')
            ->with('error', "Message could not be sent. Mailer Error: {$mail->ErrorInfo}")
            ->withInput();
}
}
    public function is_connected()
{
    $connected = @fsockopen("www.example.com", 80); 
                                        //website, port  (try 80 or 443)
    if ($connected){
        $is_conn = true; //action when connected
        fclose($connected);
    }else{
        $is_conn = false; //action in connection failure
    }
    return $is_conn;

}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Session;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {

        $subject = $request->input('name') . " mengirim pesan dari Blog PocongLari.";
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('messages');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
            // $mail->SMTPDebug = 1;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'j.jordi1510@gmail.com';                 // SMTP username
            $mail->Password = '@Poconglari15';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            // Siapa yang mengirim email
            $mail->setFrom($request->input('email'), $request->input('name'));

            // Siapa yang akan menerima email
            $mail->addAddress('naruto.gila6@gmail.com');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($request->input('email'), $request->input('name'));

            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();
            Session::flash('pesan', 'Thank you for reaching out to me!');
            return view('home1');

            // if (!$mail->send()) {
            //     echo "<script>
            //       Swal.fire({
            //         icon: 'error',
            //         text: 'Something went wrong. Please try again.',
            //         showConfirmButton: false,
            //         timer: 3000
            //       })
            //     </script>";
            // } else {
            //     echo "<script>
            //     Swal.fire({
            //         icon: 'success',
            //         title: 'Thank you for reaching out to me!',
            //     })
            //     </script>";
            // }
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}

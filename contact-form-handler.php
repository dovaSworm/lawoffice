<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mail response page</title>
    <style>
    body {
        color: #00C1FF;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 100vw;
        height: 100vh;
        background-image: linear-gradient(60deg, rgba(236, 246, 248, 0.7) 15%, rgba(174, 188, 209, 0.7), rgba(233, 247, 250, 0.6) 85%);
        background-size: cover;
    }

    div.m-auto {
        width: 100%;
        /* font-size: 2rem; */
        /* background: pink; */
        /* padding: 100px; */
        height: 40vh;
    }

    div.row {
        padding: 10px;
        background: #284866;
        position: absolute;
        margin: auto;
        width: 100%;
        /* text-align: center; */
        bottom: 0;
    }

    a {
        margin: auto;
    }

    img {
        width: 100%;
    }
    </style>
</head>

<body>

    <?php

date_default_timezone_set('Etc/UTC');

// Edit this path if PHPMailer is in a different location.
require './PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

/*
 * Server Configuration
 */

$mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
$mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
$mail->SMTPSecure = 'tls'; // Which security method to use. TLS is most secure.
$mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
$mail->Username = "misolovkaiq@gmail.com"; // Your Gmail address.
$mail->Password = "misolov1983ka"; // Your Gmail login password or App Specific Password.

/*
 * Message Configuration
 */
$from = $_POST["email"];
$body = $_POST["message"];
$mail->setFrom($from, 'Awesome Website'); // Set the sender of the message.
$mail->addAddress('misolovkaiq@gmail.com', 'Dova'); // Set the recipient of the message.
$mail->Subject = 'PHPMailer GMail SMTP test'; // The subject of the message.

/*
 * Message Content - Choose simple text or HTML email
 */
 
// Choose to send either a simple text email...
$mail->Body = $body; // Set a plain text body.

// ... or send an email with HTML.
//$mail->msgHTML(file_get_contents('contents.html'));
// Optional when using HTML: Set an alternative plain text message for email clients who prefer that.
//$mail->AltBody = 'This is a plain-text message body'; 

// Optional: attach a file
// $mail->addAttachment('images/phpmailer_mini.png');

if ($mail->send()) {?>
    <div class="m-auto text-center">
        <h2>
            <?php 
    echo 'Your message was sent successfully!'; ?>
        </h2>
        <div class="row no-gutters text-center m-auto">
            <a href="#"><img src="img/logo8.png" alt="logo footer"></a>
            <p class="text-center w-100"><small>Copyright © RDdesign 2019. All Rights Reserved</small></p>
        </div>
    </div>
    <?php
    header( "refresh:3;url=http://portfoliodd.epizy.com/" );
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
} ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$message = $_GET['message'];
$msg = wordwrap($message, 400);

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
$headers .= 'From: ' . $name. "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();


$messages = '<html><body>';
$messages .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$messages .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
$messages .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
$messages .= "<tr><td><strong>Phone:</strong> </td><td>" . $phone . "</td></tr>";
$messages .= "<tr><td><strong>Message:</strong> </td><td>" . $msg . "</td></tr>";
$messages .= "</table>";
$messages .= "</body></html>";

$to = "greenhelpdigital@gmail.com";
$subject = "Contact Client: " . $name;

mail($to, $subject, $messages, $headers);


//Mail user
$header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
$header .= 'From: GreenHelp'.  "\r\n" . 'Reply-To: ' . $to . "\r\n" . 'X-Mailer: PHP/' . phpversion();

$msgs = '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
        <tr>
            <td style="padding: 10px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                    <tr>
                        <td align="center" bgcolor="#7dd481" style="padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Circle-icons-mail.svg/512px-Circle-icons-mail.svg.png" alt="email icon" width="200" height="200" style="display: block;" />
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
                                        <b>Thank you for contacting us,</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                        Every word, every detail matters to us, that is why we allow an open environment of emails between you, the user, and us. 
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
                                        <b>Your Message:</b>
                                        <p style="padding: 20px 0 20px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">'.$msg.'</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ee4c50" style="padding: 30px 30px 30px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
                                        &reg; GreenHelp, Lisbon 2020<br/>
                                    </td>
                                    <td align="right" width="25%">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                    <a href="http://greenhelp.000webhostapp.com" style="color: #ffffff;">
                                                    Visit Our website!
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';

$sub = "Contact";
$result = mail($email, $sub, $msgs, $header);
if(!$result) {   
     echo "Error";   
} else {
    echo "Success";
}
//Mail user
?>

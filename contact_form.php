<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Load Composer's autoloader

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                         // Send using SMTP
        $mail->Host = 'smtp.hostinger.com';              // Set the SMTP server to send through
        $mail->SMTPAuth = true;                              // Enable SMTP authentication
        $mail->Username = 'info@saipicture.techcov.in';      // SMTP username
        $mail->Password = '@Sai_Picture0001';               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   // Enable TLS encryption
        $mail->Port = 587;                               // TCP port to connect to

        // Send to the owner
        $mail->setFrom('info@saipicture.techcov.in', 'Techcov Bot'); // Sender
        $mail->addAddress('akshanshkul7830@gmail.com');         // Owner's email
        $mail->addReplyTo($email, $name);                       // Add reply-to address

        // Content for owner
        $mail->isHTML(false);                                   // Set email format to plain text
        $mail->Subject = "Contact Form Submission from $name";
        $mail->Body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

        // Send the email to the owner
        $mail->send();

        // Prepare the thank-you email for the user
        $mail->clearAddresses(); // Clear previous addresses
        $mail->addAddress($email); // Add the user's email

        // Sender for the thank-you email
        $mail->setFrom('info@saipicture.techcov.in', 'Sai Picture Kasganj'); // Sender
        // Load the thank-you email template
        $thankYouTemplate = file_get_contents('thank_you_template.html'); // Adjust path as needed
        $thankYouMessage = str_replace(
            ['{NAME}', '{MESSAGE}'],
            [$name, $message],
            $thankYouTemplate
        );

        // Set thank-you email content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = "Thank You for Contacting Us";
        $mail->Body = $thankYouMessage;

        // Send the thank-you email
        $mail->send();

        echo "Message sent successfully!";
    } catch (Exception $e) {
        echo "Message sending failed. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
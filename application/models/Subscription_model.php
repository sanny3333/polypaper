<?php

class Subscription_model extends CI_Model
{
    public function isSubscribed($email)
    {
        // Check if the given email exists in the 'subscribers' table
        $this->db->where('email', $email);
        $query = $this->db->get('subscriptions');

        // If there's a matching row, the email is already subscribed
        return $query->num_rows() > 0;
    }
    public function insertSubscriber($email)
    {
        // Data to be inserted into the 'subscribers' table
        $data = array(
            'email' => $email,
            'is_subscribed' => 1 // Assuming 1 represents subscribed and 0 represents unsubscribed
        );

        // Insert the data into the 'subscribers' table
        $this->db->insert('subscriptions', $data);

        // Check if the insertion was successful
        return $this->db->affected_rows() > 0;
    }




    function sendConfirmationEmail($email)
    {
        // Load PHPMailer library

        $this->load->library('phpmailer');

        try {
            require_once(APPPATH . 'third_party/PHPMailer/PHPMailer.php');
            require_once(APPPATH . 'third_party/PHPMailer/SMTP.php');
            $mail = new PHPMailer(true);
            // Create a PHPMailer instance


            // Configure SMTP settings (e.g., Gmail)
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'patilkirtiraj1617@gmail.com'; // Your Gmail email address
            $mail->Password = 'sddn frdb gegq tpdh'; // Your Gmail password or App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

            $mail->Port = 465;
            $mail->SMTPSecure = 'ssl';
            // Sender and recipient
            $mail->setFrom('patilkirtiraj1617@gmail.com', 'XYZ Name');
            $mail->addAddress($email);

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Subscription Confirmation';
            $mail->Body = 'Thank you for subscribing to our newsletter.';

            // Send the email
            $mail->send();

        } catch (Exception $e) {
            // Handle email sending error (you may log or handle it differently)
            log_message('error', "Email could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }

}




?>